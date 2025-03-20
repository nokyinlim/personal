
<?php
session_start();
include_once '../../database.php';
require '../../auth.php';

header('Content-Type: application/json');

$auth = new Auth();
$db = new Database();

if (!$auth->isLoggedIn()) {
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

$currentUser = $auth->getCurrentUser();
$response = ['success' => false];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    if (isset($data['action'])) {
        switch ($data['action']) {
            case 'add_task':
                $title = $data['title'] ?? '';
                $priority = $data['priority'] ?? 'medium';
                $due_date = !empty($data['due_date']) ? $data['due_date'] : null;
                
                if (!empty($title)) {
                    $taskId = $db->addTask($currentUser['username'], $title, $priority, $due_date);
                    if ($taskId) {
                        $task = $db->getTask($taskId);
                        $response = [
                            'success' => true, 
                            'message' => 'Task added successfully!',
                            'task' => $task
                        ];
                    }
                } else {
                    $response = ['error' => 'Task title cannot be empty.'];
                }
                break;
                
            case 'update_status':
                $taskId = $data['task_id'] ?? 0;
                $status = $data['status'] ?? 'pending';
                
                if ($taskId > 0) {
                    $success = $db->updateTaskStatus($taskId, $status);
                    $response = [
                        'success' => $success,
                        'message' => $success ? 'Status updated successfully!' : 'Failed to update status'
                    ];
                }
                break;
                
            case 'delete_task':
                $taskId = $data['task_id'] ?? 0;
                
                if ($taskId > 0) {
                    $success = $db->deleteTask($taskId);
                    $response = [
                        'success' => $success,
                        'message' => $success ? 'Task deleted successfully!' : 'Failed to delete task'
                    ];
                }
                break;
        }
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['action']) && $_GET['action'] === 'get_tasks') {
        $filter = $_GET['filter'] ?? 'all';
        
        if ($filter === 'completed') {
            $tasks = $db->getTasks($currentUser['username'], 'completed');
        } elseif ($filter === 'pending') {
            $tasks = $db->getTasks($currentUser['username'], 'pending');
        } else {
            $tasks = $db->getTasks($currentUser['username']);
        }
        
        $response = [
            'success' => true,
            'tasks' => $tasks
        ];
    }
}

echo json_encode($response);
?>