<?php

function activities($activities) {
    $html = '';
    
    if (empty($activities)) {
        return '<div class="text-center p-4">No activities found</div>';
    }

    foreach ($activities as $activity) {
        // Determine icon based on activity type and card class based on type
        $icon = '';
        $cardClass = '';
        
        switch ($activity['type']) {
            case 'notification':
                $icon = '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>';
                $cardClass = 'border-blue-400';
                break;
            case 'reminder':
                $icon = '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>';
                $cardClass = 'border-yellow-400';
                break;
            case 'event':
                $icon = '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>';
                $cardClass = 'border-green-400';
                break;
            default:
                $icon = '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>';
                $cardClass = 'border-gray-400';
        }

        // Status indicator class
        $statusClass = $activity['status'] === 'unread' ? 'bg-red-500' : 'bg-green-500';

        $html .= '
        <div class="card glow ' . $cardClass . '">
            <div class="card-header">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="mr-2">' . $icon . '</div>
                        <h3>' . htmlspecialchars($activity['title']) . '</h3>
                    </div>
                    <div class="status-indicator ' . $statusClass . '"></div>
                </div>
            </div>
            <div class="card-body">
                <p>' . htmlspecialchars($activity['description']) . '</p>
            </div>
            <div class="card-footer">
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">' . htmlspecialchars($activity['date']) . '</span>';
        
        if (!empty($activity['link'])) {
            $html .= '<a href="' . htmlspecialchars($activity['link']) . '" class="btn btn-sm">View</a>';
        }
        
        $html .= '
                </div>
            </div>
        </div>';
    }

    return $html;
}

function add_activity($username, $title, $description, $type = 'notification', $status = 'unread', $link = '', $image = '') {
    /**
     * Utility function to add an activity from anywhere in the application
     */
    include_once $_SERVER['DOCUMENT_ROOT'] . '/database.php';
    $db = new Database();
    
    $stmt = $db->prepare('INSERT INTO activities (username, title, description, type, status, link, image) VALUES (:username, :title, :description, :type, :status, :link, :image)');
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':title', $title);
    $stmt->bindValue(':description', $description);
    $stmt->bindValue(':type', $type);
    $stmt->bindValue(':status', $status);
    $stmt->bindValue(':link', $link);
    $stmt->bindValue(':image', $image);
    $stmt->execute();
    
    return $db->lastInsertRowID();
}