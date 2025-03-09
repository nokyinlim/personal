<?php
include_once __DIR__ . '/../dev/activities/activities.php';
include_once __DIR__ . '/activities.php';

function display_recent_activities($username) {
    $recent = get_recent_activities($username, 3);
    
    echo '<div class="recent-activities">';
    echo '<h2>Recent Activities</h2>';
    echo '<div class="grid grid-cols-1 gap-3 mt-3">';
    echo activities($recent);
    echo '</div>';
    echo '</div>';
}
?>
