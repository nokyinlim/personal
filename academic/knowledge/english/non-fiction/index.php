<?php
include '../../../../components/cards.php';
include '../../../../components/navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Knowledge Organizers</title>
  <link rel="stylesheet" href="../../../../style.css">
  <script src="../../../../glow-effect.js"></script>
</head>
<body>
  <!-- Navigation -->
  <?php create_navbar(2); ?>

  <!-- Hero Section -->
  <section class="container">
    <div class="card p-8 no-hover-transform">
      <div class="text-center mb-6">
        <h2 class="text-3xl mb-4">Non Fiction Texts - Knowledge Organizer</h2>
        <p class="text-muted">Select a text below to get started.</p>
      </div>

      <section class="container">
        <!-- A Passage to Africa -->
        <div class="grid grid-cols-3">
          <div class="card cursor-glow-alt glow-success no-hover-transform shadow-lg shadow-primary border border-gray-300">
            <h4 style="margin-bottom:auto"><i class="fas fa-graduation-cap text-primary mr-2"></i>A Passage to Africa</h4>
            <p>by <em>George Alagiah</em></p>
            <p>
              A Passage to Africa is a powerful and moving account by George Alagiah, reflecting on his experiences as a journalist in Somalia. He describes the scenes of famine and suffering he witnessed, and the impact these had on him personally.
            </p>
            <span>
              <a href="shortcuts://run-shortcut?name=reveal-non-fiction-text&input=a-passage-to-africa" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Notes Document</a>
              <a href="shortcuts://run-shortcut?name=get-non-fiction-text&input=a-passage-to-africa" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Options</a>
            </span>
          </div>

        <!-- Young and Dyslexic? -->
          <div class="card cursor-glow-alt glow-success no-hover-transform shadow-lg shadow-primary border border-gray-300">
            <h4 style="margin-bottom:auto"><i class="fas fa-graduation-cap text-primary mr-2"></i>Young and Dyslexic? [..]</h4>
            <p>by <em>Benjamin Zephaniah</em></p>
            <p>
              <b>Young and Dyslexic? You've got it going on</b> is an text by Benjamin Zephaniah, where he shares his experiences growing up with dyslexia. He discusses the challenges he faced in the education system and how he overcame them to become a successful poet and writer.
            </p>
            <span>
            <a href="shortcuts://run-shortcut?name=reveal-non-fiction-text&input=young-and-dyslexic" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Notes Document</a>
              <a href="shortcuts://run-shortcut?name=get-non-fiction-text&input=young-and-dyslexic" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Options</a>
            </span>
          </div>
        </div>


          
      </section>
    </div>
  </section>
</body>
</html>
