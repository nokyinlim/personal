<?php

include '../components/navbar.php';
include '../components/footer.php';
include '../auth.php';

$auth = new Auth();

if (!$auth->isLoggedIn()) {
    header('Location: /login.php');
    exit;
}

$currentUser = $auth->getCurrentUser();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Settings</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="/glow-effect.js"></script>
</head>
<body>
  <!-- Header -->
  <?php create_navbar(0, 'Settings'); ?>

  <section class="container mt-8" id="account">
    <div class="card no-hover-transform cursor-glow-alt cursor-glow-alt-large glow-primary p-8">
      <div class="mb-6">
        <h2 class="text-3xl mb-4">Account Settings</h2>
        <p class="text-muted">Manage your account settings and preferences</p>
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
          <h3 class="text-xl mb-4">Change Password</h3>
          
          <form action="change-password.php" method="POST">
            <div class="mb-4">
              <label for="current-password" class="text-sm text-muted">Current Password</label>
              <input type="password" id="current-password" name="current-password" required>
            </div>
            
            <div class="mb-4">
              <label for="new-password" class="text-sm text-muted">New Password</label>
              <input type="password" id="new-password" name="new-password" required>
            </div>
            
            <div class="mb-4">
              <label for="confirm-password" class="text-sm text-muted">Confirm New Password</label>
              <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
              
              <button type="submit" class="btn btn-outline">Change Password</button>
            </form>
          </div>
        </div>
      </div>
  </section>

  <section class="container mt-8" id="appearance">
    <div class="card no-hover-transform cursor-glow-alt cursor-glow-alt-large glow-primary p-8">
      <div class="mb-6">
        <h2 class="text-3xl mb-4">Appearance</h2>
        <p class="text-muted">Manage and customize this site to your personal preference.</p>
        <p class="text-muted">Changes only apply to this browser.</p>
      </div>
    </div>
  </section>



  
    <!-- Footer -->
    <?php footer(); ?>  
</body>
</html>