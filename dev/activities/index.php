<?php

include '../../components/activities.php'; 
include '../../components/navbar.php';
include 'activities.php';

$db = new Database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
    <link rel="stylesheet" href="/style.css">
    <style>
        .status-indicator {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }
        .card {
            transition: all 0.3s ease;
            border-left: 4px solid;
        }
        .card-header {
            padding: 1rem;
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }
        .card-body {
            padding: 1rem;
        }
        .card-footer {
            padding: 0.5rem 1rem;
            border-top: 1px solid rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <?php create_navbar(0, 'activities / index.php', 'Developer', true) ?>

    <div class="container mt-4">
        <div class="card">
            <h2>Create Activity</h2>
            <form action="create.php" method="post">
                <input type="hidden" name="username" value="nokyinlim">

                <label for="title">Title</label>
                <input type="text" id="title" name="title" required>

                <label for="description">Description</label>
                <textarea id="description" name="description" required></textarea>

                <label for="type">Type</label>
                <select id="type" name="type" required>
                    <option value="notification">Notification</option>
                    <option value="reminder">Reminder</option>
                    <option value="event">Event</option>
                </select>

                <label for="status">Status</label>
                <select id="status" name="status" required>
                    <option value="unread">Unread</option>
                    <option value="read">Read</option>
                </select>

                <label for="link">Link</label>
                <input type="text" id="link" name="link">

                <label for="image">Image</label>
                <input type="text" id="image" name="image">

                <button type="submit">Create Activity</button>
            </form>
        </div>
    </div>

    <div class="container mt-8">
        <h1>Recent Activities</h1>
        <p class="text-lg">Move your cursor over the cards below to see the glow effect in action.</p>
        
        <div class="grid grid-cols-3 gap-4 mt-6">
            <?php echo activities(get_all_activities('nokyinlim')); ?>
        </div>
    </div>
    
    <script src="../../glow-effect.js"></script>
</body>
</html>