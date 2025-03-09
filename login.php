
<?php
require_once 'auth.php';

$auth = new Auth();
$errors = [];
$success = '';

// Check if login_message exists and is not empty
if (isset($_SESSION['login_message']) && !empty($_SESSION['login_message'])) {
    $errors = [$_SESSION['login_message']];
    // Clear the message after using it
    unset($_SESSION['login_message']);
}

// If already logged in, redirect to dashboard
if ($auth->isLoggedIn()) {
    header('Location: index.php');
    exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login'])) {
        // Login process
        $result = $auth->login($_POST['username'], $_POST['password']);
        
        if ($result['success']) {
            header('Location: index.php');
            exit;
        } else {
            $errors = $result['errors'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Personal Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container mt-8" style="max-width:600px;">
        <div class="card cursor-glow-alt cursor-glow-alt-large-weak glow-primary no-hover-transform max-w-md mx-auto p-8">
            <div class="text-center mb-6">
                <h2 class="text-3xl mb-4">Login</h2>
                <p class="text-muted">Access your personal dashboard</p>
            </div>
            
            <?php if (!empty($errors)): ?>
                <div class="alert alert-error mb-4">
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo htmlspecialchars($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            
            <form method="POST" action="login.php">
                <div class="mb-4 form-group">
                  <label for="username" class="block mb-2 form-label">Username</label>
                  <input type="text" id="username" name="username" class="input input-full form-input" required>
                </div>
                
                <div class="mb-4 form-group">
                    <label for="password" class="block mb-2 form-label">Password</label>
                    <input type="password" id="password" name="password" class="input input-full form-input" required>
                </div>
                
                <div class="mb-4 form-group">
                    <button type="submit" name="login" class="btn btn-primary btn-full">Login</button>
                </div>
                
                <div class="text-center">
                    <p>Don't have an account? <a href="register.php" class="text-primary">Register here</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>