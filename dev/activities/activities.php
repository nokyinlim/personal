<?php

include '../../database.php';

function create_activity(string $title, string $description, string $type, string $status, string $link, string $image, string $username) {
    /**
     * Create a new activity.
     * Returns the ID of the new activity.
     */

    global $db;
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

function get_all_activities(string $username, int $limit = null) {
    /**
     * Get all activities for a user.
     * Optionally limit the number of results.
     */

    global $db;
    $query = 'SELECT * FROM activities WHERE username = :username ORDER BY date DESC, id DESC';
    
    if ($limit !== null) {
        $query .= ' LIMIT :limit';
    }
    
    $stmt = $db->prepare($query);
    $stmt->bindValue(':username', $username);
    
    if ($limit !== null) {
        $stmt->bindValue(':limit', $limit, SQLITE3_INTEGER);
    }
    
    $result = $stmt->execute();
    
    $activities = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $activities[] = $row;
    }
    
    return $activities;
}

function get_recent_activities(string $username, int $limit = 3) {
    /**
     * Get the most recent activities for a user.
     */
    return get_all_activities($username, $limit);
}

function get_activity(int $id) {
    /**
     * Get an activity by ID.
     */

    global $db;
    $stmt = $db->prepare('SELECT * FROM activities WHERE id = :id');
    $stmt->bindValue(':id', $id);
    $result = $stmt->execute();

    return $result->fetchArray();
}

function get_activity_by_title(string $title) {
    /**
     * Get an activity by title.
     */

    global $db;
    $stmt = $db->prepare('SELECT * FROM activities WHERE title = :title');
    $stmt->bindValue(':title', $title);
    $result = $stmt->execute();

    return $result->fetchArray();
}
