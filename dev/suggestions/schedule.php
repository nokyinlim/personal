<?php

include '../../auth.php';

$auth = new Auth();

if (!$auth->isLoggedIn()) {
    header("Location: login.php");
    exit();
}

$currentUser = $auth->getCurrentUser();

$username = $currentUser['username'];

function get_number_of_events_today() {
    global $username;
    $db = new SQLite3('../../database.db');
    $stmt = $db->prepare("SELECT COUNT(*) FROM study_sessions WHERE username = :username AND date = :date");
    $stmt->bindValue(':username', $username, SQLITE3_TEXT);
    $stmt->bindValue(':date', date('Y-m-d'), SQLITE3_TEXT);
    $result = $stmt->execute();
    $row = $result->fetchArray(SQLITE3_NUM);
    return $row[0];
}