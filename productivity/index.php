<?php include '../components/navbar.php';
include '../components/cards.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productivity Resources</title>
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="/glow-effect.js"></script>
</head>
<body>
  <!-- Navigation -->
  <?php create_navbar(1, 'Productivity Resources'); ?>

  <!-- Hero Section -->
  <section class="container mb-8">
    <div class="card p-8 cursor-glow-alt glow-primary">
      <div class="text-center mb-6">
        <h2 class="text-3xl mb-4">Weekly Schedule Planner</h2>
        <p class="text-muted">Manage your calendar, organize events, and plan your week efficiently</p>
      </div>
    </div>
  </section>

  
  <section class="container mb-8">

      <div class="grid grid-cols-3 gap-4">
        <!-- Schedule & Calendar -->
        <div class="card cursor-glow-alt glow-primary p-6">
          <h3 class="mb-4">Schedule and Calendar</h3>
          <p class="text-muted mb-4">Organize, plan, and manage your time effectively with digital calendars and scheduling tools.</p>
          <a href="/productivity/schedule/" class="btn btn-primary">Browse Schedules</a>
        </div>

        <!-- Study Planners -->
        <div class="card cursor-glow-alt glow-success p-6">
          <h3 class="mb-4">Study Planners</h3>
          <p class="text-muted mb-4">Create and manage study schedules, track progress, and set learning goals.</p>
          <a href="#" class="btn btn-outline">Coming Soon</a>
        </div>

        <!-- Note Templates -->
        <div class="card cursor-glow-alt glow-warning p-6">
          <h3 class="mb-4">Note Templates</h3>
          <p class="text-muted mb-4">Access structured templates for taking effective notes across different subjects.</p>
          <a href="#" class="btn btn-outline">Coming Soon</a>
        </div>
      </div>
      
      <!-- Quick Links Section -->
      <div class="mt-8">
        <h3 class="mb-4">Quick Links</h3>
        <div class="grid grid-cols-4 gap-4">
          <a href="https://harrowschoolhk.sharepoint.com/" target="_blank" rel="noopener noreferrer" 
             class="card cursor-glow-alt cursor-glow-alt-large glow-info p-4 text-center">
            <h4 class="mb-2">SharePoint</h4>
            <p class="text-sm text-muted">Access school files</p>
          </a>
          
          <a href="https://teams.microsoft.com/" target="_blank" rel="noopener noreferrer" 
             class="card cursor-glow-alt cursor-glow-alt-large glow-purple p-4 text-center">
            <h4 class="mb-2">Microsoft Teams</h4>
            <p class="text-sm text-muted">Collaborate with classmates</p>
          </a>
          
          <a href="https://www.desmos.com/calculator" target="_blank" rel="noopener noreferrer" 
             class="card cursor-glow-alt cursor-glow-alt-large glow-orange p-4 text-center">
            <h4 class="mb-2">Desmos</h4>
            <p class="text-sm text-muted">Graphing calculator</p>
          </a>
          
          <a href="https://www.physicsandmathstutor.com/" target="_blank" rel="noopener noreferrer" 
             class="card cursor-glow-alt cursor-glow-alt-large glow-teal p-4 text-center">
            <h4 class="mb-2">Physics & Maths Tutor</h4>
            <p class="text-sm text-muted">Revision resources</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include '../components/footer.php'; footer(); ?>
</body>
</html>
