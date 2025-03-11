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
        <h2 class="text-3xl mb-4">Non Fiction Texts - Knowledge Organizer</h2>
        <p class="text-muted">Select a text below to get started.</p>
      </div>

      <section class="container">
        <!-- A Passage to Africa -->
        <div class="grid grid-cols-3">
          <div class="card cursor-glow-alt cursor-glow-alt-large-weak <?= getRandomGlowClass(); ?> no-hover-transform shadow-lg shadow-primary border border-gray-300">
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
        <div class="card cursor-glow-alt cursor-glow-alt-large-weak <?= getRandomGlowClass(); ?> no-hover-transform shadow-lg shadow-primary border border-gray-300">
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

        <!--  Explorers or Boys? Either way, taxpayer gets rescue bill  -->
        <div class="card cursor-glow-alt cursor-glow-alt-large-weak <?= getRandomGlowClass(); ?> no-hover-transform shadow-lg shadow-primary border border-gray-300">
          <h4 style="margin-bottom:auto">Explorers or Boys?</h4>
          <p>by <em>Steven Morris</em></p>
          <p>
            <b>Explorers or boys? Either way, taxpayer gets rescue bill</b> is an article by Steven Morris, discussing the controversial rescue of two British explorers from the Antarctic. The article questions whether the explorers were reckless in their actions and whether taxpayers should be responsible in funding their rescue.
          </p>
          <span>
            <a href="shortcuts://run-shortcut?name=reveal-non-fiction-text&input=explorers-or-boys" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Notes Document</a>
            <a href="shortcuts://run-shortcut?name=get-non-fiction-text&input=explorers-or-boys" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Options</a>
          </span>
        </div>

        <!-- H is for Hawk, by Helen Macdonald -->
        <div class="card cursor-glow-alt cursor-glow-alt-large-weak <?= getRandomGlowClass(); ?> no-hover-transform shadow-lg shadow-primary border border-gray-300">
          <h4 style="margin-bottom:auto">H is for Hawk</h4>
          <p>by <em>Helen Macdonald</em></p>
          <p>
            <b>H is for Hawk</b> is an extract of a memoir by Helen Macdonald, where she reflects on her experiences training a goshawk after the death of her father. During the extract, she describes the two (very contrasting) hawks that she meets, and her experiences and interactions with the falconer. The extract explores themes of grief, nature, and the complex bond between humans and human nature itself.
          </p>
          <span>
            <a href="shortcuts://run-shortcut?name=reveal-non-fiction-text&input=h-is-for-hawk" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Notes Document</a>
            <a href="shortcuts://run-shortcut?name=get-non-fiction-text&input=h-is-for-hawk" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Options</a>
          </span>
        </div>

        <!-- Chinese Cinderella, by Adeline, Yen Mah -->
        <div class="card cursor-glow-alt cursor-glow-alt-large-weak <?= getRandomGlowClass(); ?> no-hover-transform shadow-lg shadow-primary border border-gray-300">
          <h4 style="margin-bottom:auto">Chinese Cinderella</h4>
          <p>by <em>Adeline Yen Mah</em></p>
          <p>
            <b>Chinese Cinderella</b> is an extract from the autobiography of Adeline Yen Mah, where she recounts her experiences growing up in a dysfunctional family in China. The extract focuses on the mistreatment she faced from her family members and her struggles to find acceptance and love. The text explores themes of family, connection and power dynamics with a focus on the gender roles and expectations in Chinese society.
          </p>
          <span>
            <a href="shortcuts://run-shortcut?name=reveal-non-fiction-text&input=chinese-cinderella" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Notes Document</a>
            <a href="shortcuts://run-shortcut?name=get-non-fiction-text&input=chinese-cinderella" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Options</a>
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
