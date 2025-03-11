<?php
include '../../../../components/cards.php';
include '../../../../components/navbar.php'; 
include '../../../../dev/glow-effect/colors.php';?>

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
        <h2 class="text-3xl mb-4">Prose Texts - Knowledge Organizer</h2>
        <p class="text-muted">Summaries of the prose texts are paraphrased or quoted from online sources.</p>
        <p class="text-muted">Select a text below to get started.</p>
        <div class="alert alert-info" style="text-align:left;">
          <p><strong>Paper Information:</strong> Students should study and analyse selections from a range of fictional poetry and prose texts.</p>
          <p><strong>Questions will test the following assessment objectives:</strong></p>
          <ul class="mb-4" style="list-style-type: disc; margin-left: 20px;">
            <li>AO1 read and understand a variety of texts, selecting and interpreting information, ideas and perspectives</li>
            <li>AO2 understand and analyse how writers use linguistic and structural devices to achieve their effects.</li>
          </ul>
        </div>
      </div>

      <section class="container">
        <!-- Night; Alice Munro -->
        <div class="grid grid-cols-3">
          <div class="card cursor-glow-alt cursor-glow-alt-large-weak <?= getRandomGlowClass(); ?> no-hover-transform shadow-lg shadow-primary border border-gray-300">
            <h4 style="margin-bottom:auto">Night</h4>
            <p>by <em>Alice Munro</em></p>
            <p>
            In the story, Alice Munro recalls how a terrible thought grew in her mind while she was awake in the night; she later confesses her thoughts to her father, who responds very calmly, helping her to overcome her feelings. The story is told from the perspective of Munro as an older woman, and considers themes of parenting, the psychological effects of illness and the silence and isolation experienced by those who cannot sleep.
            </p>
            <span>
              <a href="shortcuts://run-shortcut?name=reveal-non-fiction-text&input=a-passage-to-africa" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Notes Document</a>
              <a href="shortcuts://run-shortcut?name=get-non-fiction-text&input=a-passage-to-africa" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Options</a>
            </span>
          </div>

        

      </div>


          
      </section>
    </div>
  </section>

  <!-- Footer -->
  <?php include '../../../../components/footer.php'; footer(); ?>
</body>
</html>
