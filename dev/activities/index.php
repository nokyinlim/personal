<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/database.php');

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: /login.php');
    exit;
}

class ActivityManager extends Database {
    private $db;

    public function __construct() {
        $this->db = new SQLite3($_SERVER['DOCUMENT_ROOT'] . '/database.db');
    }

    // Get activities for a user
    public function getActivities($username, $limit = 10, $offset = 0) {
        $query = 'SELECT * FROM activities WHERE username = :username 
                  ORDER BY date DESC, id DESC LIMIT :limit OFFSET :offset';
        
        $stmt = $this->db->prepare($query);
        
        $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        $stmt->bindValue(':limit', $limit, SQLITE3_INTEGER);
        $stmt->bindValue(':offset', $offset, SQLITE3_INTEGER);
        
        $result = $stmt->execute();
        
        $activities = [];
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $activities[] = $row;
        }
        
        return $activities;
    }
    
    // Count unread activities (for display only)
    public function countUnreadActivities($username) {
        $stmt = $this->db->prepare('
            SELECT COUNT(*) as count FROM activities 
            WHERE username = :username AND status = "unread"
        ');
        
        $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        $result = $stmt->execute();
        $row = $result->fetchArray(SQLITE3_ASSOC);
        
        return $row['count'];
    }
    
    // Delete an activity
    public function deleteActivity($id, $username) {
        $stmt = $this->db->prepare('
            DELETE FROM activities WHERE id = :id AND username = :username
        ');
        
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
        $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        
        try {
            $result = $stmt->execute();
            return $result ? true : false;
        } catch (Exception $e) {
            return false;
        }
    }

    // Add a new activity for debug purposes
    public function addActivity($username, $title, $description = null, $type = 'notification', $status = 'unread', $link = null, $image = null) {
        $currentDateTime = date('Y-m-d H:i:s');

        
        
        $stmt = $this->db->prepare('
            INSERT INTO activities (username, title, description, type, status, link, image, date) 
            VALUES (:username, :title, :description, :type, :status, :link, :image, :date)
        ');
        
        $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        $stmt->bindValue(':title', $title, SQLITE3_TEXT);
        $stmt->bindValue(':description', $description, SQLITE3_TEXT);
        $stmt->bindValue(':type', $type, SQLITE3_TEXT);
        $stmt->bindValue(':status', $status, SQLITE3_TEXT);
        $stmt->bindValue(':link', $link, SQLITE3_TEXT);
        $stmt->bindValue(':image', $image, SQLITE3_TEXT);
        $stmt->bindValue(':date', $currentDateTime, SQLITE3_TEXT);
        
        try {
            $result = $stmt->execute();
            return $result ? $this->db->lastInsertRowID() : false;
        } catch (Exception $e) {
            return false;
        }
    }
}

// Handle AJAX requests
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $activityManager = new ActivityManager();
    $response = ['success' => false];
    
    $username = $_SESSION['username'];
    
    switch ($_POST['action']) {
        case 'get_activities':
            $limit = isset($_POST['limit']) ? intval($_POST['limit']) : 10;
            $offset = isset($_POST['offset']) ? intval($_POST['offset']) : 0;
            
            $response['activities'] = $activityManager->getActivities($username, $limit, $offset);
            $response['success'] = true;
            break;
            
        case 'delete':
            if (isset($_POST['activity_id'])) {
                $response['success'] = $activityManager->deleteActivity($_POST['activity_id'], $username);
            }
            break;
            
        case 'count_unread':
            $response['count'] = $activityManager->countUnreadActivities($username);
            $response['success'] = true;
            break;

        case 'add_activity':
            if (isset($_POST['title'])) {
                $id = $activityManager->addActivity(
                    $username, 
                    $_POST['title'],
                    $_POST['description'] ?? null,
                    $_POST['type'] ?? 'notification',
                    $_POST['status'] ?? 'unread',
                    $_POST['link'] ?? null,
                    $_POST['image'] ?? null
                );
                $response['activity_id'] = $id;
                $response['success'] = ($id !== false);
            }
            break;
    }
    
    echo json_encode($response);
    exit;
}

// Get activities for display
$activityManager = new ActivityManager();
$activities = $activityManager->getActivities($_SESSION['username'], 20);
$unreadCount = $activityManager->countUnreadActivities($_SESSION['username']);

// HTML output begins below
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
</head>
<body>
    <div class="container mb-4">
        <div class="card mb-4">
            <h1>Activities <?php if ($unreadCount > 0): ?><span class="badge"><?php echo $unreadCount; ?></span><?php endif; ?></h1>
        </div>

        <div id="activities-list" class="card mb-4">
            <?php if (empty($activities)): ?>
                <p>No activities to display.</p>
            <?php else: ?>
                <?php foreach ($activities as $activity): ?>
                    <div class="alert <?php echo $activity['status'] === 'unread' ? 'unread' : ''; ?>" data-id="<?php echo $activity['id']; ?>">
                        <div class="activity-title"><?php echo htmlspecialchars($activity['title']); ?></div>
                        <div class="activity-date"><?php echo htmlspecialchars($activity['date']); ?></div>
                        <?php if ($activity['description']): ?>
                            <div class="activity-description"><?php echo htmlspecialchars($activity['description']); ?></div>
                        <?php endif; ?>
                        <?php if ($activity['link']): ?>
                            <div class="activity-link"><a href="<?php echo htmlspecialchars($activity['link']); ?>">View Details</a></div>
                        <?php endif; ?>
                        <div class="activity-actions">
                            <button class="delete-activity" data-id="<?php echo $activity['id']; ?>">Delete</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- Debug Activity Creation Form -->
        <div class="debug-section">
            <h2>Debug: Create Activity</h2>
              <form id="eventForm" method="post">
                  <input type="hidden" name="action" value="add_activity">
                  <input type="hidden" name="id" id="event_id">
                  
                  <div class="form-group">
                      <label for="activity-title" class="form-label">Title</label>
                      <input type="text" class="form-control" id="activity-title" name="title" required>
                  </div>
                  
                  <div class="form-group">
                      <label for="activity-description" class="form-label">Description</label>
                      <textarea class="form-control" id="activity-description" name="description" rows="3"></textarea>
                  </div>
                  

                  
                  <div class="form-group">
                      <label for="activity-type" class="form-label">Type</label>
                      <select class="form-select" id="activity-type" name="type">
                        <option value="notification">Notification</option>
                        <option value="achievement">Achievement</option>
                        <option value="alert">Alert</option>
                        <option value="update">Update</option>
                        <option value="goal">Goal</option>
                      </select>
                  </div>

                  <div class="form-group">
                      <label for="activity-status" class="form-label">Status</label>
                      <select class="form-select" id="activity-status" name="status">
                        <option value="read">Read</option>
                        <option value="unread">Unread</option>
                      </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="activity-link">Link</label>
                    <input type="text" class="form-control" id="activity-link" name="link" placeholder="http://...">
                  </div>

                  <div class="form-group">
                    <label for="activity-image">Image URL</label>
                    <input type="text" class="form-control" id="activity-image" name="image" placeholder="http://...">
                  </div>
                  
                  
                  <div class="mt-4 text-end">
                      <button type="submit" class="btn btn-primary">
                          <i class="fas fa-save"></i>&nbsp;&nbsp;Create Activity
                      </button>
                  </div>
              </form>
              
              <form id="deleteForm" method="post" style="display: none;">
                  <input type="hidden" name="action" value="delete_event">
                  <input type="hidden" name="id" id="delete_event_id">
              </form>
            
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Delete activity
            document.querySelectorAll('.delete-activity').forEach(button => {
                button.addEventListener('click', function() {
                    const activityId = this.getAttribute('data-id');
                    deleteActivity(activityId);
                });
            });

            function deleteActivity(activityId) {
                if (confirm('Are you sure you want to delete this activity?')) {
                    fetch('/dev/activities/index.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: 'action=delete&activity_id=' + activityId
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            const activityItem = document.querySelector(`.activity-item[data-id="${activityId}"]`);
                            activityItem.remove();
                            updateUnreadCount();
                        }
                    });
                }
            }

            function updateUnreadCount() {
                fetch('/dev/activities/index.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'action=count_unread'
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const badge = document.querySelector('.badge');
                        if (data.count > 0) {
                            if (badge) {
                                badge.textContent = data.count;
                            } else {
                                const heading = document.querySelector('h1');
                                const newBadge = document.createElement('span');
                                newBadge.className = 'badge';
                                newBadge.textContent = data.count;
                                heading.appendChild(newBadge);
                            }
                        } else if (badge) {
                            badge.remove();
                        }
                    }
                });
            }

            // Handle create activity form submission
            const activityForm = document.getElementById('eventForm');
            if (activityForm) {
                activityForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const formData = new FormData(this);
                    const data = new URLSearchParams();
                    
                    for (const pair of formData.entries()) {
                        data.append(pair[0], pair[1]);
                    }
                    
                    fetch('/dev/activities/index.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: data
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Activity created successfully!');
                            window.location.reload(); // Reload to see the new activity
                        } else {
                            alert('Failed to create activity.');
                        }
                    });
                });
            }
        });
    </script>
</body>
</html>
