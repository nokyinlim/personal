
<?php
require_once 'auth.php';

$auth = new Auth();
$errors = [];
$success = '';

// If already logged in, redirect to dashboard
if ($auth->isLoggedIn()) {
    header('Location: index.php');
    exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['register'])) {
        // Registration process
        $result = $auth->register(
            $_POST['username'],
            $_POST['email'],
            $_POST['password'],
            $_POST['confirm_password']
        );
        
        if ($result['success']) {
            $success = "Registration successful! You can now login.";
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
    <title>Register - Personal Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container mt-8">
        <div class="card cursor-glow-alt cursor-glow-alt-large-weak glow-primary max-w-md mx-auto p-8">
            <div class="text-center mb-6">
                <h2 class="text-3xl mb-4">Register</h2>
                <p class="text-muted">Create your personal dashboard account</p>
            </div>
            
            <?php if (!empty($success)): ?>
                <div class="alert alert-success mb-4">
                    <?php echo htmlspecialchars($success); ?>
                </div>
            <?php endif; ?>
            
            <?php if (!empty($errors)): ?>
                <div class="alert alert-error mb-4">
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo htmlspecialchars($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            
            <form method="POST" action="register.php">
                <div class="mb-4 form-group">
                    <label for="username" class="block mb-2 form-label">Username</label>
                    <input autocomplete="username" type="text" id="username" name="username" class="input input-full form-input" required>
                </div>
                
                <div class="mb-4 form-group">
                    <label for="email" class="block mb-2 form-label">Email</label>
                    <input type="email" id="email" name="email" class="input input-full form-input" required>
                </div>
                
                <div class="mb-4 form-group">
                    <label for="password" class="block mb-2 form-label">Password</label>
                    <input autocomplete="new-password" type="password" id="password" name="password" class="input input-full form-input" required>
                </div>
                
                <div class="mb-4 form-group">
                    <label for="confirm_password" class="block mb-2 form-label">Confirm Password</label>
                    <input autocomplete="new-password" type="password" id="confirm_password" name="confirm_password" class="input input-full form-input" required>
                </div>
                
                <div class="mb-4">
                    <button type="submit" name="register" class="btn btn-primary btn-full">Register</button>
                </div>
                
                <div class="text-center">
                    <p>Already have an account? <a href="login.php" class="text-primary">Login here</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>