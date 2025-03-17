<?php include '../components/navbar.php';
include '../components/cards.php'; 
include '../dev/glow-effect/colors.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Utility Resources</title>
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="/glow-effect.js"></script>
</head>
<body>
  <!-- Navigation -->
  <?php create_navbar(1, 'Utilities'); ?>

  <!-- Hero Section -->
  <section class="container mb-8">
    <div class="card p-8 mb-8 no-hover-transform cursor-glow-alt cursor-glow-alt-large glow-crimson">
        <h2 class="text-3xl mb-4">Utilities</h2>
        <p class="text-muted">Useful and common resources, to help you in all your journeys.</p>
    </div>

    <div class="grid grid-cols-2">
      <div class="card cursor-glow-alt cursor-glow-alt-large glow-gold p-6">
        <h4 class="mb-4">Productivity Tools</h4>
        
      </div>
      <div class="card cursor-glow-alt cursor-glow-alt-large glow-aqua p-6">
        <h4 class="mb-4">Developer Tools</h4>
        <p class="text-muted">Access developer tools and resources to help you build and maintain your projects.</p>
        <a href="/dev/" class="btn btn-primary">Browse Developer Tools</a>
      </div>
    </div>
      
    <!-- Quick Links Section -->
    <div class="mt-8">
      <h3 class="mb-4">Quick Links</h3>
      <div class="grid grid-cols-4 gap-4">
        <a href="https://harrowschoolhk.sharepoint.com/" target="_blank" rel="noopener noreferrer" 
            class="card cursor-glow-alt cursor-glow-alt-strong <?php echo getRandomGlowClass(); ?> p-4 text-center">
          <h4 class="mb-2">SharePoint</h4>
        </a>

        <a href="https://drive.google.com/" target="_blank" rel="noopener noreferrer" 
            class="card cursor-glow-alt cursor-glow-alt-strong <?php echo getRandomGlowClass(); ?> p-4 text-center">
          <h4 class="mb-2">Google Drive</h4>
        </a>
        
        <a href="https://teams.microsoft.com/" target="_blank" rel="noopener noreferrer" 
            class="card cursor-glow-alt cursor-glow-alt-strong <?php echo getRandomGlowClass(); ?> p-4 text-center">
          <h4 class="mb-2">Microsoft Teams</h4>
        </a>

        <a href="https://onenote.com/" target="_blank" rel="noopener noreferrer" 
            class="card cursor-glow-alt cursor-glow-alt-strong <?php echo getRandomGlowClass(); ?> p-4 text-center">
          <h4 class="mb-2">Microsoft OneNote</h4>
        </a>
        
        <a href="https://www.desmos.com/calculator" target="_blank" rel="noopener noreferrer" 
            class="card cursor-glow-alt cursor-glow-alt-strong <?php echo getRandomGlowClass(); ?> p-4 text-center">
          <h4 class="mb-2">Desmos</h4>
        </a>
        
        <a href="https://www.physicsandmathstutor.com/" target="_blank" rel="noopener noreferrer" 
            class="card cursor-glow-alt cursor-glow-alt-strong <?php echo getRandomGlowClass(); ?> p-4 text-center">
          <h4 class="mb-2">Physics & Maths Tutor</h4>
        </a>

        <a href="https://www.savemyexams.com/" target="_blank" rel="noopener noreferrer" 
            class="card cursor-glow-alt cursor-glow-alt-strong <?php echo getRandomGlowClass(); ?> p-4 text-center">
          <h4 class="mb-2">Save My Exams</h4>
        </a>

        <a href="https://massolit.io/" target="_blank" rel="noopener noreferrer" 
            class="card cursor-glow-alt cursor-glow-alt-strong <?php echo getRandomGlowClass(); ?> p-4 text-center">
          <h4 class="mb-2">Massolit</h4>
        </a>

        <a href="https://thisisschool.com/" target="_blank" rel="noopener noreferrer" 
            class="card cursor-glow-alt cursor-glow-alt-strong <?php echo getRandomGlowClass(); ?> p-4 text-center">
          <h4 class="mb-2">ThisIsSchool</h4>
        </a>

        <a href="https://sentencebuilders.com/" target="_blank" rel="noopener noreferrer" 
            class="card cursor-glow-alt cursor-glow-alt-strong <?php echo getRandomGlowClass(); ?> p-4 text-center">
          <h4 class="mb-2">SentenceBuilders</h4>
        </a>

        <a href="https://www.language-gym.com/" target="_blank" rel="noopener noreferrer" 
            class="card cursor-glow-alt cursor-glow-alt-strong <?php echo getRandomGlowClass(); ?> p-4 text-center">
          <h4 class="mb-2">Language Gym</h4>
        </a>

        <a href="https://app.educationperfect.com/" target="_blank" rel="noopener noreferrer" 
            class="card cursor-glow-alt cursor-glow-alt-strong <?php echo getRandomGlowClass(); ?> p-4 text-center">
          <h4 class="mb-2">Education Perfect</h4>
        </a>
      </div>
    </div>
    </section>

  <!-- Footer -->
  <?php include '../components/footer.php'; footer(); ?>
</body>
</html>
