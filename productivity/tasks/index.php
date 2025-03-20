<?php

session_start();

include_once '../../components/navbar.php';
include_once '../../database.php';
require '../../auth.php';
include '../../dev/utils/motivational_message.php';

$auth = new Auth();

if (!$auth->isLoggedIn()) {
    header('Location: /login.php');
    exit;
}

$currentUser = $auth->getCurrentUser();

if (isset($_COOKIE['userTimezone'])) {
  $userTimezone = $_COOKIE['userTimezone'];
  // Set the timezone for the application
  date_default_timezone_set($userTimezone);
} else {
  // Set the default timezone if the user hasn't set it. perhaps dialog box?
  date_default_timezone_set('UTC');
  $message = "You have not set a timezone for this session. All times will default to UTC.";
}

// Initialize database
$db = new Database();

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'add_task':
                $title = $_POST['title'] ?? '';
                $priority = $_POST['priority'] ?? 'medium';
                $due_date = !empty($_POST['due_date']) ? $_POST['due_date'] : null;
                
                if (!empty($title)) {
                    $db->addTask($currentUser['username'], $title, $priority, $due_date);
                    $successMessage = "Task added successfully!";
                } else {
                    $errorMessage = "Task title cannot be empty.";
                }
                break;
                
            case 'update_status':
                $taskId = $_POST['task_id'] ?? 0;
                $status = $_POST['status'] ?? 'pending';
                
                if ($taskId > 0) {
                    $db->updateTaskStatus($taskId, $status);
                }
                break;
                
            case 'update_task':
                $taskId = $_POST['task_id'] ?? 0;
                $title = $_POST['title'] ?? '';
                $priority = $_POST['priority'] ?? 'medium';
                $due_date = !empty($_POST['due_date']) ? $_POST['due_date'] : null;
                
                if ($taskId > 0 && !empty($title)) {
                    $db->updateTask($taskId, $title, $priority, $due_date);
                    $successMessage = "Task updated successfully!";
                }
                break;
                
            case 'delete_task':
                $taskId = $_POST['task_id'] ?? 0;
                
                if ($taskId > 0) {
                    $db->deleteTask($taskId);
                    $successMessage = "Task deleted successfully!";
                }
                break;
        }
    }
}

// Get tasks for current user
$filter = $_GET['filter'] ?? 'all';
$tasks = [];

if ($filter === 'completed') {
    $tasks = $db->getTasks($currentUser['username'], 'completed');
} elseif ($filter === 'pending') {
    $tasks = $db->getTasks($currentUser['username'], 'pending');
} else {
    $tasks = $db->getTasks($currentUser['username']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Tasks</title>
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="glow-effect.js"></script>
  <style>
    .task-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
    .task-list {
      list-style-type: none;
      padding: 0;
    }
    .task-item {
      display: flex;
      align-items: center;
      padding: 12px 15px;
      background-color: #fff;
      border-radius: 6px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
      margin-bottom: 10px;
    }
    .task-item.completed {
      background-color: #f8f8f8;
      opacity: 0.8;
    }
    .task-item.completed .task-title {
      text-decoration: line-through;
      color: #6c757d;
    }
    .task-checkbox {
      margin-right: 15px;
    }
    .task-content {
      flex-grow: 1;
    }
    .task-title {
      margin: 0 0 5px;
      font-size: 1.1em;
    }
    .task-meta {
      display: flex;
      font-size: 0.85em;
      color: #6c757d;
    }
    .task-due-date {
      margin-right: 15px;
    }
    .task-actions {
      display: flex;
      gap: 10px;
    }
    .priority-high {
      border-left: 4px solid #dc3545;
    }
    .priority-medium {
      border-left: 4px solid #ffc107;
    }
    .priority-low {
      border-left: 4px solid #28a745;
    }
    .task-filters {
      display: flex;
      gap: 10px;
      margin-bottom: 15px;
    }
    .edit-form {
      display: none;
      margin-top: 10px;
    }
    .edit-form button {
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="task-container">
      <h1>Your Tasks</h1>
      
      <?php if (isset($successMessage)): ?>
        <div class="alert alert-success"><?php echo $successMessage; ?></div>
      <?php endif; ?>
      
      <?php if (isset($errorMessage)): ?>
        <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
      <?php endif; ?>

      <h2 class="text-xl">
        Create New Task
      </h2>

      <form method="POST" class="mb-8">
        <input type="hidden" name="action" value="add_task">

        <div class="form-group">
          <label for="title" class="form-label">Task Title</label>
          <input type="text" id="title" name="title" class="form-control w-full" required>
        </div>

        <div class="form-group">
          <label for="priority" class="form-label">Priority</label>
          <select id="priority_select" name="priority" class="form-select">
            <option value="high">High</option>
            <option value="medium" selected>Medium</option>
            <option value="low">Low</option>
          </select>
        </div>

        <div class="form-group">
          <label for="due_date" class="form-label">Start Date</label>
          <input type="date" class="form-control" id="due_date" name="due_date">
        </div>

        <div class="text-end">
          <button type="submit" class="btn btn-primary">
            Create New Task
          </button>
        </div>
      </form>
      
      <div class="task-filters">
        <a href="?filter=all" class="btn btn-sm <?php echo $filter === 'all' ? 'btn-primary' : 'btn-outline-primary'; ?>">All Tasks</a>
        <a href="?filter=pending" class="btn btn-sm <?php echo $filter === 'pending' ? 'btn-primary' : 'btn-outline-primary'; ?>">Pending</a>
        <a href="?filter=completed" class="btn btn-sm <?php echo $filter === 'completed' ? 'btn-primary' : 'btn-outline-primary'; ?>">Completed</a>
      </div>
      
      <?php if (empty($tasks)): ?>
        <div class="empty-state">
          <p>You don't have any <?php echo $filter !== 'all' ? $filter . ' ' : ''; ?>tasks yet.</p>
        </div>
      <?php else: ?>
        <ul class="task-list">
          <?php foreach ($tasks as $task): ?>
            <li class="task-item priority-<?php echo $task['priority']; ?> <?php echo $task['status'] === 'completed' ? 'completed' : ''; ?>" data-id="<?php echo $task['id']; ?>">
              <div class="task-checkbox">
                <form method="POST" class="status-form">
                  <input type="hidden" name="action" value="update_status">
                  <input type="hidden" name="task_id" value="<?php echo $task['id']; ?>">
                  <input type="hidden" name="status" value="<?php echo $task['status'] === 'completed' ? 'pending' : 'completed'; ?>">
                  <input type="checkbox" onchange="this.form.submit()" <?php echo $task['status'] === 'completed' ? 'checked' : ''; ?>>
                </form>
              </div>
              <div class="task-content">
                <h3 class="task-title"><?php echo htmlspecialchars($task['title']); ?></h3>
                <div class="task-meta">
                  <?php if ($task['due_date']): ?>
                    <span class="task-due-date">
                      <i class="fas fa-calendar-alt"></i> Due: <?php echo date('M j, Y', strtotime($task['due_date'])); ?>
                    </span>
                  <?php endif; ?>
                  <span class="task-priority">
                    <i class="fas fa-flag"></i> &nbsp;<?php echo ucfirst($task['priority']); ?>
                  </span>
                </div>
                
                <div class="edit-form" id="edit-form-<?php echo $task['id']; ?>">
                  <form method="POST">
                    <input type="hidden" name="action" value="update_task">
                    <input type="hidden" name="task_id" value="<?php echo $task['id']; ?>">
                    <div class="form-group">
                      <input type="text" name="title" class="form-control" value="<?php echo htmlspecialchars($task['title']); ?>" required>
                    </div>
                    <div class="form-group">
                      <select name="priority" class="form-control">
                        <option value="high" <?php echo $task['priority'] === 'high' ? 'selected' : ''; ?>>High</option>
                        <option value="medium" <?php echo $task['priority'] === 'medium' ? 'selected' : ''; ?>>Medium</option>
                        <option value="low" <?php echo $task['priority'] === 'low' ? 'selected' : ''; ?>>Low</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="date" name="due_date" class="form-control" value="<?php echo $task['due_date'] ?? ''; ?>">
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    <button type="button" class="btn btn-sm btn-secondary cancel-edit">Cancel</button>
                  </form>
                </div>
              </div>
              <div class="task-actions">
                <button class="btn btn-sm btn-outline-primary edit-button" data-id="<?php echo $task['id']; ?>">
                  <i class="fas fa-edit"></i>
                </button>
                <form method="POST" class="delete-form" onsubmit="return confirm('Are you sure you want to delete this task?')">
                  <input type="hidden" name="action" value="delete_task">
                  <input type="hidden" name="task_id" value="<?php echo $task['id']; ?>">
                  <button type="submit" class="btn btn-sm btn-outline-danger">
                    <i class="fas fa-trash"></i>
                  </button>
                </form>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
  
  <script>
    

    document.addEventListener('DOMContentLoaded', function () {
      // Edit buttons functionality
      const editButtons = document.querySelectorAll('.edit-button');
      editButtons.forEach(button => {
        button.addEventListener('click', function() {
          const taskId = this.getAttribute('data-id');
          const editForm = document.getElementById('edit-form-' + taskId);
          
          // Hide all other open edit forms
          document.querySelectorAll('.edit-form').forEach(form => {
            if (form !== editForm) {
              form.style.display = 'none';
            }
          });
          
          // Toggle this edit form
          editForm.style.display = editForm.style.display === 'block' ? 'none' : 'block';
        });
      });

      function setBorderColor(value) {
        element = document.getElementById("priority_select")
        switch (value) {
          case "high":
            element.style = "#dc3545";
          case "medium":
            element.style = "border-left:#ffc107;";
          case "low":
            element.style = "border-left:#28a745;";
        };
      }
      
      // Cancel edit buttons
      const cancelButtons = document.querySelectorAll('.cancel-edit');
      cancelButtons.forEach(button => {
        button.addEventListener('click', function() {
          const editForm = this.closest('.edit-form');
          editForm.style.display = 'none';
        });
      });
    });
  </script>
</body>
</html>