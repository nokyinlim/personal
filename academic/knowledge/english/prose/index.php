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
        <h2 class="text-3xl mb-4">Prose Texts</h2>
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

          <!-- Whistle and I'll Come To You (from The Woman in Black) -->
          <div class="card cursor-glow-alt cursor-glow-alt-large-weak <?= getRandomGlowClass(); ?> no-hover-transform shadow-lg shadow-primary border border-gray-300">
            <h4 style="margin-bottom:auto;">Whistle and I'll Come To You</h4>
            <p>by <em>Susan Hill</em></p>
            <p>
              In the extract from a gothic horror novel, at night, Arthur Kipps, protagonist becomes aware of the increasing wind. He reflects on childhood memories, and hears a sound of a crying child. Though he knows there is no child, it unsettles him enough, that he goes to the kitchen for a drink. He feels that someone is with him, and at the same time, lights go out. He senses the presence went down the corridor to the nursery, with its door open. Kipps questions himself, as he is alone with Spider, but returns to his room for a torch. He trips over the dog, dropping and breaking the torch, and reacts angrily until Spider calms him, cuddling with him. While this happens, the cries are still ongoing on the marsh.
            </p>
        </div>
      </section>


        

      </div>


          
      </section>
    </div>
  </section>

  <!-- Footer -->
  <?php include '../../../../components/footer.php'; footer(); ?>
</body>
</html>
