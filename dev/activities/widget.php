<?php
// session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/database.php');

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // Return empty widget if not logged in
    echo "<div class='activities-widget empty'>Please log in to see activities</div>";
    exit;
}

// Helper function to convert timestamps to relative time strings
function getTimeAgo($timestamp) {
    $currentTime = time();
    $time = strtotime($timestamp);
    $timeDiff = $currentTime - $time;
    
    $seconds = $timeDiff;
    $minutes = round($seconds / 60);
    $hours = round($seconds / 3600);
    $days = round($seconds / 86400);
    $weeks = round($seconds / 604800);
    $months = round($seconds / 2629440);
    $years = round($seconds / 31553280);
    
    if ($seconds <= 60) {
        return "Just now";
    } else if ($minutes <= 60) {
        return $minutes == 1 ? "1 minute ago" : "$minutes minutes ago";
    } else if ($hours <= 24) {
        return $hours == 1 ? "1 hour ago" : "$hours hours ago";
    } else if ($days <= 7) {
        return $days == 1 ? "1 day ago" : "$days days ago";
    } else if ($weeks <= 4.3) {
        return $weeks == 1 ? "1 week ago" : "$weeks weeks ago";
    } else if ($months <= 12) {
        return $months == 1 ? "1 month ago" : "$months months ago";
    } else {
        return $years == 1 ? "1 year ago" : "$years years ago";
    }
}

class ActivityWidget extends Database {
    private $db;

    public function __construct() {
        $this->db = new SQLite3($_SERVER['DOCUMENT_ROOT'] . '/database.db');
    }

    // Get recent activities for widget display
    public function getRecentActivities($username, $limit = 5) {
        $query = 'SELECT * FROM activities WHERE username = :username 
                  ORDER BY date DESC, id DESC LIMIT :limit';
        
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        $stmt->bindValue(':limit', $limit, SQLITE3_INTEGER);
        
        $result = $stmt->execute();
        
        $activities = [];
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $activities[] = $row;
        }
        
        return $activities;
    }
    
    // Get unread count
    public function getUnreadCount($username) {
        $stmt = $this->db->prepare('
            SELECT COUNT(*) as count FROM activities 
            WHERE username = :username AND status = "unread"
        ');
        
        $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        $result = $stmt->execute();
        $row = $result->fetchArray(SQLITE3_ASSOC);
        
        return $row['count'];
    }
}

// Initialize widget
$activityWidget = new ActivityWidget();
$username = $_SESSION['username'];
$activities = $activityWidget->getRecentActivities($username, 5);
$unreadCount = $activityWidget->getUnreadCount($username);

// If it's an AJAX request, just return activities as JSON
if (isset($_GET['ajax']) && $_GET['ajax'] === 'true') {
    header('Content-Type: application/json');
    echo json_encode([
        'activities' => $activities,
        'unreadCount' => $unreadCount
    ]);
    exit;
}

// Otherwise output the widget HTML
?>

<!-- Activities Widget HTML -->

<div class="card-header">
  <h3>Recent Activity</h3>
</div>
<div class="mb-4">
<?php foreach ($activities as $activity): ?>
  <?php
  $colors = [
    'notification' => '-error',
    'achievement' => '-primary',
    'goal' => '-success',
    'alert' => '-warning',
    'update' => '-info'
  ];
  
  $color = isset($colors[$activity['type']]) ? $colors[$activity['type']] : '';
  ?>

  <div class="flex card justify-between items-center p-3 border rounded mb-2">
    <div>
      <p class="font-semibold"><?php echo htmlspecialchars($activity['title']) ?></p>
      <p class="text-sm text-muted"><?php echo htmlspecialchars($activity['description']) ?></p>
      
    </div>
    <div class="text-center"><span class="badge badge<?php echo $color ?> mb-2 mt-4"><?= htmlspecialchars(ucwords($activity['type'])) ?></span><br><?php 
      echo '<p class="text-sm text-muted">' . getTimeAgo($activity['date']) . '</p>';
      ?></div>
  </div>
  

<?php endforeach; ?>
</div>


<!-- Widget JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('activitiesToggle');
    const dropdown = document.getElementById('activitiesDropdown');
    
    // Toggle dropdown
    toggle.addEventListener('click', function() {
        dropdown.classList.toggle('active');
    });
    
    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        const isClickInside = toggle.contains(event.target) || dropdown.contains(event.target);
        if (!isClickInside && dropdown.classList.contains('active')) {
            dropdown.classList.remove('active');
        }
    });
    
    // Auto-update the widget every minute
    setInterval(function() {
        updateActivitiesWidget();
    }, 60000);
    
    // Function to convert timestamp to relative time string
    function getTimeAgo(timestamp) {
        const currentTime = Math.floor(Date.now() / 1000);
        const time = new Date(timestamp).getTime() / 1000;
        const timeDiff = currentTime - time;
        
        const seconds = timeDiff;
        const minutes = Math.round(seconds / 60);
        const hours = Math.round(seconds / 3600);
        const days = Math.round(seconds / 86400);
        const weeks = Math.round(seconds / 604800);
        const months = Math.round(seconds / 2629440);
        const years = Math.round(seconds / 31553280);
        
        if (seconds <= 60) {
            return "Just now";
        } else if (minutes <= 60) {
            return minutes == 1 ? "1 minute ago" : minutes + " minutes ago";
        } else if (hours <= 24) {
            return hours == 1 ? "1 hour ago" : hours + " hours ago";
        } else if (days <= 7) {
            return days == 1 ? "1 day ago" : days + " days ago";
        } else if (weeks <= 4.3) {
            return weeks == 1 ? "1 week ago" : weeks + " weeks ago";
        } else if (months <= 12) {
            return months == 1 ? "1 month ago" : months + " months ago";
        } else {
            return years == 1 ? "1 year ago" : years + " years ago";
        }
    }

    function updateActivitiesWidget() {
        fetch('/dev/activities/widget.php?ajax=true')
            .then(response => response.json())
            .then(data => {
                const badgeElement = toggle.querySelector('.activities-badge');
                
                // Update badge
                if (data.unreadCount > 0) {
                    if (badgeElement) {
                        badgeElement.textContent = data.unreadCount;
                    } else {
                        const newBadge = document.createElement('span');
                        newBadge.className = 'activities-badge';
                        newBadge.textContent = data.unreadCount;
                        toggle.appendChild(newBadge);
                    }
                } else if (badgeElement) {
                    badgeElement.remove();
                }
                
                // Update activities list if dropdown is visible
                if (dropdown.classList.contains('active')) {
                    const activitiesList = dropdown.querySelector('.activities-list');
                    activitiesList.innerHTML = ''; // Clear list
                    
                    if (data.activities.length === 0) {
                        const emptyDiv = document.createElement('div');
                        emptyDiv.className = 'empty-activities';
                        emptyDiv.textContent = 'No recent activities';
                        activitiesList.appendChild(emptyDiv);
                    } else {
                        data.activities.forEach(activity => {
                            const activityDiv = document.createElement('div');
                            activityDiv.className = 'activity-item';
                            if (activity.status === 'unread') {
                                activityDiv.classList.add('unread');
                            }
                            
                            const titleDiv = document.createElement('div');
                            titleDiv.className = 'activity-title';
                            titleDiv.textContent = activity.title;
                            
                            const dateDiv = document.createElement('div');
                            dateDiv.className = 'activity-date';
                            dateDiv.textContent = getTimeAgo(activity.date);
                            
                            activityDiv.appendChild(titleDiv);
                            activityDiv.appendChild(dateDiv);
                            
                            if (activity.link) {
                                const linkElem = document.createElement('a');
                                linkElem.href = activity.link;
                                linkElem.className = 'activity-link';
                                linkElem.textContent = 'View';
                                activityDiv.appendChild(linkElem);
                            }
                            
                            activitiesList.appendChild(activityDiv);
                        });
                    }
                }
            });
    }
});
</script>


