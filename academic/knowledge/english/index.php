<?php include '../../../components/navbar.php';
include '../../../components/cards.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>English Language IGCSE Revision</title>
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="/glow-effect.js"></script>
</head>
<body>
  <!-- Navigation -->
  <?php create_navbar(2, 'Organizer [English Language]'); ?>

  <!-- Hero Section -->
  <section class="container mb-8">
    <div class="card p-8 mb-8 cursor-glow-alt glow-error">
      <div class="text-center mb-6">
        <h2 class="text-3xl mb-4">English Language IGCSE Revision</h2>
        <p class="text-muted">Comprehensive resources and study materials for Edexcel IGCSE English Language</p>
      </div>
    </div>
  </section>

  <!-- Course Overview -->
  <section class="container mb-8">
    <div class="card-header">
      <h3><i class="fas fa-info-circle text-primary mr-2"></i>&nbsp; Course Overview</h3>
    </div>
    <div class="card p-6 mb-4">
      <p>The Edexcel IGCSE English Language course develops your ability to:</p>
      <ul class="mb-4" style="list-style-type: disc; margin-left: 20px;">
        <li>Read a wide range of texts fluently and with good understanding</li>
        <li>Read critically and use knowledge from wide reading to inform and improve your writing</li>
        <li>Write effectively and coherently using Standard English appropriately</li>
        <li>Use grammar correctly, punctuate and spell accurately</li>
        <li>Acquire and apply a wide vocabulary alongside knowledge and understanding of grammatical terminology</li>
        <li>Listen to and understand spoken language, and use spoken Standard English effectively. <em>[Graded Separately]</em></li>
      </ul>
      
      <div class="alert alert-info">
        <p><strong>Specification Link:</strong> <a href="https://qualifications.pearson.com/content/dam/pdf/International%20GCSE/English%20Language%20B/2016/Specification%20and%20sample%20assessments/IGCSE_EnglishLanguageB_Spec.pdf" target="_blank" rel="noopener noreferrer">Edexcel IGCSE English Language B Specification</a></p>
      </div>
    </div>
  </section>

  <!-- Exam Structure -->
  <section class="container mb-8">
    <div class="card-header">
      <h3><i class="fas fa-file-alt text-primary mr-2"></i>&nbsp; Exam Structure</h3>
    </div>
    <div class="grid grid-cols-2">
      <div class="card p-6">
        <h4 class="mb-4">Paper 1: Non-fiction Texts and Transactional Writing (60%)</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li>Section A: Reading (40 marks)</li>
          <li>Section B: Transactional Writing (30 marks)</li>
          <li>2 hours 15 minutes</li>
        </ul>
      </div>
      <div class="card p-6">
        <h4 class="mb-4">Paper 2: Poetry and Prose Texts and Imaginative Writing (40%)</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li>Section A: Reading (20 marks)</li>
          <li>Section B: Imaginative Writing (20 marks)</li>
          <li>1 hour 30 minutes</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Key Topics -->
  <section class="container mb-8">
    <div class="card-header">
      <h3><i class="fas fa-book-open text-primary mr-2"></i>&nbsp; Key Topics</h3>
    </div>
    <div class="grid grid-cols-3">
      <div class="card cursor-glow-alt glow-error">
        <h4>Reading Skills</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li>Identify and interpret information</li>
          <li>Analyze language and structure</li>
          <li>Compare texts</li>
          <li>Evaluate writers' methods</li>
        </ul>
        <a href="#" class="btn btn-outline btn-sm mt-4">Study Notes</a>
      </div>
      <div class="card cursor-glow-alt glow-error">
        <h4>Non-Fiction Texts</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li>Identify and interpret information</li>
          <li>Analyze language and structure</li>
          <li>Compare texts</li>
          <li>Evaluate writers' methods</li>
        </ul>
        <a href="/academic/knowledge/english/non-fiction/" class="btn btn-outline btn-sm mt-4">Study Notes</a>
      </div>
      <div class="card cursor-glow-alt glow-error">
        <h4>Transactional Writing</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li>Letters and emails</li>
          <li>Articles and reports</li>
          <li>Speeches and scripts</li>
          <li>Reviews and guides</li>
        </ul>
        <a href="/academic/knowledge/english/transactional" class="btn btn-outline btn-sm mt-4">Study Notes</a>
      </div>
      <div class="card cursor-glow-alt glow-error">
        <h4>Imaginative Writing</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li>Descriptive writing</li>
          <li>Narrative writing</li>
          <li>Character development</li>
          <li>Setting and atmosphere</li>
        </ul>
        <a href="#" class="btn btn-outline btn-sm mt-4">Study Notes</a>
      </div>
    </div>
  </section>

  

  <!-- Resources -->
  <section class="container mb-8">
    <div class="card-header">
      <h3><i class="fas fa-link text-primary mr-2"></i>&nbsp; Useful Resources</h3>
    </div>
    <div class="grid grid-cols-3">
      <div class="card">
        <h4>Official Resources</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li><a href="https://qualifications.pearson.com/en/qualifications/edexcel-international-gcses/international-gcse-english-language-b-2016.html" target="_blank">Edexcel IGCSE English Language</a></li>
          <li><a href="https://www.bbc.co.uk/bitesize/examspecs/zcbchv4" target="_blank">BBC Bitesize - Edexcel English</a></li>
        </ul>
      </div>
      <div class="card">
        <h4>Study Guides</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li><a href="https://www.sparknotes.com/lit/an-inspector-calls/" target="_blank">SparkNotes - An Inspector Calls</a></li>
          <li><a href="https://www.litcharts.com/lit/an-inspector-calls" target="_blank">LitCharts - An Inspector Calls</a></li>
          <li><a href="https://www.york-notes.co.uk/gcse/english-literature/inspector-calls-priestley/revision" target="_blank">York Notes</a></li>
        </ul>
      </div>
      <div class="card">
        <h4>Practice</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li><a href="https://www.savemyexams.co.uk/igcse/english-language/edexcel/" target="_blank">Save My Exams</a></li>
          <li><a href="https://www.physicsandmathstutor.com/english-revision/igcse-edexcel/" target="_blank">Physics & Maths Tutor</a></li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Practice Questions -->
  <section class="container mb-8">
    <div class="card-header">
      <h3><i class="fas fa-pencil-alt text-primary mr-2"></i>&nbsp; Practice Questions</h3>
    </div>
    <div class="card p-6">
      <h4 class="mb-4">An Inspector Calls Sample Questions</h4>
      
      <div class="border p-4 rounded mb-4">
        <p class="font-bold">Question 1:</p>
        <p class="mb-2">How does Priestley present the character of the Inspector in the play?</p>
        <button class="btn btn-outline btn-sm" onclick="toggleElement('answer1')">Show Guidance</button>
        <div id="answer1" class="mt-2 p-3 bg-gray-50 rounded" style="display:none;">
          <p>Structure your answer around:</p>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>The Inspector's role as Priestley's mouthpiece</li>
            <li>His supernatural/omniscient qualities</li>
            <li>How he controls the narrative and interrogation</li>
            <li>His contrast with the Birling family</li>
            <li>How he represents social conscience</li>
          </ul>
        </div>
      </div>
      
      <div class="border p-4 rounded mb-4">
        <p class="font-bold">Question 2:</p>
        <p class="mb-2">Explore how Priestley presents ideas about responsibility in An Inspector Calls.</p>
        <button class="btn btn-outline btn-sm" onclick="toggleElement('answer2')">Show Guidance</button>
        <div id="answer2" class="mt-2 p-3 bg-gray-50 rounded" style="display:none;">
          <p>Consider:</p>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>The Inspector's final speech about collective responsibility</li>
            <li>The different responses of characters to their role in Eva's death</li>
            <li>The generational divide in accepting responsibility</li>
            <li>The political context of the play (written post-WWII, set pre-WWI)</li>
            <li>Priestley's socialist message</li>
          </ul>
        </div>
      </div>
      
      <a href="#" class="btn btn-primary">View More Practice Questions</a>
    </div>
  </section>

  <!-- Footer -->
  <?php include '../../../components/footer.php'; footer(); ?>

  

</body>
</html>
