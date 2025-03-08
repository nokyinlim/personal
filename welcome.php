<?php

// welcome.php

include 'components/navbar.php'; include 'dev/glow-effect/colors.php'; include 'components/footer.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal Dashboard</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="glow-effect.js"></script>
  <script src="scroll-animations.js" defer></script>
</head>
<body>
  <!-- Navbar -->
  <?php create_navbar(1, 'Personal Dashboard', '', false, true); ?>

  <!-- Hero Section -->
  <section class="section hero-section">
    <div class="container">
      <div class="card cursor-glow-alt cursor-glow-alt-large glow-primary animate-fade-in">
        <div class="text-center">
          <h1 class="text-4xl animate-title">Welcome to your Personal Dashboard</h1>
          <p class="text-muted animate-subtitle">Your personal workspace for productivity, learning, and organization.</p>
          <div class="mt-8 animate-button">
            <a href="#features"><button class="btn btn-primary btn-lg scroll-cta">Explore Features</button></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="section features-section bg-gradient">
    <div class="container">
      <div class="section-header text-center animate-on-scroll">
        <h2 class="text-3xl">Powerful Features</h2>
        <p class="text-muted">Everything you need to stay organized and productive</p>
      </div>
      
      <div class="grid grid-cols-3 features-grid mb-8">
        <div class="card feature-card cursor-glow-alt cursor-glow-alt-large glow-crimson animate-on-scroll">
          <div class="feature-icon">
            <i class="fas fa-tasks fa-2x"></i>
          </div>
          <h3>Task Management</h3>
          <p>Track your to-dos, set priorities, and never miss a deadline again.</p>
        </div>
        
        <div class="card feature-card cursor-glow-alt cursor-glow-alt-large glow-crimson animate-on-scroll" data-delay="200">
          <div class="feature-icon">
            <i class="fas fa-calendar-alt fa-2x"></i>
          </div>
          <h3>Calendar Integration</h3>
          <p>Seamlessly integrate with your existing calendars and schedule events.</p>
        </div>
        
        <div class="card feature-card cursor-glow-alt cursor-glow-alt-large glow-crimson animate-on-scroll" data-delay="400">
          <div class="feature-icon">
            <i class="fas fa-chart-line fa-2x"></i>
          </div>
          <h3>Progress Tracking</h3>
          <p>Visualize your accomplishments and track progress toward your goals.</p>
        </div>
      </div>

      <div class="section-header text-center animate-on-scroll">
        <h2 class="text-3xl">...just to name a few.</h2>
      </div>
    </div>
  </section>

  <!-- How It Works Section -->
  <section class="section how-it-works-section">
    <div class="container">
      <div class="section-header text-center animate-on-scroll">
        <h2 class="text-3xl">How It Works</h2>
        <p class="text-muted">Simple steps to boost your productivity</p>
      </div>
      
      <div class="steps-container">
        <div class="step animate-on-scroll" data-animation="slide-right">
          <div class="step-number">1</div>
          <div class="step-content">
            <h3>Sign Up</h3>
            <p>Create your account in seconds and get started immediately.</p>
          </div>
        </div>
        
        <div class="step animate-on-scroll" data-animation="slide-left" data-delay="200">
          <div class="step-number">2</div>
          <div class="step-content">
            <h3>Customize Your Dashboard</h3>
            <p>Add widgets, change themes, and make it perfectly yours.</p>
          </div>
        </div>
        
        <div class="step animate-on-scroll" data-animation="slide-right" data-delay="400">
          <div class="step-number">3</div>
          <div class="step-content">
            <h3>Stay Organized</h3>
            <p>Manage tasks, events, and projects all in one place.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Dashboard Preview Section -->
  <section class="section dashboard-preview-section bg-gradient-alt">
    <div class="container">
      <div class="section-header text-center animate-on-scroll">
      <h2 class="text-3xl">Intuitive Dashboard Design</h2>
      <p class="">Built with focus on user experience and productivity.</p>
      </div>
      <div class="section-header text-center animate-on-scroll">

          
        <ul class="feature-list">
          <li class="animate-on-scroll" data-delay="100"><i class="fas fa-check"></i> Customizable widgets</li>
          <li class="animate-on-scroll" data-delay="200"><i class="fas fa-check"></i> Dark and light modes</li>
          <li class="animate-on-scroll" data-delay="300"><i class="fas fa-check"></i> Drag and drop interface</li>
          <li class="animate-on-scroll" data-delay="400"><i class="fas fa-check"></i> Real-time updates</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="section testimonial-section">
    <div class="container">
      <div class="section-header text-center animate-on-scroll">
        <h2 class="text-3xl">What Users Say</h2>
        <p class="text-muted">Trusted by thousands of users worldwide</p>
      </div>
      
      <div class="testimonial-grid">
        <div class="testimonial-card animate-on-scroll" data-delay="100">
          <div class="quote"><i class="fas fa-quote-left"></i></div>
          <p class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          <div class="testimonial-author">
            <img src="https://placehold.co/100x100/2563eb/FFFFFF/png?text=A" alt="User Avatar" class="author-avatar">
            <div class="author-info">
              <h4>Alex Smith</h4>
              <p class="text-muted">Product Manager</p>
            </div>
          </div>
        </div>
        
        <div class="testimonial-card animate-on-scroll" data-delay="300">
          <div class="quote"><i class="fas fa-quote-left"></i></div>
          <p class="testimonial-text">"Lorem ipsum odor amet, consectetuer adipiscing elit. Faucibus praesent urna maximus suspendisse facilisi volutpat natoque.</p>
          <div class="testimonial-author">
            <img src="https://placehold.co/100x100/10b981/FFFFFF/png?text=S" alt="User Avatar" class="author-avatar">
            <div class="author-info">
              <h4>Sarah Smith</h4>
              <p class="text-muted">Freelance Designer</p>
            </div>
          </div>
        </div>
        
        <div class="testimonial-card animate-on-scroll" data-delay="500">
          <div class="quote"><i class="fas fa-quote-left"></i></div>
          <p class="testimonial-text">Imperdiet molestie primis purus dis odio. Faucibus molestie suspendisse maximus; ullamcorper consectetur cursus facilisi nullam rutrum.</p>
          <div class="testimonial-author">
            <img src="https://placehold.co/100x100/f59e0b/FFFFFF/png?text=M" alt="User Avatar" class="author-avatar">
            <div class="author-info">
              <h4>Michael Smith</h4>
              <p class="text-muted">Software Engineer</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="section cta-section" style="width: 100%;">
    <div class="container" style="width: 100%;">
      <div class="card cursor-glow-alt cursor-glow-alt-large glow-purple cta-card animate-on-scroll" style="width: 100%;">
        <div class="text-center" style="width: 100%;">
          <h2 class="text-3xl">Ready to Get Started?</h2>
          <p class="mb-6">Begin your productivity journey today.</p>
          <a href="register.php"><button class="btn btn-primary btn-lg animate-on-scroll" style="z-index:6;">Register Now</button></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php footer(); ?>

  <div class="scroll-indicator">
    <div class="scroll-progress"></div>
  </div>
</body>
</html>