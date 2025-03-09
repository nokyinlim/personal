<?php
// Start the session first
session_start();

// Include required files - make sure paths are correct
include_once '../../components/navbar.php';
include_once '../../database.php';
require '../../auth.php';
include '../../dev/utils/motivational_message.php';

// Create the Auth instance without specifying a prefix
// This matches how it's used in the root index.php
$auth = new Auth();

// Redirect to login if not logged in
if (!$auth->isLoggedIn()) {
    header('Location: login.php');
    exit;
}

$message = "";

if (isset($_COOKIE['userTimezone'])) {
  $userTimezone = $_COOKIE['userTimezone'];
  // Set the timezone for the application
  date_default_timezone_set($userTimezone);
} else {
  // Set the default timezone if the user hasn't set it. perhaps dialog box?
  date_default_timezone_set('UTC');
  $message = "You have not set a timezone for this session. All times will default to UTC.";
}

$_COOKIE['enteredPlanner'] = 'true';

$currentUser = $auth->getCurrentUser();

// if (!$currentUser) {
//     // User data couldn't be retrieved, session might be corrupted
//     $auth->logout();
//     header("Location: /login.php?error=session_expired");
//     exit();
// }
$username = $currentUser['username'];

$db = new SQLite3('../../database.db');

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Add study session
    if (isset($_POST['action']) && $_POST['action'] === 'add_session') {
        $subject = $_POST['subject'];
        $duration = $_POST['duration'];
        $date = $_POST['date'] ?? date('Y-m-d');
        $notes = $_POST['notes'] ?? '';
        $goalId = !empty($_POST['goal_id']) ? $_POST['goal_id'] : null;
        $identifier = $_POST['identifier'] ?? '';
        
        $stmt = $db->prepare("INSERT INTO study_sessions (username, subject, duration, date, notes, goal_id, identifier) 
                            VALUES (:username, :subject, :duration, :date, :notes, :goal_id, :identifier)");
        $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        $stmt->bindValue(':subject', $subject, SQLITE3_TEXT);
        $stmt->bindValue(':duration', $duration, SQLITE3_INTEGER);
        $stmt->bindValue(':date', $date, SQLITE3_TEXT);
        $stmt->bindValue(':notes', $notes, SQLITE3_TEXT);
        $stmt->bindValue(':goal_id', $goalId, $goalId ? SQLITE3_INTEGER : SQLITE3_NULL);
        $stmt->bindValue(':identifier', $identifier, SQLITE3_TEXT);
        $stmt->execute();
        
        // Update goal progress if matching identifier is found
        if (!empty($identifier)) {
            $db->exec("UPDATE study_goals SET 
                      hours_completed = hours_completed + ($duration/60.0) 
                      WHERE identifier = '$identifier' AND username = '$username'");
                      
            // Check if goal is completed
            $goalResult = $db->query("SELECT hours_required, hours_completed FROM study_goals 
                                     WHERE identifier = '$identifier' AND username = '$username'");
            $goal = $goalResult->fetchArray(SQLITE3_ASSOC);
            if ($goal && $goal['hours_completed'] >= $goal['hours_required']) {
                $db->exec("UPDATE study_goals SET status = 'completed' 
                          WHERE identifier = '$identifier' AND username = '$username'");
            }
        }
        
        header("Location: index.php?success=session_added");
        exit();
    }
    
    // Add study goal
    if (isset($_POST['action']) && $_POST['action'] === 'add_goal') {
        $title = $_POST['title'];
        $subject = $_POST['subject'];
        $targetDate = $_POST['target_date'];
        $hoursRequired = $_POST['hours_required'];
        $identifier = $_POST['identifier'];
        
        $stmt = $db->prepare("INSERT INTO study_goals (username, title, subject, target_date, hours_required, identifier) 
                            VALUES (:username, :title, :subject, :target_date, :hours_required, :identifier)");
        $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        $stmt->bindValue(':title', $title, SQLITE3_TEXT);
        $stmt->bindValue(':subject', $subject, SQLITE3_TEXT);
        $stmt->bindValue(':target_date', $targetDate, SQLITE3_TEXT);
        $stmt->bindValue(':hours_required', $hoursRequired, SQLITE3_INTEGER);
        $stmt->bindValue(':identifier', $identifier, SQLITE3_TEXT);
        $stmt->execute();
        
        header("Location: index.php?success=goal_added");
        exit();
    }
    
    // Start study timer
    if (isset($_POST['action']) && $_POST['action'] === 'start_timer') {
        $subject = $_POST['subject'];
        $goalId = !empty($_POST['goal_id']) ? $_POST['goal_id'] : null;
        $identifier = $_POST['identifier'] ?? '';
        
        $stmt = $db->prepare("INSERT INTO study_sessions (username, subject, duration, start_time, status, goal_id, identifier) 
                            VALUES (:username, :subject, 0, :start_time, 'in_progress', :goal_id, :identifier)");
        $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        $stmt->bindValue(':subject', $subject, SQLITE3_TEXT);
        $stmt->bindValue(':start_time', date('Y-m-d H:i:s'), SQLITE3_TEXT);
        $stmt->bindValue(':goal_id', $goalId, $goalId ? SQLITE3_INTEGER : SQLITE3_NULL);
        $stmt->bindValue(':identifier', $identifier, SQLITE3_TEXT);
        $stmt->execute();
        
        $sessionId = $db->lastInsertRowID();
        $_SESSION['active_session_id'] = $sessionId;
        
        header("Location: index.php?timer=active&session_id=$sessionId");
        exit();
    }
    
    // End study timer
    if (isset($_POST['action']) && $_POST['action'] === 'end_timer') {
      $sessionId = $_SESSION['active_session_id'] ?? 0;
      $notes = $_POST['notes'] ?? '';
      
      // Get the start time from the active session
      $sessionResult = $db->query("SELECT start_time, identifier FROM study_sessions WHERE id = $sessionId AND username = '$username'");
      $session = $sessionResult->fetchArray(SQLITE3_ASSOC);
      
      if ($session) {
          $startTime = new DateTime($session['start_time']);
          $endTime = new DateTime(); // Current time
          $duration = $endTime->getTimestamp() - $startTime->getTimestamp(); // Duration in seconds
          $identifier = $session['identifier'] ?? '';
          
          // Update the session
          $stmt = $db->prepare("UPDATE study_sessions SET duration = :duration, status = 'completed', notes = :notes WHERE id = :id AND username = :username");
          $stmt->bindValue(':duration', $duration, SQLITE3_INTEGER);
          $stmt->bindValue(':notes', $notes, SQLITE3_TEXT);
          $stmt->bindValue(':id', $sessionId, SQLITE3_INTEGER);
          $stmt->bindValue(':username', $username, SQLITE3_TEXT);
          $stmt->execute();
        
          // Update goal progress if identifier matches a goal
          if (!empty($identifier)) {
              $db->exec("UPDATE study_goals SET 
                        hours_completed = hours_completed + ($duration/3600.0) 
                        WHERE identifier = '$identifier' AND username = '$username'");
                        
              // Check if goal is completed
              $goalResult = $db->query("SELECT hours_required, hours_completed FROM study_goals 
                                     WHERE identifier = '$identifier' AND username = '$username'");
              $goal = $goalResult->fetchArray(SQLITE3_ASSOC);
              if ($goal && $goal['hours_completed'] >= $goal['hours_required']) {
                  $db->exec("UPDATE study_goals SET status = 'completed' 
                            WHERE identifier = '$identifier' AND username = '$username'");
              }
          }
        
          unset($_SESSION['active_session_id']);
          header("Location: index.php?success=session_completed");
          exit();
      }
    }
}

// Get active timer session if exists
$activeSession = null;
if (isset($_SESSION['active_session_id'])) {
    $sessionId = $_SESSION['active_session_id'];
    $result = $db->query("SELECT * FROM study_sessions WHERE id = $sessionId AND username = '$username'");
    $activeSession = $result->fetchArray(SQLITE3_ASSOC);
}

// Fetch recent study sessions
$result = $db->query("SELECT s.*, g.title as goal_title FROM study_sessions s 
                     LEFT JOIN study_goals g ON s.goal_id = g.id 
                     WHERE s.username = '$username' AND s.status = 'completed' 
                     ORDER BY s.date DESC, s.id DESC LIMIT 10");
                     
$recentSessions = [];
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $recentSessions[] = $row;
}

// Fetch active goals
$result = $db->query("SELECT * FROM study_goals 
                     WHERE username = '$username' AND status = 'in progress' 
                     ORDER BY target_date ASC");
                     
$activeGoals = [];
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $activeGoals[] = $row;
}

// Get study statistics
$totalResult = $db->query("SELECT SUM(duration) as total_minutes, COUNT(*) as session_count 
                         FROM study_sessions WHERE username = '$username' AND status = 'completed'");
$totalStats = $totalResult->fetchArray(SQLITE3_ASSOC);
$totalMinutes = $totalStats['total_minutes'] ? round($totalStats['total_minutes'] / 60, 1) : 0;
$totalHours = $totalMinutes ? round($totalMinutes / 60, 1) : 0;

// Calculate average session length correctly (in seconds!)
$averageSessionLengthSeconds = $totalStats['session_count'] ? round(($totalStats['total_minutes'] / $totalStats['session_count']), 0) : 0;
// Average length, in minutes
$averageSessionLength = $averageSessionLengthSeconds ? round($averageSessionLengthSeconds / 60, 0) : 0;

// Get subject distribution
$subjectResult = $db->query("SELECT subject, SUM(duration) as total_minutes 
                           FROM study_sessions WHERE username = '$username' AND status = 'completed' 
                           GROUP BY subject ORDER BY total_minutes DESC LIMIT 5");
                           
$subjectStats = [];
while ($row = $subjectResult->fetchArray(SQLITE3_ASSOC)) {
    $subjectStats[] = $row;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Study Planner</title>
    <script src="/glow-effect.js"></script>
</head>
<body>
    <?php if (function_exists('create_navbar')) create_navbar(2, 'Study Planner'); ?>
    
    <!-- Hero Section -->
    <section class="container mb-8">
      <div class="card p-8 cursor-glow-alt glow-teal">
        <div class="text-center mb-6">
          <h2 class="text-3xl mb-4">Study Planner and Tracker</h2>
          <p class="text-muted">Plan your study sessions, track your progress, and achieve your learning goals</p>
        </div>
      </div>
    </section>

    <section class="container mb-8">
      <div class="card p-8 mb-8 no-hover-transform">
        <h1 class="text-3xl mb-4">Study Planner & Tracker</h1>
        <p class="text-muted">Plan your study sessions, track your progress, and achieve your learning goals</p>
        
            <?php if (isset($_GET['success'])): ?>
                <div class="alert alert-success mb-4">
                    <?php if ($_GET['success'] === 'session_added'): ?>
                        <p style="margin-bottom:0.5rem;">Study session recorded successfully!</p>
                        <p class="text-muted" style="margin-bottom:0;">Great job! Keep up the momentum!</p>
                        
                        
                    <?php elseif ($_GET['success'] === 'goal_added'): ?>
                        <p style="margin-bottom:0.5rem;">Learning goal created successfully!</p>
                        <p class="text-muted" style="margin-bottom:0;">Get started with progress towards your goal by starting a Study Session!</p>
                    <?php elseif ($_GET['success'] === 'session_completed'): ?>
                        <p style="margin-bottom:0.5rem;">Study session completed successfully!</p>
                        <p class="text-muted" style="margin-bottom:0;">Keep up the good work!</p>
                    <?php else: ?>
                        <p style="margin-bottom:0.5rem;">There's nothing here!</p>
                        <p class="text-muted" style="margin-bottom:0;"><?= get_study_session_motivation(); ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            
            <!-- Study Timer Section -->
            <div class="card mb-6">
                <h2 class="mb-4">Study Timer</h2>
                
                <?php if ($activeSession): ?>
                    <!-- Active Timer Display -->
                    <div class="alert alert-primary mb-4">
                        <p>Currently studying: <strong><?= htmlspecialchars($activeSession['subject']) ?></strong></p>
                    </div>
                    
                    <div class="timer-display" id="timer">00:00:00</div>
                    
                    <form method="POST" id="end-timer-form">
                        <input type="hidden" name="action" value="end_timer">
                        <input type="hidden" name="duration" id="duration-input" value="0">
                        
                        <div class="mb-4">
                            <label for="notes" class="block mb-2">Session Notes</label>
                            <textarea name="notes" id="notes" rows="3" class="form-input w-full"></textarea>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger">End Session</button>
                        </div>
                    </form>
                    
                    <script>
                        // Calculate elapsed time since session start
                        const startTime = new Date("<?= $activeSession['start_time'] ?>").getTime();
                        let timerInterval;
                        let totalSeconds = 0;
                        
                        function updateTimer() {
                            const now = Date.now();
                            totalSeconds = Math.floor((now - startTime) / 1000);
                            
                            const hours = Math.floor(totalSeconds / 3600);
                            const minutes = Math.floor((totalSeconds % 3600) / 60);
                            const seconds = totalSeconds % 60;
                            
                            document.getElementById('timer').textContent = 
                                `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
                            
                            document.getElementById('duration-input').value = totalSeconds * 60;
                        }
                        
                        // Update timer immediately and then every second
                        updateTimer();
                        timerInterval = setInterval(updateTimer, 1000);
                    </script>
                <?php else: ?>
                    <!-- Start New Timer Form -->
                    <form method="POST" class="grid grid-cols-2 gap-4">
                        <input type="hidden" name="action" value="start_timer">
                        
                        <div class="col-span-2 md:col-span-1">
                            <label for="subject" class="block mb-4">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-input w-full" required>
                        </div>
                        
                        <div class="col-span-2 md:col-span-1">
                            <label for="identifier" class="block mb-4">Goal Identifier (Optional)</label>
                            <input type="text" name="identifier" id="identifier" class="form-input w-full">
                        </div>
                        
                        <div class="col-span-2">
                            <button type="submit" class="btn btn-primary">Start Studying</button>
                        </div>
                    </form>
                <?php endif; ?>
            </div>
            
            <!-- Quick Add Study Session -->
            <div class="card mb-6">
                <h2 class="mb-4">Record Study Session</h2>
                <p class="text-muted mb-4">The goal identifier should be the same as the Learning Goal you have set. This allows the Planner to automatically update your goal progress.</p>
                <form method="POST" class="grid grid-cols-2 gap-4">
                    <input type="hidden" name="action" value="add_session">
                    
                    <div>
                        <label for="manual_subject" class="block mb-2">Subject</label>
                        <input type="text" name="subject" id="manual_subject" class="form-input w-full" required>
                    </div>
                    
                    <div>
                        <label for="duration" class="block mb-2">Duration (minutes)</label>
                        <input type="number" name="duration" id="duration" class="form-input w-full" min="1" required>
                    </div>
                    
                    <div>
                        <label for="date" class="block mb-2">Date</label>
                        <input type="date" name="date" id="date" class="form-input w-full" value="<?= date('Y-m-d') ?>" required>
                    </div>

                    <div>
                        <label for="identifier" class="block mb-2">Goal Identifier (Optional)</label>
                        <input type="text" name="identifier" id="manual_identifier" class="form-input w-full">
                    </div>
                    
                    <div class="col-span-2">
                        <label for="notes" class="block mb-2">Notes (Optional)</label>
                        <textarea name="notes" id="notes" rows="2" class="form-input w-full" style="resize:vertical;"></textarea>
                    </div>
                    
                    <div class="col-span-2 text-center">
                        <label class="block text-muted mb-2"></label><br>
                        <button type="submit" class="btn btn-outline">Save Session</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <!-- Dashboard Sections -->
    <section class="container mb-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Learning Goals Section -->
            <div class="md:col-span-2">
                <div class="card no-hover-transform p-6 mb-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2>Learning Goals</h2>
                        <button id="show-goal-form" class="btn btn-sm btn-primary">Add Goal</button>
                    </div>
                    
                    <div id="add-goal-form" class="card p-4 mb-4" style="display: none;">
                        <h3 class="mb-3">Create New Learning Goal</h3>
                        <form method="POST" class="grid grid-cols-2 gap-4">
                            <input type="hidden" name="action" value="add_goal">
                            
                            <div class="col-span-2">
                                <label for="goal_title" class="block mb-2">Goal Title</label>
                                <input type="text" name="title" id="goal_title" class="form-input w-full" required>
                            </div>
                            
                            <div>
                                <label for="goal_subject" class="block mb-2">Subject</label>
                                <input type="text" name="subject" id="goal_subject" class="form-input w-full" required>
                            </div>
                            
                            <div>
                                <label for="hours_required" class="block mb-2">Study Hours Required</label>
                                <input type="number" name="hours_required" id="hours_required" class="form-input w-full" min="0" required>
                            </div>
                            
                            <div>
                                <label for="target_date" class="block mb-2">Target Completion Date</label>
                                <input type="date" name="target_date" id="target_date" class="form-input w-full" required>
                            </div>
                            
                            <div>
                                <label for="identifier" class="block mb-2">Unique Identifier</label>
                                <input type="text" name="identifier" id="goal_identifier" class="form-input w-full" required>
                            </div>
                            
                            <div class="col-span-2 text-right">
                                <button type="button" id="cancel-goal-form" class="btn btn-subtle mr-2">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save Goal</button>
                            </div>
                        </form>
                    </div>
                    
                    <?php if (empty($activeGoals)): ?>
                        <div class="text-center py-4">
                            <p class="text-muted">You haven't set any learning goals yet.</p>
                        </div>
                    <?php else: ?>
                        <div class="grid grid-cols-1 gap-4">
                        <?php foreach ($activeGoals as $goal): ?>
                            <?php 
                              $progress = $goal['hours_completed'] / $goal['hours_required'] * 100;
                              $progress = min(100, max(0, $progress));
                              $daysLeft = (strtotime($goal['target_date']) - time()) / 86400;
                              
                              // Calculate color based on progress
                              $red = min(255, 255 - ($progress * 2.55));
                              $green = min(255, $progress * 2.55);
                              $progressColor = "$red, $green, 0";
                            ?>
                            <div class="card p-4 mb-3 no-hover-transform cursor-glow-alt cursor-glow-alt-large" style="--glow-color: <?= $progressColor ?>">
                              <div class="flex justify-between mb-2">
                                <h4><?= htmlspecialchars($goal['title']) ?></h4>
                                <span class="badge bg-subtle"><?= htmlspecialchars($goal['subject']) ?></span>
                              </div>
                              
                              <div class="progress-container">
                                <div class="progress-bar" style="width: <?= $progress ?>%; background-color: rgb(<?= $progressColor ?>);"></div>
                              </div>
                              
                              <div class="flex justify-between text-sm">
                                <span><?= number_format($goal['hours_completed'], 1) ?> / <?= $goal['hours_required'] ?> hours</span>
                                <span><?= round($progress) ?>% complete</span>
                              </div>
                              
                              <div class="mt-2 text-sm text-muted">
                                <?php if ($daysLeft > 0): ?>
                                  <span><?= ceil($daysLeft) ?> days remaining</span>
                                <?php else: ?>
                                  <span class="text-error">Deadline passed</span>
                                <?php endif; ?>
                              </div>
                            </div>
                        <?php endforeach; ?>
                      </div>
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- Statistics Section -->
            <div>
                <div class="card p-6 mb-6">
                    <h2 class="mb-4">Study Statistics</h2>
                    
                    <div class="mb-4">
                        <div class="flex justify-between mb-2">
                            <span>Total Study Time</span>
                            <span class="font-bold"><?= $totalHours ?> hours</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span>Total Sessions</span>
                            <span class="font-bold"><?= $totalStats['session_count'] ?? 0 ?></span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span>Avg. Session Length</span>
                            <span class="font-bold">
                                <?= $averageSessionLength ?> min
                            </span>
                        </div>
                    </div>
                    
                    <h3 class="mb-2">Subject Breakdown</h3>
                    <div class="subject-chart">
                        <?php if (empty($subjectStats)): ?>
                            <p class="text-muted text-center py-8">No data available</p>
                        <?php else: ?>
                            <?php foreach ($subjectStats as $stat): ?>
                                <?php 
                                    $percentage = ($stat['total_minutes'] / $totalStats['total_minutes']) * 100;
                                    $minutes = round($stat['total_minutes'] / 60, 1);
                                ?>
                                <div class="mb-2">
                                    <div class="flex justify-between mb-1">
                                        <span><?= htmlspecialchars($stat['subject']) ?></span>
                                        <span><?= $minutes > 180 ? round($minutes / 60, 1) . ' hours' : $minutes . ' minutes' ?></span>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: <?= $percentage ?>%"></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Recent Sessions -->
        <div class="card p-6">
            <h2 class="mb-4">Recent Study Sessions</h2>
            
            <?php if (empty($recentSessions)): ?>
                <div class="text-center py-4">
                    <p class="text-muted">No study sessions recorded yet.</p>
                </div>
            <?php else: ?>
                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Subject</th>
                                <th>Duration</th>
                                <th>Goal</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($recentSessions as $session): ?>
                                <tr>
                                    <td><?= date('M j, Y', strtotime($session['date'])) ?></td>
                                    <td><?= htmlspecialchars($session['subject']) ?></td>
                                    <td>
                                        <?php 
                                            $hours = floor($session['duration'] / 3600);
                                            $minutes = round(($session['duration'] % 3600) / 60, 1);
                                            echo ($hours > 0 ? "$hours hr " : "") . "$minutes min";
                                        ?>
                                    </td>
                                    <td><?= $session['identifier'] ? htmlspecialchars($session['identifier']) : '-' ?></td>
                                    <td><?= $session['notes'] ? htmlspecialchars($session['notes']) : '-' ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </section>
    
    <script>
        // Toggle goal form visibility
        document.getElementById('show-goal-form').addEventListener('click', function() {
            document.getElementById('add-goal-form').style.display = 'block';
        });
        
        document.getElementById('cancel-goal-form').addEventListener('click', function() {
            document.getElementById('add-goal-form').style.display = 'none';
        });
        
        // Date validation - prevent selecting future dates for past sessions
        document.getElementById('date').max = new Date().toISOString().split('T')[0];
        
        // Date validation - prevent selecting past dates for goal targets
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('target_date').min = today;
    </script>
</body>
</html>