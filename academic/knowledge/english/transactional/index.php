<?php

include '../../../../components/navbar.php'; 
include '../../../../dev/glow-effect/colors.php'; 
include '../../../../components/footer.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transactional Writing</title>
  <link rel="stylesheet" href="../../../../style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="../../../../glow-effect.js"></script>
</head>
<body>
  <?php create_navbar(2, 'Transactional Writing'); ?>

  <!-- Hero Sectoin -->

  <section class="container mb-8">
    <div class="card cursor-glow-alt cursor-glow-alt-large glow-aqua animate-fade-in">
      <div class="">
        <h1 class="text-4xl animate-title" style="text-align:center;">Transactional Writing</h1>
        <p class="text-muted"><b>AO4</b>: communicate effectively and imaginatively, adapting form, tone and register of
writing for specific purposes and audiences<br>
<b>AO5</b>: write clearly, using a range of vocabulary and sentence structures, with appropriate
paragraphing and accurate spelling, grammar and punctuation</p>
      </div>
    </div>
  </section>


  <section class="container mb-8">
    <div class="card cursor-glow-alt cursor-glow-alt-large-weak glow-blue animate-fade-in mb-8">
      <div class="">
        <h2 class="text-3xl">What is Transactional Writing?</h2>
        <p class="text-muted">A piece of Non-Fiction text; aiming to inform, advise, review, argue (persuade), or entertain.</p>
        <p class="text-muted">When writing, you <b>must</b> consider the following:
        <ul class="text-muted" style="list-style-type: disc; list-style-position:inside;">
          <li>Purpose: what is the <em>function</em> of this text?</li>
          <li>Audience: who is the <em>intended reader(s)</em>?</li>
          <li>Form: what is the <em>structure</em> of the text?</li>
          <li>Language: what <em>tone</em> and <em>register</em> should be used?</li>
        </ul>
        <br>
        <h2 class="text-3xl">In your text, you should try to:</h2>
        <ul class="text-muted" style="list-style-type: disc; list-style-position:inside;">
          <li>Always have, and build a strong argument.</li>
          <li>Have a strong emphatic ending to writing, summarising and adding to main point.</li>
          <li>Acknowledge alternative views, avoiding contradiction. Dismiss and find holes in other ideas.</li>
        </ul>
      </div>
    </div>
  </section>
  

  <!-- Time Management -->
  <section id="time-management" class="container mb-8">
    <div class="card cursor-glow-alt cursor-glow-alt-large glow-aqua animate-fade-in mb-8">
      <div class="">
        <h2>Time Management</h2>
        <p class="text-muted">During the exam, you should spend around 45 minutes on the Transactional Writing question. Within this time, you should plan, write and proofread your work.</p>
        <p class="text-muted">It is important to revise under timed conditions, using a timer or separate timers if needed. This will help you to manage your time effectively during the exam.</p>
      </div>
    </div>

    <div class="grid grid-cols-3 gap-4">
      <div class="card cursor-glow-alt cursor-glow-alt-large-weak glow-blue animate-fade-in">
        <div class="">
          <h3>Planning</h3>
          <p class="text-muted">5 Minutes</p>
          <p class="text-muted">Spend 5 minutes planning your response. This will help you to structure your writing and ensure that you include all the necessary information and points.</p>
        </div>
      </div>

      <div class="card cursor-glow-alt cursor-glow-alt-large-weak glow-blue animate-fade-in">
        <div class="">
          <h3>Writing</h3>
          <p class="text-muted">38 Minutes</p>
          <p class="text-muted">Spend 38 minutes writing your response. Make sure to use a range of vocabulary and sentence structures, and to write clearly and coherently.</p>
        </div>
      </div>

      <div class="card cursor-glow-alt cursor-glow-alt-large-weak glow-blue animate-fade-in">
        <div class="">
          <h3>Proofreading</h3>
          <p class="text-muted">2 Minutes</p>
          <p class="text-muted">Spend 2 minutes proofreading your work. Check for spelling, grammar and punctuation errors, and make any necessary corrections.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="text-types" class="container mb-8">
    <div class="card cursor-glow-alt cursor-glow-alt-large glow-aqua animate-fade-in mb-8">
      <div class="">
        <h2>Text Types</h2>
        <p class="text-muted">There are several types of transactional writing, including:</p>
        <ul class="text-muted" style="list-style-type: disc; list-style-position:inside;">
          <li>Letters</li>
          <li>Articles</li>
          <li>Reports</li>
          <li>Reviews</li>
          <li>Leaflets</li>
          <li>Brochures</li>
          <li>Speeches</li>
          <li>Autobiographies</li>
        </ul>
        <br>
        <p class="text-muted">While this is a large list, they can be generalized into 3 distinct categories, shown below:</p>
      </div>
    </div>

    <div class="grid grid-cols-1 gap-4">

      <div class="card cursor-glow-alt cursor-glow-alt-large-weak glow-blue animate-fade-in">
        <div class="">
          <h3>Article/Leaflet/Guide/Review/Report</h3>
          <p class="text-muted">These texts are written to inform, advise, review, argue (persuade), or entertain. They aim to communicate a message or point of view.</p>
          <ul style="list-style:decimal;" class="primary-nested-list">
            <li>Headline</li>
            <ul style="list-style:disc;">
              <li>The headline is the title and the first item that the potential readers will see. It should be catchy and informative.</li>
              <li>Less than 5, or maximum 6 words.</li>
              <li>Should inform reader about content of the text</li>
            </ul>
            <li>Opening Paragraph and Introduction</li>
            <ul style="list-style:disc;">
              <li>It should not be boring. Do not list out, or explain what you will be talking about.</li>
              <li>It should be interesting and engaging. You may include other opposing views.</li>
              <li>Immediately talk about the opposing view, then dismiss it. This allows readers to better adapt to your perspective.</li>
              <li>Never start with "I am going to talk about...", "In this [guide/leaflet/etc.] I will..."</li>
            </ul>
            <li>Subheadings</li>
            <ul style="list-style:disc;">
              <li>Subheadings are used to divide the text into sections. They help the reader to navigate the text and find information quickly.</li>
              <li>They should be clear and informative (and brief). A mini headline, 5-6 words max.</li>
            </ul>
            <li>Main Points</li>
            <ul style="list-style:disc;">
              <li><b>You are given bullet points as suggestions to talk about in the question. Use them. They are there for a reason.</b></li>

          </ul>
  </section>
</body>
</html>