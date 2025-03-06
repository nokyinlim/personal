<?php
require 'components/navbar.php';
require 'components/footer.php';
require_once 'auth.php';


$auth = new Auth();

// Redirect to login if not logged in
if (!$auth->isLoggedIn()) {
  header('Location: login.php');
  exit;
}

$currentUser = $auth->getCurrentUser();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal Dashboard</title>
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <?php create_navbar(0, 'Personal Dashboard', $currentUser['username']); ?>

    <!-- Hero Section -->
    <section class="container mb-8">
        <div class="card p-8 mb-8">
            <div class="text-center mb-6">
                <h2 class="text-3xl mb-4">Welcome Back, <?php echo htmlspecialchars($currentUser['username']); ?></h2>
                <p class="text-muted">Your personal workspace for productivity, learning, and organization</p>
            </div>
            
            <div class="flex justify-between items-center">
                <div>
                    <p class="mb-2"><span class="badge badge-primary">Today</span>&nbsp;&nbsp;<?php echo date('l, F j, Y'); ?></p>
                    <p class="text-lg"><?php echo "Good " . (date('H') < 12 ? "morning" : (date('H') < 18 ? "afternoon" : "evening")); ?>!</p>
                </div>
                <a href="#quick-access" class="btn btn-primary">Quick Links&nbsp;&nbsp;<i class="fas fa-arrow-right ml-2"></i></a>
            </div>
        </div>
    </section>

    <!-- Quick Access Section -->
    <section id="quick-access" class="container mb-8">
        <div class="card-header">
            <h3>Quick Access</h3>
        </div>
        <div class="grid grid-cols-4">
            <a href="#" class="card text-center">
                <i class="fas fa-tasks text-primary text-2xl mb-2"></i>
                <h4>Tasks</h4>
            </a>
            <a href="/productivity/schedule/index.php" class="card text-center">
                <i class="fas fa-calendar-alt text-primary text-2xl mb-2"></i>
                <h4>Schedule</h4>
            </a>
            <a href="/academic/knowledge/" class="card text-center">
                <i class="fas fa-book text-primary text-2xl mb-2"></i>
                <h4>Revision Notes</h4>
            </a>
            <a href="#" class="card text-center">
                <i class="fas fa-bookmark text-primary text-2xl mb-2"></i>
                <h4>Bookmarks</h4>
            </a>
        </div>
    </section>

    <!-- Main Sections -->
    <section id="productivity" class="container mb-8">
        <div class="card-header">
            <h3>Productivity Tools</h3>
        </div>
        <div class="grid grid-cols-3 mb-4">
            <div class="card">
                <h4><i class="fas fa-list-check text-primary mr-2"></i> &nbsp;Task Management</h4>
                <p class="text-muted mb-4">Organize and track your daily tasks and projects</p>
                <a href="#" class="btn btn-outline btn-sm">Open</a>
            </div>
            <div class="card">
                <h4><i class="fas fa-chart-line text-primary mr-2"></i> &nbsp;Progress Tracking</h4>
                <p class="text-muted mb-4">Monitor progress on your personal goals</p>
                <a href="#" class="btn btn-outline btn-sm">Open</a>
            </div>
            <div class="card">
                <h4><i class="fas fa-calendar-week text-primary mr-2"></i> &nbsp;Schedule</h4>
                <p class="text-muted mb-4">View and manage your weekly timetable</p>
                <a href="/productivity/schedule/index.php" class="btn btn-outline btn-sm">Open</a>
            </div>
        </div>
    </section>

    <section id="academic" class="container mb-8">
        <div class="card-header">
            <h3>Academic Resources</h3>
        </div>
        <div class="grid grid-cols-3 mb-4">
            <div class="card">
                <h4><i class="fas fa-graduation-cap text-primary mr-2"></i> &nbsp;Knowledge Organizers</h4>
                <p class="text-muted mb-4">Quick subject revision materials and notes</p>
                <a href="/academic/knowledge/" class="btn btn-outline btn-sm">Open</a>
            </div>
            <div class="card">
                <h4><i class="fas fa-clock text-primary mr-2"></i> &nbsp;Study Planner</h4>
                <p class="text-muted mb-4">Plan and organize your study sessions</p>
                <a href="#" class="btn btn-outline btn-sm">Open</a>
            </div>
            <div class="card">
                <h4><i class="fas fa-pen-to-square text-primary mr-2"></i> &nbsp;Note Templates</h4>
                <p class="text-muted mb-4">Templates for effective note-taking</p>
                <a href="#" class="btn btn-outline btn-sm">Open</a>
            </div>
        </div>
    </section>

    <section id="utilities" class="container mb-8">
        <div class="card-header">
            <h3>Utilities</h3>
        </div>
        <div class="grid grid-cols-3 mb-4">
            <div class="card">
                <h4><i class="fas fa-code text-primary mr-2"></i> &nbsp;Helper Scripts</h4>
                <p class="text-muted mb-4">Scripts for automating common tasks</p>
                <a href="#" class="btn btn-outline btn-sm">Open</a>
            </div>
            <div class="card">
                <h4><i class="fas fa-book-open text-primary mr-2"></i> &nbsp;References</h4>
                <p class="text-muted mb-4">Important reference materials and guides</p>
                <a href="#" class="btn btn-outline btn-sm">Open</a>
            </div>
            <div class="card">
                <h4><i class="fas fa-link text-primary mr-2"></i> &nbsp;External Resources</h4>
                <p class="text-muted mb-4">Links to useful external tools and websites</p>
                <a href="#" class="btn btn-outline btn-sm">Open</a>
            </div>
        </div>
    </section>

    <!-- Recent Activity -->
    <section class="container mb-8">
        <div class="card">
            <div class="card-header">
                <h3>Recent Activity</h3>
            </div>
            <div class="mb-4">
                <div class="flex justify-between items-center p-3 border rounded mb-2">
                    <div>
                        <p class="font-semibold">Task Updated: Weekly Plan</p>
                        <p class="text-sm text-muted">Modified 2 hours ago</p>
                    </div>
                    <span class="badge badge-primary">Task</span>
                </div>
                <div class="flex justify-between items-center p-3 border rounded mb-2">
                    <div>
                        <p class="font-semibold">Note Created: Project Ideas</p>
                        <p class="text-sm text-muted">Created yesterday</p>
                    </div>
                    <span class="badge badge-success">Note</span>
                </div>
                <div class="flex justify-between items-center p-3 border rounded">
                    <div>
                        <p class="font-semibold">Schedule Updated: Study Sessions</p>
                        <p class="text-sm text-muted">Modified 3 days ago</p>
                    </div>
                    <span class="badge badge-warning">Schedule</span>
                </div>
            </div>
            <a href="#" class="btn btn-secondary">View All Activity</a>
        </div>
    </section>

    <!-- Status Summary -->
    <section class="container mb-8">
        <div class="grid grid-cols-3">
            <div class="card">
                <h4 class="mb-2">Task Progress</h4>
                <div class="progress mb-2">
                    <div class="progress-bar" style="width: 65%;"></div>
                </div>
                <p class="text-sm text-muted">65% of weekly tasks completed</p>
            </div>
            <div class="card">
                <h4 class="mb-2">Study Goals</h4>
                <div class="progress mb-2">
                    <div class="progress-bar" style="width: 40%; background-color: var(--color-warning);"></div>
                </div>
                <p class="text-sm text-muted">40% of study goals achieved</p>
            </div>
            <div class="card">
                <h4 class="mb-2">Project Status</h4>
                <div class="progress mb-2">
                    <div class="progress-bar" style="width: 80%; background-color: var(--color-success);"></div>
                </div>
                <p class="text-sm text-muted">80% of current project completed</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php footer(); ?>

    <script>
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
        }
    </script>
</body>
</html>