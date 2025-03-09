<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../../database.php';
    include '../../components/activities.php';

    $title = $_POST['title'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $status = $_POST['status'];
    $link = $_POST['link'];
    $image = $_POST['image'];
    $username = $_POST['username'];

    create_activity($title, $description, $type, $status, $link, $image, $username);

    header('Location: index.php');
    exit();
}