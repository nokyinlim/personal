<?php include '../../components/navbar.php';
include '../../components/cards.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Knowledge Organizers</title>
  <link rel="stylesheet" href="/style.css">
  <script src="/glow-effect.js"></script>
</head>
<body>
  <!-- Navigation -->
  <?php create_navbar(2, 'Knowledge Organizers'); ?>

  <!-- Hero Section -->
  <section class="container">
    <div class="card p-8 no-hover-transform">
      <div class="text-center mb-6">
        <h2 class="text-3xl mb-4">Welcome to Knowledge Organizers</h2>
        <p class="text-muted">Your personal workspace for productivity, learning, and organization.</p>
        <p class="text-muted">What would you like to learn today?</p>
      </div>

      <section class="container">
        <!-- Biology -->
        <div class="grid grid-cols-3">
          <div class="card cursor-glow-alt glow-success no-hover-transform shadow-lg shadow-primary border border-gray-300">
            <h4><i class="fas fa-graduation-cap text-primary mr-2"></i>Biology [IGCSE, Edexcel]</h4>
            <span>
              <a href="https://teams.microsoft.com/" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Teams</a>
              <a href="https://harrowschoolhk.sharepoint.com/sites/Section_2024-24840/SitePages/ClassHome.aspx" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Files</a>
              <a href="https://harrowschoolhk.sharepoint.com/sites/Section_2024-24840/_layouts/15/Doc.aspx?sourcedoc={b41a187f-29ba-44d1-a1ce-d247be5c9316}&action=view&wd=target%28Welcome.one%7C%2FWelcome%20to%20Class%20Notebook%" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">OneNote</a>
              <a href="/academic/knowledge/biology" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">More</a>
            </span>
          </div>

          <!-- Chemistry -->
          <div class="card cursor-glow-alt glow-magenta no-hover-transform shadow-lg shadow-primary border border-gray-300">
            <h4><i class="fas fa-graduation-cap text-primary mr-2"></i>Chemistry [IGCSE, Edexcel]</h4>
            <span>
              <a href="https://teams.microsoft.com/" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Teams</a>
              <a href="https://sites.google.com/harrowschool.hk/chemistry" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Chemistry Site</a>
              <a href="/academic/knowledge/chemistry" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">More</a>
            </span>
          </div>

          <!-- Physics -->
          <div class="card cursor-glow-alt glow-primary no-hover-transform shadow-lg shadow-primary border border-gray-300">
            <h4><i class="fas fa-graduation-cap text-primary mr-2"></i>Physics [IGCSE, Edexcel]</h4>
            <span>
              <a href="https://teams.microsoft.com/" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Teams</a>
              <a href="/academic/knowledge/physics" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">OneNote</a>
            </span>
          </div>

          <!-- Mathematics -->
          <div class="card cursor-glow-alt glow-warning no-hover-transform shadow-lg shadow-primary border border-gray-300">
            <h4><i class="fas fa-graduation-cap text-primary mr-2"></i>Mathematics [IGCSE, Edexcel]</h4>
            <span>
              <a href="https://teams.microsoft.com/" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Teams</a>
              <a href="https://drfrostmaths.com/" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Dr. Frost</a>
              <a href="https://www.desmos.com/calculator" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Desmos</a>

              <a href="/academic/knowledge/mathematics" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">More</a>
            </span>
          </div>

          <!-- Drama -->
          <div class="card cursor-glow-alt glow-black no-hover-transform shadow-lg shadow-primary border border-gray-300">
            <h4><i class="fas fa-graduation-cap text-primary mr-2"></i>Drama [IGCSE, AQA]</h4>
            <span>
              <a href="https://teams.microsoft.com/" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Teams</a>
              <a href="https://docs.google.com/document/d/1brhfneuUCajE8YOj9h6Z22Z-2Wf6zBUKu-LTZJDMk5c/edit?tab=t.0#heading=h.fw5f7y4y4zr5" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Component 2</a>
              <a href="/academic/knowledge/drama" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">More</a>
            </span>
          </div>

          <!-- Computer Science -->
          <div class="card cursor-glow-alt glow-info no-hover-transform shadow-lg shadow-primary border border-gray-300">
            <h4><i class="fas fa-graduation-cap text-primary mr-2"></i>Computer Science [IGCSE, Edexcel]</h4>
            <span>
              <a href="https://teams.microsoft.com/" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Teams</a>
              <a href="https://codehs.com/student/5607245/section/597185" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">CodeHS</a>
              <a href="https://my.classoos.com/uk/books/textbooks" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Classoos</a>
              <a href="/academic/knowledge/computer-science" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">More</a>
            </span>
          </div>

          <!-- Economics -->
          <div class="card cursor-glow-alt glow-info no-hover-transform shadow-lg shadow-primary border border-gray-300">
            <h4><i class="fas fa-graduation-cap text-primary mr-2"></i>Economics [A Level, Edexcel]</h4>
            <span>
              
              <a href="/academic/knowledge/economics" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">More</a>
            </span>
          </div>

          <!-- Spanish -->
          <div class="card cursor-glow-alt glow-pink no-hover-transform shadow-lg shadow-primary border border-gray-300">
            <h4><i class="fas fa-graduation-cap text-primary mr-2"></i>Spanish [IGCSE, Edexcel]</h4>
            <div class="grid grid-cols-1 gap-1">
              <span>
                <a href="https://teams.microsoft.com/" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Teams</a>
                <a href="https://www.sentencebuilders.com/class/36545" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">SentenceBuilders</a>
                <a href="https://language-gym.com/account/student/classroom/attend/15479" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Language-Gym</a>
              </span>
              <span class="mt-2 block">
                <a href="https://my.thisisschool.com/school/browse" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">ThisIsSchool</a>
                <a href="/academic/knowledge/spanish" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">More</a>
              </span>
            </div>
          </div>

          <!-- English -->
          <div class="card cursor-glow-alt glow-error no-hover-transform shadow-lg shadow-primary border border-gray-300">
            <h4><i class="fas fa-graduation-cap text-primary mr-2"></i>English [IGCSE, Edexcel]</h4>
            <div class="grid grid-cols-1 gap-1">
              <span>
                <a href="https://teams.microsoft.com/" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Teams</a>
                <a href="https://www.bbc.co.uk/bitesize/examspecs/zcbchv4" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">BBC Bitesize</a>
                <a href="https://www.sparknotes.com/" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">SparkNotes</a>
              </span><span>
                <a href="https://massolit.io/" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Massolit</a>
                <a href="https://www.physicsandmathstutor.com/english-revision/igcse-edexcel/" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">PMT</a>
                <a href="/academic/knowledge/english" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">More</a>
              </span>
            </div>
          </div>

          <!-- English Literature --> 
          <div class="card cursor-glow-alt glow-error no-hover-transform shadow-lg shadow-primary border border-gray-300">
            <h4><i class="fas fa-graduation-cap text-primary mr-2"></i>English Literature [IGCSE, Edexcel]</h4>
            <div class="grid grid-cols-1 gap-1">
              <span>
                <a href="https://teams.microsoft.com/" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Teams</a>
                <a href="https://www.sparknotes.com/" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">SparkNotes</a>
                <a href="https://www.bbc.co.uk/bitesize/examspecs/zcbchv4" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">BBC Bitesize</a>
              </span><span>
                <a href="https://www.cliffsnotes.com/" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">CliffsNotes</a>
                <a href="https://www.savemyexams.com/igcse/english-literature/edexcel/16/" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">SaveMyExams</a>
                <a href="/academic/knowledge/english-literature" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">More</a>
              </span>
            </div>
      </section>
    </div>
  </section>

  <!-- Footer -->
  <?php include '../../components/footer.php'; footer(); ?>
</body>
</html>
