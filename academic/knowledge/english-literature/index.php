<?php include '../../../components/navbar.php';
include '../../../components/cards.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>English Literature IGCSE Revision</title>
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="/glow-effect.js"></script>
</head>
<body>
  <!-- Navigation -->
  <?php create_navbar(2, 'Organizer [English Literature]'); ?>

  <!-- Hero Section -->
  <section class="container mb-8">
    <div class="card p-8 mb-8 cursor-glow-alt glow-error">
      <div class="text-center mb-6">
        <h2 class="text-3xl mb-4">English Literature IGCSE Revision</h2>
        <p class="text-muted">Comprehensive resources for Edexcel IGCSE English Literature</p>
      </div>
    </div>
  </section>

  <!-- Course Overview -->
  <section class="container mb-8">
    <div class="card-header">
      <h3><i class="fas fa-info-circle text-primary mr-2"></i>&nbsp; Course Overview</h3>
    </div>
    <div class="card p-6 mb-4">
      <p>The Edexcel IGCSE English Literature course develops your ability to:</p>
      <ul class="mb-4" style="list-style-type: disc; margin-left: 20px;">
        <li>Read, understand, and respond to literary texts from different periods and genres</li>
        <li>Analyze language, form, and structure in poetry, prose, and drama</li>
        <li>Explore relationships between texts and their contexts</li>
        <li>Develop critical interpretation and personal response</li>
        <li>Use textual references and quotations effectively</li>
      </ul>
      
      <div class="alert alert-info">
        <p><strong>Specification Link:</strong> <a href="https://qualifications.pearson.com/content/dam/pdf/International%20GCSE/English%20Literature/2016/Specification%20and%20sample%20assessments/International_GCSE_English_Literature_4ET1_SPEC.pdf" target="_blank">Edexcel IGCSE English Literature Specification</a></p>
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
        <h4 class="mb-4">Paper 1: Poetry and Modern Prose (60%)</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li>Section A: Unseen Poetry (20 marks)</li>
          <li>Section B: Anthology Poetry (30 marks)</li>
          <li>Section C: Modern Prose (40 marks)</li>
          <li>2 hours 15 minutes</li>
        </ul>
      </div>
      <div class="card p-6">
        <h4 class="mb-4">Paper 2: Modern Drama and Literary Heritage Texts (40%)</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li>Section A: Modern Drama (30 marks)</li>
          <li>Section B: Literary Heritage Texts (30 marks)</li>
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
        <h4>Poetry Analysis</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li>Form and structure</li>
          <li>Language devices</li>
          <li>Themes and context</li>
          <li>Comparative analysis</li>
        </ul>
        <a href="#" class="btn btn-outline btn-sm mt-4">Study Notes</a>
      </div>
      <div class="card cursor-glow-alt glow-error">
        <h4>Modern Prose</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li>Character development</li>
          <li>Narrative techniques</li>
          <li>Social/historical context</li>
          <li>Thematic analysis</li>
        </ul>
        <a href="#" class="btn btn-outline btn-sm mt-4">Study Notes</a>
      </div>
      <div class="card cursor-glow-alt glow-error">
        <h4>Shakespeare Study</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li>Dramatic techniques</li>
          <li>Character motivations</li>
          <li>Theatrical context</li>
          <li>Language analysis</li>
        </ul>
        <a href="#" class="btn btn-outline btn-sm mt-4">Study Notes</a>
      </div>
    </div>
  </section>

  <!-- Text Study: An Inspector Calls -->
  <section class="container mb-8">
    <div class="card-header">
      <h3><i class="fas fa-book text-primary mr-2"></i>&nbsp; Text Study: An Inspector Calls</h3>
    </div>
    <div class="card p-6">
      <div class="mb-4">
        <h4 class="mb-2">About the Text</h4>
        <p>"An Inspector Calls" is a play written by J.B. Priestley in 1945, set in 1912. It explores themes of social responsibility, class, gender, and moral accountability.</p>
        <p>It is often seen as a critique of social responsibility and class. Being set in a pre-World War I era, a time characterized by a rigid class structure in British society.</p>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li>Genre: <b>Play</b></li>
          <li>Playwright: <b>J.B. Priestley</b></li>
          <li>Published: <b>1945</b></li>
          <li>Setting: <b>1912, Brumley, England</b></li>
          <li>Key Themes: <b>Social Responsibility, Capitalism, Class, Gender, Generation Gap and Moral Accountability</b></li>
        </ul>
      </div>
      
      <!-- Key Characters -->
      <div class="mb-4">
        <h4 class="mb-2">Key Characters</h4>
        <div class="grid grid-cols-2 gap-4">
          <div class="card no-hover-transform cursor-glow-alt glow-error border p-3 rounded">
            <h4>Mr. Arthur Birling</h4>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li>Wealthy factory owner who represents capitalism and self-interest. A stereotypical capitalist businessman.</li>
              <li>More interested in money than in the well-being of others</li>
              <li>Represents the opposite of Priestley's beliefs - he is criticising people like Mr. Birling, and as such, uses <em>Dramatic Irony</em> to undermine this character.</li>
              <li>Highly unlikeable - never admits responsibility for the death of Eva Smith.</li>
            </ul>
          </div>
          <div class="card no-hover-transform cursor-glow-alt glow-error border p-3 rounded">
            <h4>Mrs. Sybil Birling</h4>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li>Wife of Mr. Birling, represents the 'cold' of the upper classes, and is narrow-minded and unaware of how other people live.</li>
              <li>Often uses her power and influence to intimidate others, but doesn't work on the Inspector. Highly hypocritical as she also makes prejudiced judgements of the lower class.</li>
              <li>Expresses no sympathy towards death of Eva throughout the play. Her only reaction is when the revelation that it directly relates to her son, Eric Birling.</li>
            </ul>
          </div>
          <div class="card no-hover-transform cursor-glow-alt glow-error border p-3 rounded">
            <h4>Sheila Birling</h4>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><b>Initially</b>, Sheila is naïve, spoilt, representing the upper-class girls. She is '<em>pleased with life</em>', showing that she lives in a narrow world.</li>
              <li>Engaged with <em>Gerald Croft</em>, and celebrating this fact at the start of the play.</li>
              <li>Expresses the most sympathy towards death of Eva throughout the play. She immediately accepts responsibility, and is most transformed by the Inspector's visit, and his final words.</li>
              <li>Through Sheila, Priestley shows the potential for change within the younger generation. She also serves a dramatic purpose - the audience can draw comparisons between her and Eva smith.</li>
            </ul>
          </div>
          <div class="card no-hover-transform cursor-glow-alt glow-error border p-3 rounded">
            <h4>Eric Birling</h4>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li>Initially an awkward outsider, he drinks often and represents spoilt upper / middle class men, who think that they can be selfish and indulgent, without direction nor purpose.</li>
              <li>Voice is ignored and dismissed by parents. This contrasts with the respect the parents show towards Gerald.</li>
              <li>Expresses good sympathy towards death of Eva throughout the play. He is transformed by the inspector, and the audience understands how he seems to have learnt the lesson.</li>
              <li>He seems not to be afraid of his behavior being exposed, and seems to want to face the responsibilities / consequences for his action. He also represents the possibility for change for the audience.</li>
            </ul>
          </div>
          <div class="card no-hover-transform cursor-glow-alt glow-error border p-3 rounded">
            <h4>Gerald Croft</h4>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li>Engaged to Sheila Birling, represents the upper class and the business elite.</li>
              <li>Had an affair with Eva Smith (Daisy Renton) while being engaged to Sheila.</li>
              <li>Initially appears charming and considerate, but his true character is revealed through the Inspector's interrogation.</li>
              <li>Shows some remorse for his actions, but ultimately sides with the older Birlings in dismissing the Inspector's message.</li>
              <li>Priestley uses Gerald to represent the hypocrisy and moral failings of the upper class.</li>
            </ul>
          </div>
          <div class="card no-hover-transform cursor-glow-alt glow-error border p-3 rounded">
            <h4>Inspector Goole</h4>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><b>Primary didactic vehicle</b> for the play, the Inspector is the direct contrast to Mr. Birling's capitalistic views.</li>
              <li>Priestley's mouthpiece, and holds power as an authority figure to the audience, and to the characters.</li>
              <li>A catalyst for change, he is able to get characteres to reveal their involvement, since he seems to already be fully aware of the events that happened, and what they are going to say.</li>
              <li>Ambiguous and supernatural, causing the audience to question the true identity of the Inspector.</li>
            </ul>
          </div>
        </div>
      </div>
      
      <!-- Themes Explorer -->
      <div class="mb-4">
        <h4 class="mb-2">Themes Explorer</h4>
        <div class="border p-4 rounded">
          <div class="mb-4">
            <label for="theme-select" class="form-label">Select Theme:</label>
            <select id="theme-select" class="form-select">
              <option value="social-responsibility">Social Responsibility</option>
              <option value="class-divisions">Class Divisions</option>
              <option value="gender-inequality">Gender Inequality</option>
              <option value="age-generation-gap">Age / Generation Gap</option>
              <option value="capitalism-socialism">Capitalism vs. Socialism</option>
              <option value="moral-accountability">Moral Accountability</option>
            </select>
          </div>
          
          <div id="theme-content" class="p-4 border rounded bg-gray-50">
            <!-- Starting / Default Option -->
            <h5>Social Responsibility - Key Points</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li>Central theme of the play highlighted by Inspector Goole's final speech</li>
              <li>Priestley advocates for collective social responsibility over individualism</li>
              <li>Each character's treatment of Eva Smith represents their failure of social duty</li>
              <li>The younger generation (Sheila and Eric) learn this lesson</li>
              <li>The older generation (Mr. and Mrs. Birling) reject social responsibility</li>
              <li>Written in 1945 after WWII as Britain was rebuilding and creating the welfare state</li>
            </ul>
            
            <h5 class="mt-4">Important Quotes:</h5>
            <div class="p-3 bg-white border rounded mt-2">
              <p class="italic">"We are members of one body. We are responsible for each other."</p>
              <p class="text-sm text-right">- Inspector Goole</p>
            </div>
            <div class="p-3 bg-white border rounded mt-2">
              <p class="italic">"If men will not learn that lesson, then they will be taught it in fire and blood and anguish."</p>
              <p class="text-sm text-right">- Inspector Goole</p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Notes Explorer -->
      <div class="mb-4">
        <h4 class="mb-2">Notes Explorer</h4>
        <div class="border p-4 rounded">
          <div class="mb-4">
            <label for="act-select" class="form-label">Select Act/Section:</label>
            <select id="act-select" class="form-select">
              <option value="act1">Act 1</option>
              <option value="act2">Act 2</option>
              <option value="act3">Act 3</option>
              <option value="themes">Thematic Analysis</option>
              <option value="context">Historical Context</option>
            </select>
          </div>
          
          <div id="note-content" class="p-4 border rounded bg-gray-50">
            <h5>Act 1 - Key Points</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li>The play opens with the Birling family celebrating Sheila's engagement to Gerald Croft</li>
              <li>Mr. Birling gives a speech about the importance of self-reliance</li>
              <li>The Inspector arrives and announces that a young woman called Eva Smith has committed suicide</li>
              <li>He reveals that Mr. Birling fired Eva from his factory for organizing a strike for better wages</li>
              <li>Sheila admits that she had Eva fired from her job at Milwards department store out of jealousy</li>
            </ul>
            
            <h5 class="mt-4">Important Quotes:</h5>
            <div class="p-3 bg-white border rounded mt-2">
              <p class="italic">"The Germans don't want war. Nobody wants war, except some half-civilized folks in the Balkans."</p>
              <p class="text-sm text-right">- Mr. Birling (dramatic irony as the audience knows WWI will begin soon)</p>
            </div>
            <div class="p-3 bg-white border rounded mt-2">
              <p class="italic">"We are members of one body. We are responsible for each other."</p>
              <p class="text-sm text-right">- Inspector Goole</p>
            </div>
          </div>
        </div>
      </div>
      
      
      
      <div>
        <h4 class="mb-2">Study Resources</h4>
        <div class="flex gap-2 flex-wrap">
          <a href="#" class="btn btn-outline btn-sm">Character Analysis</a>
          <a href="#" class="btn btn-outline btn-sm">Quote Bank</a>
          <a href="#" class="btn btn-outline btn-sm">Essay Plans</a>
          <a href="#" class="btn btn-outline btn-sm">Historical Context</a>
          <a href="#" class="btn btn-outline btn-sm">Practice Questions</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Text Study: Of Mice and Men -->
  <section class="container mb-8">
    <div class="card-header">
      <h3><i class="fas fa-book text-primary mr-2"></i>&nbsp; Text Study: Of Mice and Men</h3>
    </div>
    <div class="card p-6">
      <div class="mb-4">
        <h4 class="mb-2">About the Novel</h4>
        <p>John Steinbeck's powerful novella explores themes of friendship, dreams, isolation, and the harsh realities of Depression-era America through the story of migrant ranch workers George and Lennie.</p>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li>Genre: <b>Novella/Social Realism</b></li>
          <li>Author: <b>John Steinbeck</b></li>
          <li>Published: <b>1937</b></li>
          <li>Setting: <b>Salinas Valley, California during the Great Depression</b></li>
          <li>Key Themes: <b>Dreams and Hopes, Friendship, Loneliness, Power and Weakness, Social Prejudice</b></li>
        </ul>
      </div>

      <!-- Historical Context -->
      <div class="mb-4">
        <h4 class="mb-2">Historical Context</h4>
        <div class="border p-4 rounded">
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li><b>The Great Depression (1929-1939):</b> Economic devastation left millions unemployed and desperate</li>
            <li><b>Migrant Farm Workers:</b> Traveled from ranch to ranch seeking seasonal work with few rights or protections</li>
            <li><b>The American Dream:</b> Belief that hard work would lead to prosperity was severely tested during this period</li>
            <li><b>Social Hierarchy:</b> Society strictly stratified by race, gender, class, and ability</li>
            <li><b>Dust Bowl Migration:</b> Environmental disaster forced many to leave their homes and seek work in California</li>
          </ul>
        </div>
      </div>

      <!-- Key Characters -->
      <div class="mb-4">
        <h4 class="mb-2">Key Characters</h4>
        <div class="grid grid-cols-2 gap-4">
          <div class="card no-hover-transform cursor-glow-alt glow-error border p-3 rounded">
            <h4>George Milton</h4>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li>Small, quick-witted migrant worker</li>
              <li>Protective of Lennie despite occasional frustration</li>
              <li>Dreams of independence and owning land</li>
              <li>Represents pragmatism and loyalty</li>
              <li>Makes the ultimate devastating choice for Lennie</li>
            </ul>
          </div>
          <div class="card no-hover-transform cursor-glow-alt glow-error border p-3 rounded">
            <h4>Lennie Small</h4>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li>Physically strong but intellectually disabled</li>
              <li>Childlike fascination with soft things</li>
              <li>Unaware of his own strength</li>
              <li>Represents innocence and vulnerability</li>
              <li>His need for companionship drives the narrative</li>
            </ul>
          </div>
          <div class="card no-hover-transform cursor-glow-alt glow-error border p-3 rounded">
            <h4>Curley's Wife</h4>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li>Never named - defined by her relationship to Curley</li>
              <li>Isolated and objectified on the ranch</li>
              <li>Dreams of Hollywood fame</li>
              <li>Represents the limitations placed on women</li>
              <li>Both victim and perpetrator of prejudice</li>
            </ul>
          </div>
          <div class="card no-hover-transform cursor-glow-alt glow-error border p-3 rounded">
            <h4>Crooks</h4>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li>Black stable buck with a crooked back</li>
              <li>Isolated due to racial discrimination</li>
              <li>Educated and proud despite his marginalization</li>
              <li>Represents racial prejudice in 1930s America</li>
              <li>Briefly allows himself to dream before withdrawing</li>
            </ul>
          </div>
          <div class="card no-hover-transform cursor-glow-alt glow-error border p-3 rounded">
            <h4>Candy</h4>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li>Aging ranch worker who lost a hand in an accident</li>
              <li>Fears being "put out to pasture" when no longer useful</li>
              <li>His dog's death parallels future possibilities for himself</li>
              <li>Represents the disposability of the elderly and disabled</li>
              <li>Invests in George and Lennie's dream</li>
            </ul>
          </div>
          <div class="card no-hover-transform cursor-glow-alt glow-error border p-3 rounded">
            <h4>Slim</h4>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li>Highly respected jerkline skinner (team leader)</li>
              <li>Described as having "godlike" qualities</li>
              <li>Demonstrates compassion and understanding</li>
              <li>Represents dignity and moral authority</li>
              <li>Comforts George after Lennie's death</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Themes Explorer -->
      <div class="mb-4">
        <h4 class="mb-2">Themes Explorer</h4>
        <div class="border p-4 rounded">
          <div class="mb-4">
            <label for="theme-select" class="form-label">Select Theme:</label>
            <select id="theme-select" class="form-select">
              <option value="dreams">Dreams and Hopes</option>
              <option value="friendship">Friendship and Loyalty</option>
              <option value="loneliness">Loneliness and Isolation</option>
              <option value="prejudice">Prejudice and Social Hierarchy</option>
              <option value="power">Power and Weakness</option>
            </select>
          </div>
          
          <div id="theme-content" class="p-4 border rounded bg-gray-50">
            <h5>Dreams and Hopes - Key Points</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><b>The Farm Dream:</b> George and Lennie's vision of independence represents the American Dream</li>
              <li><b>Contagious Hope:</b> Their dream briefly inspires others (Candy and Crooks) to believe in possibility</li>
              <li><b>Dream vs. Reality:</b> The harsh economic climate makes such dreams nearly impossible</li>
              <li><b>Character Dreams:</b> Each character has personal aspirations (Curley's wife's Hollywood dreams, Crooks' memory of childhood dignity)</li>
              <li><b>Dreams as Coping Mechanism:</b> Dreams provide psychological escape from harsh realities</li>
              <li><b>Key Quotes:</b>
                <ul>
                  <li>"An' live off the fatta the lan'."</li>
                  <li>"S'pose they was a carnival or a circus come to town..."</li>
                  <li>"Nobody never gets to heaven, and nobody gets no land."</li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Chapter Explorer -->
      <div class="mb-4">
        <h4 class="mb-2">Chapter Analysis</h4>
        <div class="border p-4 rounded">
          <div class="mb-4">
            <label for="chapter-select" class="form-label">Select Chapter:</label>
            <select id="chapter-select" class="form-select">
              <option value="ch1">Chapter 1</option>
              <option value="ch2">Chapter 2</option>
              <option value="ch3">Chapter 3</option>
              <option value="ch4">Chapter 4</option>
              <option value="ch5">Chapter 5</option>
              <option value="ch6">Chapter 6</option>
            </select>
          </div>
          
          <div id="chapter-content" class="p-4 border rounded bg-gray-50">
            <h5>Chapter 1 - Key Points</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><b>Setting:</b> Opens with idyllic natural scene by the Salinas River - represents Eden-like innocence</li>
              <li><b>Characterization:</b> Establishes the contrasting physical appearances and personalities of George and Lennie</li>
              <li><b>Foreshadowing:</b> Discussion of trouble in Weed hints at future problems</li>
              <li><b>Power Dynamic:</b> George's control over Lennie established through instructions and the "don't drink the water" scene</li>
              <li><b>Dream Introduction:</b> First mention of the farm dream - functions as motivator and comfort</li>
              <li><b>Circular Structure:</b> Setting of this opening chapter mirrors the final chapter - creating narrative symmetry</li>
              <li><b>Key Quotes:</b>
                <ul>
                  <li>"Guys like us, that work on ranches, are the loneliest guys in the world."</li>
                  <li>"With us it ain't like that. We got a future. We got somebody to talk to that gives a damn about us."</li>
                  <li>"Lennie, for God's sake don't drink so much... You gonna be sick like you was last night."</li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Literary Techniques -->
      <div class="mb-4">
        <h4 class="mb-2">Literary Techniques</h4>
        <div class="border p-4 rounded">
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li><b>Foreshadowing:</b> Dead mouse, trouble in Weed, Candy's dog, and Lennie crushing Curley's hand all anticipate the novella's tragic ending</li>
            <li><b>Symbolism:</b> Rabbits (innocence), Candy's dog (disposability of the weak), the farm (American Dream)</li>
            <li><b>Cyclical Structure:</b> Beginning and ending in the same location by the river</li>
            <li><b>Naturalism:</b> Characters shaped and constrained by their environment and circumstances</li>
            <li><b>Animal Imagery:</b> Lennie compared to a bear, Candy's dog, rabbits - connects characters to natural world</li>
            <li><b>Setting as Character:</b> Bunkhouse, barn, and river settings reflect characters' psychological states</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Key Passages for Analysis -->
  <section class="container mb-8">
    <div class="card-header">
      <h3><i class="fas fa-quote-left text-primary mr-2"></i>&nbsp; Key Passages for Analysis</h3>
    </div>
    <div class="card p-6">
      <div class="mb-4">
        <h4 class="mb-2">Critical Extracts</h4>
        <div class="border p-4 rounded mb-4">
          <p class="font-bold">The Dream Speech:</p>
          <blockquote class="p-3 bg-gray-50 mb-3 italic">
            "Guys like us, that work on ranches, are the loneliest guys in the world... With us it ain't like that. We got a future. We got somebody to talk to that gives a damn about us... Someday—we're gonna get the jack together and we're gonna have a little house and a couple of acres an' a cow and some pigs and—"<br><br>
            "An' live off the fatta the lan'," Lennie shouted. "An' have rabbits. Go on, George! Tell about what we're gonna have in the garden and about the rabbits in the cages..."
          </blockquote>
          <p class="text-sm mb-1"><strong>Analysis points:</strong></p>
          <ul style="list-style-type: disc; margin-left: 20px;" class="text-sm">
            <li>Establishes the central dream that drives the narrative</li>
            <li>Highlights the symbiotic relationship between George and Lennie</li>
            <li>Demonstrates Lennie's childlike enthusiasm vs. George's practical planning</li>
            <li>Emphasizes the desire for autonomy, security, and independence</li>
            <li>Functions as ritual comfort that brings the characters together</li>
          </ul>
        </div>

        <div class="border p-4 rounded mb-4">
          <p class="font-bold">Crooks' Reality Check:</p>
          <blockquote class="p-3 bg-gray-50 mb-3 italic">
            "Nobody never gets to heaven, and nobody gets no land. It's just in their head. They're all the time talkin' about it, but it's jus' in their head."
          </blockquote>
          <p class="text-sm mb-1"><strong>Analysis points:</strong></p>
          <ul style="list-style-type: disc; margin-left: 20px;" class="text-sm">
            <li>Reveals Crooks' cynicism born from discrimination and disappointment</li>
            <li>Questions the achievability of the American Dream</li>
            <li>Provides counterpoint to the optimism of George and Lennie</li>
            <li>Foreshadows the ultimate failure of the dream</li>
            <li>Shows how briefly Crooks allows himself hope before reverting to pessimism</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Practice Questions -->
  <section class="container mb-8">
    <div class="card-header">
      <h3><i class="fas fa-pencil-alt text-primary mr-2"></i>&nbsp; Practice Questions</h3>
    </div>
    <div class="card p-6">
      <div class="border p-4 rounded mb-4">
        <p class="font-bold">Question 1:</p>
        <p class="mb-2">How does Steinbeck use the character of Curley's wife to explore ideas about loneliness and dreams in Of Mice and Men?</p>
        <button class="btn btn-outline btn-sm" onclick="toggleElement('answer1')">Show Guidance</button>
        <div id="answer1" class="mt-2 p-3 bg-gray-50 rounded" style="display:none;">
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Consider her namelessness and what that represents</li>
            <li>Analyze her dream of Hollywood fame and how it parallels other dreams</li>
            <li>Examine her isolation as the only woman on the ranch</li>
            <li>Discuss how her loneliness leads to seeking attention and ultimately her death</li>
            <li>Consider moments of vulnerability (conversation with Lennie in the barn)</li>
            <li>Explore how she functions both as victim and perpetrator of prejudice</li>
          </ul>
        </div>
      </div>

      <div class="border p-4 rounded mb-4">
        <p class="font-bold">Question 2:</p>
        <p class="mb-2">"In Of Mice and Men, friendship provides the only defense against a cruel world." To what extent do you agree with this statement?</p>
        <button class="btn btn-outline btn-sm" onclick="toggleElement('answer2')">Show Guidance</button>
        <div id="answer2" class="mt-2 p-3 bg-gray-50 rounded" style="display:none;">
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Analyze the George-Lennie relationship as a defense mechanism</li>
            <li>Consider characters without friendships (Crooks, Curley's wife) and their vulnerability</li>
            <li>Examine how Candy's dog represents lost companionship</li>
            <li>Discuss whether friendship ultimately protects characters from tragedy</li>
            <li>Consider Slim's role as a respected figure and his relationship with others</li>
            <li>Evaluate the limited power of friendship against systemic problems</li>
          </ul>
        </div>
      </div>

      <div class="border p-4 rounded mb-4">
        <p class="font-bold">Question 3:</p>
        <p class="mb-2">Explore how Steinbeck uses settings to develop themes and create atmosphere in Of Mice and Men.</p>
        <button class="btn btn-outline btn-sm" onclick="toggleElement('answer3')">Show Guidance</button>
        <div id="answer3" class="mt-2 p-3 bg-gray-50 rounded" style="display:none;">
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Analyze the symbolic significance of the river setting (beginning/end)</li>
            <li>Consider the bunkhouse as representing the transient nature of the workers' lives</li>
            <li>Examine Crooks' room as a symbol of isolation and segregation</li>
            <li>Discuss the barn as a setting for both life and death</li>
            <li>Explore naturalistic elements in Steinbeck's descriptions</li>
            <li>Connect settings to characters' psychological states and development</li>
          </ul>
        </div>
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
          <li><a href="https://qualifications.pearson.com/en/qualifications/edexcel-international-gcses/international-gcse-english-literature-2016.html" target="_blank">Edexcel IGCSE Literature</a></li>
          <li><a href="https://www.bbc.co.uk/bitesize/examspecs/zxqncwx" target="_blank">BBC Bitesize - Edexcel Literature</a></li>
        </ul>
      </div>
      <div class="card">
        <h4>Study Guides</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li><a href="https://www.sparknotes.com/shakespeare/romeojuliet/" target="_blank">SparkNotes - Romeo and Juliet</a></li>
          <li><a href="https://www.yorknotes.com/gcse/english-literature" target="_blank">York Notes</a></li>
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
      <div class="border p-4 rounded mb-4">
        <p class="font-bold">Question 1:</p>
        <p class="mb-2">Explore how the Character of Inspector Goole is significant in <em>An Inspector Calls</em></p>
        <button class="btn btn-outline btn-sm" onclick="toggleElement('answer1')">Show Guidance</button>
        <div id="answer1" class="mt-2 p-3 bg-gray-50 rounded" style="display:none;">
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Consider the <b>change</b> brought about to the stage by the Inspector's arrival, during his interrogation, and afterward, after he leaves the stage.</li>
            <li>Consider how he is the <b>primary didactic vehicle</b> of the morality play.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include '../../../components/footer.php'; footer(); ?>
  <script>
    // Function to toggle visibility of elements
    function toggleElement(id) {
      const element = document.getElementById(id);
      if (element.style.display === "none") {
        element.style.display = "block";
      } else {
        element.style.display = "none";
      }
    }
    
    // Note content loading for Act/Section Explorer
    document.getElementById('act-select').addEventListener('change', function() {
      const selection = this.value;
      const noteContent = document.getElementById('note-content');
      
      if (selection === 'act1') {
        noteContent.innerHTML = `
          <h5>Act 1 - Key Points</h5>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>The play opens with the Birling family celebrating Sheila's engagement to Gerald Croft</li>
            <li>Mr. Birling gives a speech about capitalism, individualism and his predictions about the future (dramatic irony)</li>
            <li>The Inspector arrives and announces that a young woman called Eva Smith has committed suicide</li>
            <li>He reveals that Mr. Birling fired Eva from his factory for organizing a strike for better wages</li>
            <li>Sheila admits that she had Eva fired from her job at Milwards department store out of jealousy</li>
            <li>Gerald is implicated as having known Eva Smith under the name "Daisy Renton"</li>
          </ul>
          
          <h5 class="mt-4">Important Quotes:</h5>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"The Germans don't want war. Nobody wants war, except some half-civilized folks in the Balkans."</p>
            <p class="text-sm text-right">- Mr. Birling (dramatic irony as the audience knows WWI will begin soon)</p>
          </div>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"We are members of one body. We are responsible for each other."</p>
            <p class="text-sm text-right">- Inspector Goole</p>
          </div>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"These girls aren't cheap labour - they're people."</p>
            <p class="text-sm text-right">- Sheila Birling</p>
          </div>
        `;
      } else if (selection === 'act2') {
        noteContent.innerHTML = `
          <h5>Act 2 - Key Points</h5>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Gerald confesses his affair with Eva Smith/Daisy Renton during the previous summer</li>
            <li>He admits he set her up in rooms and supported her, before ending the relationship</li>
            <li>Sheila returns Gerald's engagement ring, though suggests they might rebuild their relationship</li>
            <li>Mrs. Birling is revealed to be the head of a charity committee</li>
            <li>Eva/Daisy sought help from the committee when she was pregnant and desperate</li>
            <li>Mrs. Birling used her influence to deny Eva help, claiming the father should be responsible</li>
            <li>Mrs. Birling unknowingly implicates her son Eric as the father of Eva's unborn child</li>
          </ul>
          
          <h5 class="mt-4">Important Quotes:</h5>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"You're pretending everything's just as it was before."</p>
            <p class="text-sm text-right">- Sheila to her parents</p>
          </div>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"She came to you for help, at a time when no woman would come to you unless she was desperate."</p>
            <p class="text-sm text-right">- Inspector Goole to Mrs. Birling</p>
          </div>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"I used my influence to have the girl turned away."</p>
            <p class="text-sm text-right">- Mrs. Birling</p>
          </div>
        `;
      } else if (selection === 'act3') {
        noteContent.innerHTML = `
          <h5>Act 3 - Key Points</h5>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Eric returns and confesses his relationship with Eva/Daisy</li>
            <li>He admits to forcing himself on her while drunk, stealing money from his father's business to support her, and that she refused his help after discovering the money was stolen</li>
            <li>The Inspector delivers his final speech about collective responsibility</li>
            <li>After the Inspector leaves, the family discovers there may be no "Inspector Goole" on the police force</li>
            <li>Gerald discovers there may be no girl who died in the infirmary</li>
            <li>The older generation (Mr. and Mrs. Birling, Gerald) believe they've been hoaxed and return to their original attitudes</li>
            <li>The younger generation (Sheila and Eric) maintain their guilt and new sense of responsibility</li>
            <li>The play ends with a phone call revealing that a girl has just died by suicide and an inspector is on his way to question them</li>
          </ul>
          
          <h5 class="mt-4">Important Quotes:</h5>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"We are responsible for each other. And I tell you that the time will soon come when, if men will not learn that lesson, then they will be taught it in fire and blood and anguish."</p>
            <p class="text-sm text-right">- Inspector Goole's final speech</p>
          </div>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"You're beginning to pretend now that nothing's really happened at all. And I can't see it like that."</p>
            <p class="text-sm text-right">- Sheila to her parents</p>
          </div>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"The point is, you don't seem to have learnt anything."</p>
            <p class="text-sm text-right">- Eric to his parents</p>
          </div>
        `;
      } else if (selection === 'themes') {
        noteContent.innerHTML = `
          <h5>Thematic Analysis</h5>
          <p class="mb-3">Priestley uses the play to communicate several interconnected themes:</p>
          
          <h6 class="font-bold mt-3">1. Social Responsibility</h6>
          <p>The Inspector represents society's collective conscience, emphasizing that all actions have consequences and we must care for one another. This theme is directly expressed in the Inspector's final speech.</p>
          
          <h6 class="font-bold mt-3">2. Generation Gap</h6>
          <p>The younger generation (Sheila and Eric) are more willing to accept responsibility and change than the older generation (Mr. and Mrs. Birling, Gerald). This represents Priestley's hope for social progress.</p>
          
          <h6 class="font-bold mt-3">3. Class and Privilege</h6>
          <p>The Birlings' treatment of Eva Smith demonstrates how class prejudice allows the wealthy to abuse their power. Eva represents the vulnerable working class exploited by the privileged.</p>
          
          <h6 class="font-bold mt-3">4. Gender Inequality</h6>
          <p>Eva Smith experiences sexism throughout the play (at the factory, department store, and in her relationships with men). Mrs. Birling's charity committee hypocritically judges "fallen women" while protecting powerful men.</p>
          
          <h6 class="font-bold mt-3">5. Time and Reality</h6>
          <p>The play's complex time structure (written in 1945, set in 1912, with knowledge of both world wars) and the ambiguous nature of the Inspector suggest Priestley is playing with reality to deliver his message.</p>
        `;
      } else if (selection === 'context') {
        noteContent.innerHTML = `
          <h5>Historical Context</h5>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li><strong>Setting (1912):</strong> Pre-World War I Britain was characterized by rigid class divisions, gender inequality, and laissez-faire capitalism. The Titanic had just sunk (referenced by Birling), symbolizing the hubris of the era.</li>
            <li><strong>Writing (1945):</strong> Priestley wrote the play immediately after World War II, when Britain was rebuilding and establishing the welfare state. The audience would have experienced both world wars, economic depression, and social reform.</li>
            <li><strong>Priestley's Politics:</strong> J.B. Priestley was a socialist who believed in collective responsibility and social justice. He used his writing to advocate for a more equal society.</li>
            <li><strong>Dramatic Irony:</strong> The audience in 1945 would know that Birling's optimistic predictions (no war, the unsinkable Titanic) were completely wrong, undermining his entire worldview.</li>
            <li><strong>Post-War Rebuilding:</strong> The play was first performed when Britain was creating the NHS and welfare state, directly implementing the kind of social responsibility Priestley advocates.</li>
          </ul>
          
          <h5 class="mt-4">Social Context:</h5>
          <div class="p-3 bg-white border rounded mt-2">
            <p>In 1912, a factory girl like Eva Smith would have few rights and protections. Women couldn't vote, labor laws were minimal, and there was no welfare system. The play critiques this lack of social support and the selfish individualism that Priestley believed led to both world wars.</p>
          </div>
        `;
      }
    });
    
    // Theme content loading for Theme Explorer
    document.getElementById('theme-select').addEventListener('change', function() {
      const selection = this.value;
      const themeContent = document.getElementById('theme-content');
      
      if (selection === 'social-responsibility') {
        themeContent.innerHTML = `
          <h5>Social Responsibility - Key Points</h5>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Central theme of the play highlighted by Inspector Goole's final speech</li>
            <li>Priestley advocates for collective social responsibility over individualism</li>
            <li>Each character's treatment of Eva Smith represents their failure of social duty</li>
            <li>The younger generation (Sheila and Eric) learn this lesson</li>
            <li>The older generation (Mr. and Mrs. Birling) reject social responsibility</li>
            <li>Written in 1945 after WWII as Britain was rebuilding and creating the welfare state</li>
          </ul>
          
          <h5 class="mt-4">Important Quotes:</h5>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"We are members of one body. We are responsible for each other."</p>
            <p class="text-sm text-right">- Inspector Goole</p>
          </div>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"If men will not learn that lesson, then they will be taught it in fire and blood and anguish."</p>
            <p class="text-sm text-right">- Inspector Goole</p>
          </div>
        `;
      } else if (selection === 'class-divisions') {
        themeContent.innerHTML = `
          <h5>Class Divisions - Key Points</h5>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Stark contrast between the wealthy Birlings and the working-class Eva Smith</li>
            <li>Mr. Birling's capitalist ideology values profit over people</li>
            <li>The Birlings use their social power to exploit and then discard Eva</li>
            <li>Eva represents thousands of working-class people exploited by the privileged</li>
            <li>The Birlings' home is described as "substantial and comfortable but not cosy" - materially wealthy but lacking humanity</li>
            <li>Gerald's family (the Crofts) are described as "upper-class" compared to the "nouveau riche" Birlings</li>
          </ul>
          
          <h5 class="mt-4">Important Quotes:</h5>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"Girls of that class."</p>
            <p class="text-sm text-right">- Mrs. Birling, showing her class prejudice</p>
          </div>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"These girls aren't cheap labour - they're people."</p>
            <p class="text-sm text-right">- Sheila Birling</p>
          </div>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"If you don't come down sharply on some of these people, they'd soon be asking for the earth."</p>
            <p class="text-sm text-right">- Mr. Birling on his workers</p>
          </div>
        `;
      } else if (selection === 'gender-inequality') {
        themeContent.innerHTML = `
          <h5>Gender Inequality - Key Points</h5>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Eva Smith faces exploitation and abuse due to her gender throughout the play</li>
            <li>Working women in 1912 had few rights and protections</li>
            <li>Sheila is initially presented as materialistic and superficial, reflecting expectations of upper-class women</li>
            <li>Mrs. Birling upholds patriarchal values despite being a woman with some power</li>
            <li>Eva is sexually exploited by both Gerald and Eric</li>
            <li>Double standards exist: Eva is judged harshly for her sexuality while men face fewer consequences</li>
          </ul>
          
          <h5 class="mt-4">Important Quotes:</h5>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"She had far too much pride to take anything from him."</p>
            <p class="text-sm text-right">- Mrs. Birling speaking about Eva refusing Eric's stolen money</p>
          </div>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"She ought to have made him marry her."</p>
            <p class="text-sm text-right">- Mrs. Birling, blaming Eva for her predicament</p>
          </div>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"Women of her sort don't destroy themselves so readily - they're usually much too selfish."</p>
            <p class="text-sm text-right">- Gerald showing gender prejudice</p>
          </div>
        `;
      } else if (selection === 'age-generation-gap') {
        themeContent.innerHTML = `
          <h5>Age/Generation Gap - Key Points</h5>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Clear contrast between the older generation (Mr. and Mrs. Birling) and younger generation (Sheila and Eric)</li>
            <li>The younger generation is willing to accept responsibility and change</li>
            <li>The older generation clings to outdated social values and refuses to admit wrongdoing</li>
            <li>Sheila and Eric represent hope for social progress</li>
            <li>Gerald (though younger) aligns with the older generation's values</li>
            <li>By the end, two clear moral camps form based largely on generational lines</li>
          </ul>
          
          <h5 class="mt-4">Important Quotes:</h5>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"You're beginning to pretend now that nothing's really happened at all. And I can't see it like that."</p>
            <p class="text-sm text-right">- Sheila to her parents</p>
          </div>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"The point is, you don't seem to have learnt anything."</p>
            <p class="text-sm text-right">- Eric to his parents</p>
          </div>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"I'm talking as a hard-headed, practical man of business."</p>
            <p class="text-sm text-right">- Mr. Birling, emphasizing outmoded values</p>
          </div>
        `;
      } else if (selection === 'capitalism-socialism') {
        themeContent.innerHTML = `
          <h5>Capitalism vs. Socialism - Key Points</h5>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Mr. Birling represents unbridled capitalism - "a man has to mind his own business and look after himself"</li>
            <li>Inspector Goole represents socialism - "we are members of one body"</li>
            <li>The play was written when Britain was establishing the welfare state</li>
            <li>Priestley was a socialist who supported collective responsibility</li>
            <li>Eva Smith represents victims of unchecked capitalism</li>
            <li>The Inspector calls for social justice and equality</li>
          </ul>
          
          <h5 class="mt-4">Important Quotes:</h5>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"A man has to make his own way - has to look after himself - and his family too, of course... the way some of these cranks talk and write now, you'd think everybody has to look after everybody else, as if we were all mixed up together."</p>
            <p class="text-sm text-right">- Mr. Birling</p>
          </div>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"We are members of one body. We are responsible for each other."</p>
            <p class="text-sm text-right">- Inspector Goole</p>
          </div>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"Public men, Mr. Birling, have responsibilities as well as privileges."</p>
            <p class="text-sm text-right">- Inspector Goole</p>
          </div>
        `;
      } else if (selection === 'moral-accountability') {
        themeContent.innerHTML = `
          <h5>Moral Accountability - Key Points</h5>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Each character must face their moral culpability in Eva's death</li>
            <li>The Inspector forces characters to confront their actions and their consequences</li>
            <li>Different characters respond differently to moral accountability</li>
            <li>Sheila and Eric accept their guilt and resolve to change</li>
            <li>Mr. and Mrs. Birling reject accountability when there are no legal consequences</li>
            <li>The play questions whether morality should be based on external punishment or internal conscience</li>
          </ul>
          
          <h5 class="mt-4">Important Quotes:</h5>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"You see, we have to share something. If there's nothing else, we'll have to share our guilt."</p>
            <p class="text-sm text-right">- Sheila</p>
          </div>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"I didn't install her there so that I could make love to her. I was sorry for her."</p>
            <p class="text-sm text-right">- Gerald, attempting to justify his actions</p>
          </div>
          <div class="p-3 bg-white border rounded mt-2">
            <p class="italic">"But the way you talked, you might have been one of those foreigners - you might have been living in Russia - or some other silly place."</p>
            <p class="text-sm text-right">- Mrs. Birling to Inspector Goole, rejecting social accountability</p>
          </div>
        `;
      }
    });
  </script>
</body>
</html>