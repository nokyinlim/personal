
<?php
require_once 'auth.php';
require 'components/navbar.php';
require 'components/footer.php';

$auth = new Auth();

// Redirect to login if not logged in
if (!$auth->isLoggedIn()) {
    header('Location: login.php');
    exit;
}

$currentUser = $auth->getCurrentUser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - Personal Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <?php create_navbar(0, 'Your Account'); ?>

    <section class="container mt-8">
        <div class="card p-8">
            <div class="mb-6">
                <h2 class="text-3xl mb-4">Account Details</h2>
                <p class="text-muted">Manage your personal dashboard account</p>
            </div>
            
            <div class="grid grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl mb-4">Profile Information</h3>
                    
                    <div class="mb-4">
                        <p class="text-sm text-muted mb-1">Username</p>
                        <p class="font-semibold"><?php echo htmlspecialchars($currentUser['username']); ?></p>
                    </div>
                    
                    <div class="mb-4">
                        <p class="text-sm text-muted mb-1">Email</p>
                        <p class="font-semibold"><?php echo htmlspecialchars($currentUser['email']); ?></p>
                    </div>
                    
                    <div class="mb-4">
                        <p class="text-sm text-muted mb-1">Account Created</p>
                        <p><?php echo date('F j, Y', strtotime($currentUser['created_at'])); ?></p>
                    </div>
                    
                    <div class="mb-4">
                        <p class="text-sm text-muted mb-1">Last Login</p>
                        <p><?php echo date('F j, Y, g:i a', strtotime($currentUser['last_login'])); ?></p>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-xl mb-4">Account Actions</h3>
                    
                    <div class="card mb-4 p-4 border border-gray-300">
                        <h4 class="mb-2"><i class="fas fa-key text-primary mr-2"></i> &nbsp;Change Password</h4>
                        <p class="text-sm text-muted mb-4">Update your account password</p>
                        <a href="#" class="btn btn-outline btn-sm">Change Password</a>
                    </div>
                    
                    <div class="card mb-4 p-4 border border-gray-300">
                        <h4 class="mb-2"><i class="fas fa-download text-primary mr-2"></i> &nbsp;Download Your Data</h4>
                        <p class="text-sm text-muted mb-4">Export all your personal data</p>
                        <a href="#" class="btn btn-outline btn-sm">Export Data</a>
                    </div>
                    
                    <div class="card p-4 border border-danger">
                        <h4 class="mb-2 text-danger" style="color: red;"><i class="fas fa-exclamation-triangle text-danger mr-2"></i> &nbsp;Delete Account</h4>
                        <p class="text-sm text-muted mb-4">Permanently delete your account and all associated data</p>
                        <a href="#" class="btn btn-danger btn-sm">Delete Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php footer(); ?>
</body>
</html>