<?php include '../../../components/navbar.php';
include '../../../components/cards.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biology 9-1 IGCSE Revision</title>
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="/glow-effect.js"></script>
</head>
<body>
  <!-- Navigation -->
  <?php create_navbar(2, 'Biology IGCSE 9-1'); ?>

  <!-- Hero Section -->
  <section class="container mb-8">
    <div class="card p-8 mb-8 cursor-glow-alt glow-success">
      <div class="text-center mb-6">
        <h2 class="text-3xl mb-4">Biology 9-1 IGCSE Revision</h2>
        <p class="text-muted">Comprehensive resources and study materials for Edexcel IGCSE Biology, 9-1</p>
      </div>
    </div>
  </section>

  <!-- Course Overview -->
  <section class="container mb-8">
    <div class="card-header">
      <h3><i class="fas fa-info-circle text-primary mr-2"></i>&nbsp; Course Overview</h3>
    </div>
    <div class="card no-hover-transform p-6 mb-4">
      <p>The aims and objectives of this qualification are to enable students to:</p>
      <ul class="mb-4" style="list-style-type: disc; margin-left: 20px;">
        <li>Learn about unifying patterns and themes in biology and use them in new and changing situations</li>
        <li>Acquire knowledge and understanding of biological facts, terminology, concepts, principles, and practical techniques</li>
        <li>Apply the principles and concepts of biology, including those related to the applications of biology, to different contexts</li>
        <li>Evaluate biological information, making judgements on the basis of this information</li>
        <li>Appreciate the practical nature of biology, developing experimental and investigative skills based on correct and safe laboratory techniques</li>
        <li>Analyse, interpret and evaluate data and experimental methods, drawing conclusions that are consistent with evidence from experimental activities and suggesting possible improvements and further investigations</li>
        <li>Recognise the importance of accurate experimental work and reporting scientific methods in biology</li>
        <li>Select, organise and present relevant information clearly and logically using appropriate vocabulary, definitions and conventions</li>
        <li>Develop a logical approach to problem solving in a wider context</li>
        <li>Select and apply appropriate areas of mathematics relevant to biology as set out under each topic</li>
        <li>Prepare for more advanced courses in biology and for other courses that require knowledge of biology</li>
      </ul>
      
      <div class="alert alert-info">
      <p><strong>Specification Link:</strong> <a href="https://qualifications.pearson.com/content/dam/pdf/International%20GCSE/Biology/2017/specification-and-sample-assessments/international-gcse-biology-2017-specification1.pdf" target="_blank" rel="noopener noreferrer">Edexcel IGCSE Biology Specification</a></p>
      </div>
    </div>
  </section>

  <!-- Exam Structure -->
  <section class="container mb-8">
    <div class="card-header">
      <h3><i class="fas fa-file-alt text-primary mr-2"></i>&nbsp; Exam Structure</h3>
    </div>
    <div class="card no-hover-transform p-6 mb-4">
      <h4 class="mb-4">Assessment Overview</h4>
      <div class="grid grid-cols-2 gap-4">
        <div class="border p-4 rounded">
          <h5 class="font-bold">Paper 1: Biology</h5>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li><strong>Exam length:</strong> 2 hours</li>
            <li><strong>Total marks:</strong> 110</li>
            <li><strong>Weighting:</strong> 61.1% of total qualification</li>
            <li><strong>Content:</strong> Assesses all specification content</li>
            <li><strong>Assessment:</strong> A mixture of different question styles, including multiple-choice questions, short-answer questions, calculations and extended open-response questions</li>
          </ul>
        </div>
        <div class="border p-4 rounded">
          <h5 class="font-bold">Paper 2: Biology</h5>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li><strong>Exam length:</strong> 1 hour and 15 minutes</li>
            <li><strong>Total marks:</strong> 70</li>
            <li><strong>Weighting:</strong> 38.9% of total qualification</li>
            <li><strong>Content:</strong> Assesses all specification content</li>
            <li><strong>Assessment:</strong> A mixture of different question styles, including multiple-choice questions, short-answer questions, calculations and extended open-response questions</li>
          </ul>
        </div>
      </div>
      <div class="mt-6">
        <div class="alert alert-warning p-3">
        <h4 class="mb-2">About the content of both Papers</h4>
          <p>Both papers assess the entire specification, with Paper 2 targeting the higher-demand concepts and typically more challenging content.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Key Topics -->
  <section class="container mb-8">
    <div class="card-header">
      <h3><i class="fas fa-book-open text-primary mr-2"></i>&nbsp; Key Topics</h3>
    </div>
    <div class="grid grid-cols-3 gap-4">
      <div class="card cursor-glow-alt glow-primary">
        <h4>(1) Nature and Variety of Living Organisms</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li>Characteristics of living organisms</li>
          <li>Variety of living organisms</li>
          <li>Classification systems</li>
          <li>Prokaryotes and eukaryotes</li>
          <li>Five kingdoms of life</li>
        </ul>
        <a href="#topic-1" class="btn btn-outline btn-sm mt-4">Jump to Section</a>
      </div>
      <div class="card cursor-glow-alt glow-magenta">
        <h4>(2) Structure and Functions in Living Organisms</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Level of organisation</li>
            <li>Cell structure</li>
            <li>Biological molecules</li>
            <li>Movement of substances</li>
            <li>Nutrition</li>
            <li>Respiration</li>
            <li>Gas exchange</li>
            <li>Transport</li>
            <li>Excretion</li>
            <li>Co-ordination and response</li>
        </ul>
        <a href="#topic-2" class="btn btn-outline btn-sm mt-4">Jump to Section</a>
      </div>
      <div class="card cursor-glow-alt glow-orange">
        <h4>(3) Reproduction and Inheritance</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li>Reproduction</li>
          <li>Mitosis and meiosis</li>
          <li>Inheritance</li>
          <li>Monohybrid inheritance</li>
          <li>Genetic disorders</li>
          <li>Genetic engineering</li>
        </ul>
        <a href="#topic-3" class="btn btn-outline btn-sm mt-4">Jump to Section</a>
      </div>
      <div class="card cursor-glow-alt glow-green">
        <h4>(4) Ecology and the Environment</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li>The organism in the environment</li>
          <li>Feeding relationships</li>
          <li>Cycles within ecosystems</li>
          <li>Human influences on the environment</li>
          <li>Conservation</li>
        </ul>
        <a href="#topic-4" class="btn btn-outline btn-sm mt-4">Jump to Section</a>
      </div>
      <div class="card cursor-glow-alt glow-purple">
        <h4>(5) Use of Biological Resources</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li>Food production</li>
          <li>Selective breeding</li>
          <li>Genetic modification</li>
          <li>Cloning</li>
          <li>Biotechnology</li>
        </ul>
        <a href="#topic-5" class="btn btn-outline btn-sm mt-4">Jump to Section</a>
      </div>
      <div class="card cursor-glow-alt glow-error">
        <h4>Core Practical Skills</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li>Food tests</li>
          <li>Microscopy techniques</li>
          <li>Enzyme investigations</li>
          <li>Osmosis and diffusion</li>
          <li>Photosynthesis experiments</li>
          <li>Ecological sampling methods</li>
        </ul>
        <a href="#practical-skills" class="btn btn-outline btn-sm mt-4">Jump to Section</a>
      </div>
    </div>
  </section>

  <!-- Topic Detail: Nature and Variety of Living Organisms -->
  <section class="container mb-8" id="topic-1">
    <div class="card-header">
      <h3><i class="fas fa-dna text-primary mr-2"></i>&nbsp; Topic 1: Nature and Variety of Living Organisms</h3>
    </div>
    <div class="card p-6">
      <div class="mb-4">
        <h4 class="mb-2">Key Concepts</h4>
        <p>This section introduces the fundamental characteristics that define living organisms and explores the diversity of life on Earth.</p>
        
        <div class="grid grid-cols-2 gap-4 mt-4">
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">1.1 Characteristics of Living Organisms</h5>
            <p>All living organisms share these characteristics:</p>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Movement:</strong> An action by an organism causing a change of position or place</li>
              <li><strong>Respiration:</strong> Chemical reactions in cells that break down nutrient molecules and release energy</li>
              <li><strong>Sensitivity:</strong> The ability to detect and respond to changes in the environment</li>
              <li><strong>Growth:</strong> A permanent increase in size</li>
              <li><strong>Reproduction:</strong> The process producing new organisms of the same species</li>
              <li><strong>Excretion:</strong> Removal of toxic waste products and substances in excess</li>
              <li><strong>Nutrition:</strong> Taking in of nutrients for energy, growth and development</li>
            </ul>
            <p class="mt-2"><strong>Remember using the acronym:</strong> MRS GREN</p>
          </div>
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">1.2 Variety of Living Organisms</h5>
            <p>Classification of organisms into groups based on similarities and differences:</p>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Animals:</strong> Multicellular organisms; feed on other organisms</li>
              <li><strong>Plants:</strong> Multicellular organisms; contain chloroplasts; photosynthetic</li>
              <li><strong>Fungi:</strong> Body formed of threads called hyphae; surrounded by cell walls</li>
              <li><strong>Bacteria:</strong> Microscopic single-celled organisms with no nucleus</li>
              <li><strong>Protoctists:</strong> Microscopic single-celled organisms with a nucleus</li>
              <li><strong>Viruses:</strong> Very small; genetic material inside a protein coat; parasitic</li>
            </ul>
          </div>
        </div>
        
        <div class="mt-4">
          <h5 class="font-bold mb-2">Classification Systems</h5>
          <p>Organisms are classified into groups according to their similarities and differences:</p>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Kingdom → Phylum → Class → Order → Family → Genus → Species</li>
            <li>The binomial system of naming species uses the genus and species name (e.g., <i>Homo sapiens</i>)</li>
            <li>Natural classification systems reflect evolutionary relationships</li>
          </ul>
        </div>
      </div>
      
      <div class="mt-6">
        <h4 class="mb-2">Common Misconceptions</h4>
        <div class="alert alert-warning p-3">
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Viruses are not considered truly alive as they cannot carry out all life processes independently</li>
            <li>Bacteria and fungi are not plants, but belong to separate kingdoms</li>
            <li>Not all protoctists are "animal-like" - some are photosynthetic (like algae)</li>
            <li>Classification systems continue to evolve with new discoveries and genetic analysis</li>
          </ul>
        </div>
      </div>
      
      <div class="mt-6">
        <h4 class="mb-2">Study Resources</h4>
        <div class="flex gap-2 flex-wrap">
          <a href="https://www.savemyexams.co.uk/igcse/biology/edexcel/17/revision-notes/1-the-nature--variety-of-living-organisms/" target="_blank" class="btn btn-outline btn-sm">Save My Exams Notes</a>
          <a href="https://www.physicsandmathstutor.com/biology-revision/igcse-edexcel/nature-variety-living-organisms/" target="_blank" class="btn btn-outline btn-sm">Physics & Maths Tutor</a>
          <a href="https://www.bbc.co.uk/bitesize/topics/z2mttv4" target="_blank" class="btn btn-outline btn-sm">BBC Bitesize</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Topic Detail: Structure and Functions in Living Organisms -->
  <section class="container mb-8" id="topic-2">
    <div class="card-header">
      <h3><i class="fas fa-microscope text-primary mr-2"></i>&nbsp; Topic 2: Structure and Functions in Living Organisms</h3>
    </div>
    <div class="card p-6">
      <div class="mb-4">
        <h4 class="mb-2">Overview</h4>
        <p>This substantial section covers the structures and processes that allow organisms to function, from the cellular level to the whole organism.</p>
        
        <div class="grid grid-cols-2 gap-4 mt-4">
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">2.1 Levels of Organisation</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li>Cell → Tissue → Organ → Organ System → Organism</li>
              <li><strong>Tissues:</strong> Groups of similar cells working together</li>
              <li><strong>Organs:</strong> Different tissues working together</li>
              <li><strong>Organ systems:</strong> Different organs working together</li>
            </ul>
          </div>
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">2.2 Cell Structure</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Animal cells:</strong> Cell membrane, cytoplasm, nucleus, mitochondria</li>
              <li><strong>Plant cells:</strong> Above + cell wall, chloroplasts, permanent vacuole</li>
              <li><strong>Specialised cells:</strong> Red blood cells, sperm cells, nerve cells, etc.</li>
              <li><strong>Cell differentiation:</strong> Process of a cell becoming specialized</li>
            </ul>
          </div>
        </div>
        
        <div class="grid grid-cols-2 gap-4 mt-4">
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">2.3 Biological Molecules</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Carbohydrates:</strong> Energy storage (glucose, starch, glycogen)</li>
              <li><strong>Proteins:</strong> Enzymes, structural components, transport</li>
              <li><strong>Lipids:</strong> Energy storage, insulation, cell membranes</li>
              <li><strong>Enzymes:</strong> Biological catalysts; affected by temperature and pH</li>
              <li><strong>Food tests:</strong> Benedict's (reducing sugars), iodine (starch), Biuret (protein), Sudan III (lipids)</li>
            </ul>
          </div>
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">2.4 Movement of Substances</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Diffusion:</strong> Movement from high to low concentration</li>
              <li><strong>Osmosis:</strong> Movement of water through a partially permeable membrane</li>
              <li><strong>Active transport:</strong> Movement against a concentration gradient (requires energy)</li>
              <li><strong>Surface area to volume ratio:</strong> Important for efficient exchange</li>
            </ul>
          </div>
        </div>
        
        <div class="grid grid-cols-2 gap-4 mt-4">
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">2.5 Nutrition</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Plant nutrition:</strong> Photosynthesis, mineral requirements</li>
              <li><strong>Photosynthesis:</strong> 6CO₂ + 6H₂O → C₆H₁₂O₆ + 6O₂</li>
              <li><strong>Limiting factors:</strong> Light intensity, carbon dioxide concentration, temperature</li>
              <li><strong>Human nutrition:</strong> Balanced diet, digestive system</li>
              <li><strong>Digestive enzymes:</strong> Amylase, protease, lipase</li>
            </ul>
          </div>
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">2.6 Respiration</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Aerobic:</strong> Glucose + Oxygen → Carbon dioxide + Water + Energy</li>
              <li><strong>Anaerobic (human):</strong> Glucose → Lactic acid + Energy</li>
              <li><strong>Anaerobic (plants/yeast):</strong> Glucose → Ethanol + Carbon dioxide + Energy</li>
              <li><strong>Energy uses:</strong> Movement, synthesis, maintaining body temperature</li>
            </ul>
          </div>
        </div>
        
        <div class="grid grid-cols-2 gap-4 mt-4">
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">2.7 Gas Exchange</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Human respiratory system:</strong> Trachea, bronchi, bronchioles, alveoli</li>
              <li><strong>Alveoli adaptations:</strong> Large surface area, thin walls, good blood supply</li>
              <li><strong>Breathing mechanism:</strong> Role of diaphragm and intercostal muscles</li>
              <li><strong>Plant gas exchange:</strong> Through stomata in leaves</li>
            </ul>
          </div>
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">2.8 Transport</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Human circulatory system:</strong> Double circulation, heart structure</li>
              <li><strong>Blood components:</strong> Red cells, white cells, platelets, plasma</li>
              <li><strong>Plant transport:</strong> Xylem (water, minerals), phloem (sugars)</li>
              <li><strong>Transpiration:</strong> Movement of water through plants</li>
            </ul>
          </div>
        </div>
        
        <div class="grid grid-cols-2 gap-4 mt-4">
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">2.9 Excretion</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Human excretory system:</strong> Kidneys, ureters, bladder, urethra</li>
              <li><strong>Kidney function:</strong> Ultrafiltration, reabsorption</li>
              <li><strong>Role in homeostasis:</strong> Water balance, removal of metabolic waste</li>
              <li><strong>Plant excretion:</strong> Oxygen, carbon dioxide, water</li>
            </ul>
          </div>
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">2.10 Coordination and Response</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Nervous system:</strong> CNS, PNS, reflex arc</li>
              <li><strong>Neuron structure:</strong> Cell body, axon, dendrites</li>
              <li><strong>Hormonal coordination:</strong> Endocrine glands, hormones</li>
              <li><strong>Plant hormones:</strong> Tropisms, growth responses</li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="mt-6">
        <h4 class="mb-2">Key Diagrams to Know</h4>
        <div class="grid grid-cols-3 gap-4">
          <div class="border p-3 rounded text-center">
            <p>Cell Structure</p>
          </div>
          <div class="border p-3 rounded text-center">
            <p>Enzyme Action</p>
          </div>
          <div class="border p-3 rounded text-center">
            <p>Digestive System</p>
          </div>
          <div class="border p-3 rounded text-center">
            <p>Respiratory System</p>
          </div>
          <div class="border p-3 rounded text-center">
            <p>Heart Structure</p>
          </div>
          <div class="border p-3 rounded text-center">
            <p>Kidney Structure</p>
          </div>
        </div>
      </div>
      
      <div class="mt-6">
        <h4 class="mb-2">Study Resources</h4>
        <div class="flex gap-2 flex-wrap">
          <a href="https://www.savemyexams.co.uk/igcse/biology/edexcel/17/revision-notes/2-structures--functions-in-living-organisms/" target="_blank" class="btn btn-outline btn-sm">Save My Exams Notes</a>
          <a href="https://www.physicsandmathstutor.com/biology-revision/igcse-edexcel/structure-function-living-organisms/" target="_blank" class="btn btn-outline btn-sm">Physics & Maths Tutor</a>
          <a href="https://www.bbc.co.uk/bitesize/topics/znyycdm" target="_blank" class="btn btn-outline btn-sm">BBC Bitesize</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Topic Detail: Reproduction and Inheritance -->
  <section class="container mb-8" id="topic-3">
    <div class="card-header">
      <h3><i class="fas fa-dna text-primary mr-2"></i>&nbsp; Topic 3: Reproduction and Inheritance</h3>
    </div>
    <div class="card p-6">
      <div class="mb-4">
        <h4 class="mb-2">Key Concepts</h4>
        <p>This section covers how organisms reproduce and pass on genetic information to their offspring.</p>
        
        <div class="grid grid-cols-2 gap-4 mt-4">
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">3.1 Reproduction</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Asexual reproduction:</strong> One parent, genetically identical offspring</li>
              <li><strong>Sexual reproduction:</strong> Two parents, genetic variation in offspring</li>
              <li><strong>Human reproductive organs:</strong> Structure and function</li>
              <li><strong>Gametes:</strong> Sperm and egg cells, specialized for function</li>
              <li><strong>Fertilization:</strong> Fusion of egg and sperm nuclei</li>
              <li><strong>Plant reproduction:</strong> Flower structure, pollination, fertilization</li>
            </ul>
          </div>
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">3.2 Cell Division</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Mitosis:</strong> Cell division for growth and repair</li>
              <li><strong>Stages:</strong> Prophase, metaphase, anaphase, telophase</li>
              <li><strong>Result:</strong> Two identical daughter cells</li>
              <li><strong>Meiosis:</strong> Cell division for gamete production</li>
              <li><strong>Result:</strong> Four genetically different haploid cells</li>
              <li><strong>Significance:</strong> Introduces genetic variation</li>
            </ul>
          </div>
        </div>
        
        <div class="grid grid-cols-2 gap-4 mt-4">
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">3.3 Genetic Material</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>DNA:</strong> Double helix structure, nucleotides (ATCG)</li>
              <li><strong>Genes:</strong> Sections of DNA coding for proteins</li>
              <li><strong>Chromosomes:</strong> DNA and protein structures</li>
              <li><strong>Genome:</strong> Complete set of genetic information</li>
              <li><strong>Alleles:</strong> Different forms of the same gene</li>
              <li><strong>Dominant/recessive alleles:</strong> Expression patterns</li>
            </ul>
          </div>
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">3.4 Inheritance</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Monohybrid inheritance:</strong> Study of one gene pair</li>
              <li><strong>Genetic diagrams:</strong> Punnett squares</li>
              <li><strong>Genotype vs phenotype:</strong> Genetic makeup vs appearance</li>
              <li><strong>Homozygous vs heterozygous:</strong> Same vs different alleles</li>
              <li><strong>Sex determination:</strong> XX (female), XY (male)</li>
              <li><strong>Sex-linked inheritance:</strong> Genes on X chromosome</li>
            </ul>
          </div>
        </div>
        
        <div class="grid grid-cols-2 gap-4 mt-4">
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">3.5 Genetic Disorders</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Cystic fibrosis:</strong> Recessive inheritance</li>
              <li><strong>Sickle cell anemia:</strong> Recessive inheritance</li>
              <li><strong>Huntington's disease:</strong> Dominant inheritance</li>
              <li><strong>Hemophilia:</strong> Sex-linked recessive</li>
              <li><strong>Genetic screening:</strong> Testing for genetic disorders</li>
            </ul>
          </div>
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">3.6 Variation and Selection</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Genetic variation:</strong> Different alleles, meiosis, random fertilization</li>
              <li><strong>Environmental variation:</strong> Non-inherited differences</li>
              <li><strong>Natural selection:</strong> Survival of the fittest</li>
              <li><strong>Evolution:</strong> Change in species over time</li>
              <li><strong>Antibiotic resistance:</strong> Example of natural selection</li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="mt-6">
        <h4 class="mb-2">Common Misconceptions</h4>
        <div class="alert alert-warning p-3">
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Dominant alleles are not necessarily more common in a population</li>
            <li>Evolution is not a "ladder of progress" but a branching process</li>
            <li>Natural selection works on existing variation, not creating new traits</li>
            <li>Genetic disorders are not always visible or immediately apparent</li>
          </ul>
        </div>
      </div>
      
      <div class="mt-6">
        <h4 class="mb-2">Study Resources</h4>
        <div class="flex gap-2 flex-wrap">
          <a href="https://www.savemyexams.co.uk/igcse/biology/edexcel/17/revision-notes/3-reproduction--inheritance/" target="_blank" class="btn btn-outline btn-sm">Save My Exams Notes</a>
          <a href="https://www.physicsandmathstutor.com/biology-revision/igcse-edexcel/reproduction-inheritance/" target="_blank" class="btn btn-outline btn-sm">Physics & Maths Tutor</a>
          <a href="https://www.bbc.co.uk/bitesize/topics/zpffwty" target="_blank" class="btn btn-outline btn-sm">BBC Bitesize</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Topic Detail: Ecology and the Environment -->
  <section class="container mb-8" id="topic-4">
    <div class="card-header">
      <h3><i class="fas fa-leaf text-primary mr-2"></i>&nbsp; Topic 4: Ecology and the Environment</h3>
    </div>
    <div class="card p-6">
      <div class="mb-4">
        <h4 class="mb-2">Key Concepts</h4>
        <p>This section explores how organisms interact with each other and their environment.</p>
        
        <div class="grid grid-cols-2 gap-4 mt-4">
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">4.1 The Organism in the Environment</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Ecosystem:</strong> Community of organisms and their environment</li>
              <li><strong>Habitat:</strong> Place where an organism lives</li>
              <li><strong>Population:</strong> Organisms of one species in an area</li>
              <li><strong>Community:</strong> Populations of different species in an area</li>
              <li><strong>Adaptations:</strong> Features that help organisms survive</li>
              <li><strong>Sampling techniques:</strong> Quadrats, transects, mark-release-recapture</li>
            </ul>
          </div>
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">4.2 Feeding Relationships</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Food chains:</strong> Linear feeding relationships</li>
              <li><strong>Food webs:</strong> Interconnected food chains</li>
              <li><strong>Trophic levels:</strong> Producers, primary consumers, etc.</li>
              <li><strong>Energy transfer:</strong> ~10% efficiency between trophic levels</li>
              <li><strong>Pyramids:</strong> Numbers, biomass, energy</li>
              <li><strong>Decomposers:</strong> Role in recycling nutrients</li>
            </ul>
          </div>
        </div>
        
        <div class="grid grid-cols-2 gap-4 mt-4">
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">4.3 Cycles Within Ecosystems</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Carbon cycle:</strong> Photosynthesis, respiration, combustion, decomposition</li>
              <li><strong>Water cycle:</strong> Evaporation, condensation, precipitation, transpiration</li>
              <li><strong>Nitrogen cycle:</strong> Nitrogen fixation, nitrification, denitrification</li>
              <li><strong>Importance:</strong> Recycling of finite resources</li>
            </ul>
          </div>
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">4.4 Human Influences on the Environment</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Pollution:</strong> Air, water, land pollution sources and effects</li>
              <li><strong>Deforestation:</strong> Causes and consequences</li>
              <li><strong>Global warming:</strong> Greenhouse effect, climate change</li>
              <li><strong>Acid rain:</strong> Formation and environmental impact</li>
              <li><strong>Eutrophication:</strong> Process and consequences</li>
              <li><strong>Biodiversity loss:</strong> Causes and implications</li>
            </ul>
          </div>
        </div>
        
        <div class="mt-4">
          <h5 class="font-bold mb-2">4.5 Conservation</h5>
          <div class="border p-4 rounded">
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Conservation strategies:</strong> Protected areas, sustainable use of resources</li>
              <li><strong>Endangered species:</strong> Causes and protection measures</li>
              <li><strong>Sustainable development:</strong> Meeting present needs without compromising future</li>
              <li><strong>Wildlife corridors:</strong> Connecting fragmented habitats</li>
              <li><strong>Captive breeding programs:</strong> Ex-situ conservation</li>
              <li><strong>International agreements:</strong> CITES, biodiversity conventions</li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="mt-6">
        <h4 class="mb-2">Key Terms to Remember</h4>
        <div class="grid grid-cols-3 gap-2">
          <div class="border p-2 rounded text-center">Biodiversity</div>
          <div class="border p-2 rounded text-center">Carrying capacity</div>
          <div class="border p-2 rounded text-center">Competition</div>
          <div class="border p-2 rounded text-center">Predator-prey relationship</div>
          <div class="border p-2 rounded text-center">Limiting factor</div>
          <div class="border p-2 rounded text-center">Biotic factor</div>
          <div class="border p-2 rounded text-center">Abiotic factor</div>
          <div class="border p-2 rounded text-center">Climax community</div>
          <div class="border p-2 rounded text-center">Succession</div>
        </div>
      </div>
      
      <div class="mt-6">
        <h4 class="mb-2">Study Resources</h4>
        <div class="flex gap-2 flex-wrap">
          <a href="https://www.savemyexams.co.uk/igcse/biology/edexcel/17/revision-notes/4-ecology--the-environment/" target="_blank" class="btn btn-outline btn-sm">Save My Exams Notes</a>
          <a href="https://www.physicsandmathstutor.com/biology-revision/igcse-edexcel/ecology-environment/" target="_blank" class="btn btn-outline btn-sm">Physics & Maths Tutor</a>
          <a href="https://www.bbc.co.uk/bitesize/topics/zxhhvcw" target="_blank" class="btn btn-outline btn-sm">BBC Bitesize</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Topic Detail: Use of Biological Resources -->
  <section class="container mb-8" id="topic-5">
    <div class="card-header">
      <h3><i class="fas fa-flask text-primary mr-2"></i>&nbsp; Topic 5: Use of Biological Resources</h3>
    </div>
    <div class="card p-6">
      <div class="mb-4">
        <h4 class="mb-2">Key Concepts</h4>
        <p>This section covers how humans use and manipulate biological systems for our benefit.</p>
        
        <div class="grid grid-cols-2 gap-4 mt-4">
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">5.1 Food Production</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Crop plants:</strong> Improving yield through various methods</li>
              <li><strong>Fertilizers:</strong> Types, benefits, environmental impact</li>
              <li><strong>Pesticides:</strong> Types, benefits, environmental impact</li>
              <li><strong>Biological control:</strong> Using natural predators/pathogens</li>
              <li><strong>Farm animals:</strong> Efficient production methods</li>
              <li><strong>Fish farming:</strong> Aquaculture techniques and issues</li>
            </ul>
          </div>
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">5.2 Selective Breeding</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Process:</strong> Selecting organisms with desired traits</li>
              <li><strong>Applications:</strong> Disease resistance, increased yield, improved quality</li>
              <li><strong>Examples:</strong> Cows with high milk yield, wheat with high protein</li>
              <li><strong>Advantages:</strong> Higher production, improved qualities</li>
              <li><strong>Disadvantages:</strong> Reduced genetic diversity, inbreeding</li>
            </ul>
          </div>
        </div>
        
        <div class="grid grid-cols-2 gap-4 mt-4">
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">5.3 Genetic Modification</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Process:</strong> Transferring genes between organisms</li>
              <li><strong>Tools:</strong> Restriction enzymes, vectors, markers</li>
              <li><strong>Applications:</strong> GM crops, medical products, research</li>
              <li><strong>Examples:</strong> Bt crops, golden rice, insulin production</li>
              <li><strong>Advantages:</strong> Novel traits, increased production</li>
              <li><strong>Concerns:</strong> Health risks, environmental impact, ethics</li>
            </ul>
          </div>
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">5.4 Cloning</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Natural cloning:</strong> Asexual reproduction in plants</li>
              <li><strong>Artificial propagation:</strong> Cuttings, tissue culture</li>
              <li><strong>Embryo transplants:</strong> In mammals</li>
              <li><strong>Adult cell cloning:</strong> Somatic cell nuclear transfer</li>
              <li><strong>Applications:</strong> Agriculture, conservation, research</li>
              <li><strong>Ethical considerations:</strong> Human cloning debates</li>
            </ul>
          </div>
        </div>
        
        <div class="mt-4">
          <h5 class="font-bold mb-2">5.5 Biotechnology</h5>
          <div class="border p-4 rounded">
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Microorganisms in food production:</strong> Bread, yogurt, cheese</li>
              <li><strong>Fermentation:</strong> Using yeast for alcohol production</li>
              <li><strong>Mycoprotein:</strong> Fungal protein for human consumption</li>
              <li><strong>Biofuels:</strong> Ethanol, biogas production</li>
              <li><strong>Enzymes in industry:</strong> Detergents, food processing</li>
              <li><strong>Microorganisms in medicine:</strong> Antibiotic production</li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="mt-6">
        <h4 class="mb-2">Ethical Considerations</h4>
        <div class="alert alert-info p-3">
          <p>Many topics in this section raise important ethical questions:</p>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Is genetic modification of food crops safe and ethical?</li>
            <li>Should we clone endangered animals to prevent extinction?</li>
            <li>What are the environmental impacts of intensive farming?</li>
            <li>How do we balance food production with sustainability?</li>
            <li>What are the concerns around patents on genetic material?</li>
          </ul>
        </div>
      </div>
      
      <div class="mt-6">
        <h4 class="mb-2">Study Resources</h4>
        <div class="flex gap-2 flex-wrap">
          <a href="https://www.savemyexams.co.uk/igcse/biology/edexcel/17/revision-notes/5-use-of-biological-resources/" target="_blank" class="btn btn-outline btn-sm">Save My Exams Notes</a>
          <a href="https://www.physicsandmathstutor.com/biology-revision/igcse-edexcel/use-biological-resources/" target="_blank" class="btn btn-outline btn-sm">Physics & Maths Tutor</a>
          <a href="https://www.bbc.co.uk/bitesize/topics/z9wcjxs" target="_blank" class="btn btn-outline btn-sm">BBC Bitesize</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Practical Skills Section -->
  <section class="container mb-8" id="practical-skills">
    <div class="card-header">
      <h3><i class="fas fa-vial text-primary mr-2"></i>&nbsp; Core Practical Skills</h3>
    </div>
    <div class="card p-6">
      <div class="mb-4">
        <h4 class="mb-2">Essential Practical Techniques</h4>
        <p>The following practical skills are essential for success in the IGCSE Biology course and may be examined in either paper:</p>
        
        <div class="grid grid-cols-2 gap-4 mt-4">
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">Food Tests</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Benedict's test (reducing sugars):</strong> Blue → green/yellow/orange/brick red</li>
              <li><strong>Iodine test (starch):</strong> Yellow-brown → blue-black</li>
              <li><strong>Biuret test (protein):</strong> Blue → purple</li>
              <li><strong>Sudan III test (lipids):</strong> Red layer at interface</li>
              <li><strong>Emulsion test (lipids):</strong> Cloudy white emulsion forms</li>
            </ul>
            <div class="alert alert-warning mt-2 p-2 text-sm">
              <p><strong>Common error:</strong> Forgetting to heat the Benedict's solution with the food sample</p>
            </div>
          </div>
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">Microscopy</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Using a light microscope:</strong> Correct focusing procedure</li>
              <li><strong>Preparing slides:</strong> Temporary mounts with stains</li>
              <li><strong>Drawing cells:</strong> Clear outlines, labeled structures, scale</li>
              <li><strong>Calculating magnification:</strong> Image size ÷ actual size</li>
              <li><strong>Estimating cell size:</strong> Using the eyepiece graticule</li>
            </ul>
            <div class="alert alert-warning mt-2 p-2 text-sm">
              <p><strong>Common error:</strong> Drawing cells with double lines or shading</p>
            </div>
          </div>
        </div>
        
        <div class="grid grid-cols-2 gap-4 mt-4">
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">Enzyme Investigations</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Effect of temperature:</strong> Rate increases then decreases</li>
              <li><strong>Effect of pH:</strong> Optimum pH depends on enzyme</li>
              <li><strong>Effect of concentration:</strong> Rate increases to a plateau</li>
              <li><strong>Common enzymes studied:</strong> Amylase, catalase, pepsin</li>
              <li><strong>Variables to control:</strong> Temperature, pH, concentration</li>
            </ul>
            <div class="alert alert-warning mt-2 p-2 text-sm">
              <p><strong>Common error:</strong> Not controlling all variables except the one being tested</p>
            </div>
          </div>
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">Transport in Plants</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Investigating osmosis:</strong> Using potato/visking tubing</li>
              <li><strong>Observing stomata:</strong> Nail varnish impressions</li>
              <li><strong>Measuring transpiration:</strong> Using a potometer</li>
              <li><strong>Investigating factors affecting transpiration:</strong> Light, humidity, temperature, air movement</li>
            </ul>
            <div class="alert alert-warning mt-2 p-2 text-sm">
              <p><strong>Common error:</strong> Air bubbles in potometer affecting readings</p>
            </div>
          </div>
        </div>
        
        <div class="grid grid-cols-2 gap-4 mt-4">
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">Photosynthesis Experiments</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Testing for starch in leaves:</strong> Decolorizing with alcohol</li>
              <li><strong>Investigating limiting factors:</strong> Light, CO₂, temperature</li>
              <li><strong>Measuring oxygen production:</strong> Using aquatic plants</li>
              <li><strong>Variegated leaves:</strong> Demonstrating need for chlorophyll</li>
            </ul>
            <div class="alert alert-warning mt-2 p-2 text-sm">
              <p><strong>Common error:</strong> Not completely decolorizing leaves before testing with iodine</p>
            </div>
          </div>
          <div class="border p-4 rounded">
            <h5 class="font-bold mb-2">Ecological Sampling</h5>
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li><strong>Quadrats:</strong> Random or systematic sampling</li>
              <li><strong>Transects:</strong> Studying distribution across gradients</li>
              <li><strong>Mark-release-recapture:</strong> Estimating population size</li>
              <li><strong>Keys:</strong> Identifying organisms</li>
              <li><strong>Measuring abiotic factors:</strong> Light, temperature, pH, etc.</li>
            </ul>
            <div class="alert alert-warning mt-2 p-2 text-sm">
              <p><strong>Common error:</strong> Biased sampling instead of truly random placement</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="mt-6">
        <h4 class="mb-2">Exam Tips for Practical Questions</h4>
        <div class="alert alert-info p-3">
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Always identify the independent, dependent, and control variables</li>
            <li>Describe how to ensure a fair test (control variables)</li>
            <li>Explain how to collect accurate and reliable data (repeats, control groups)</li>
            <li>Consider safety precautions where relevant</li>
            <li>When analyzing data, look for patterns, trends, and anomalies</li>
            <li>Suggest improvements to the experimental method</li>
            <li>Be familiar with common apparatus and their uses</li>
          </ul>
        </div>
      </div>
      
      <div class="mt-6">
        <h4 class="mb-2">Study Resources</h4>
        <div class="flex gap-2 flex-wrap">
          <a href="https://www.savemyexams.co.uk/igcse/biology/edexcel/17/revision-notes/practicals/" target="_blank" class="btn btn-outline btn-sm">Save My Exams Practical Notes</a>
          <a href="https://www.physicsandmathstutor.com/biology-revision/igcse-edexcel/practical-skills/" target="_blank" class="btn btn-outline btn-sm">Physics & Maths Tutor Practicals</a>
          <a href="https://www.pearsonschoolsandfecolleges.co.uk/secondary/Science/International-GCSE/Edexcel-International-GCSE-Biology/Samples/Sample-pages-from-Edexcel-International-GCSE-9-1-Biology-Student-Book/IGCSE-9-1-Biology-SB-Practical-skills-and-advice.pdf" target="_blank" class="btn btn-outline btn-sm">Pearson Practical Guide</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Resources -->
  <section class="container mb-8">
    <div class="card-header">
      <h3><i class="fas fa-link text-primary mr-2"></i>&nbsp; Useful Resources</h3>
    </div>
    <div class="grid grid-cols-3 gap-4">
      <div class="card">
        <h4>Official Resources</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li><a href="https://qualifications.pearson.com/en/qualifications/edexcel-international-gcses/international-gcse-biology-2017.html" target="_blank">Edexcel IGCSE Biology Website</a></li>
          <li><a href="https://qualifications.pearson.com/content/dam/pdf/International%20GCSE/Biology/2017/specification-and-sample-assessments/international-gcse-biology-2017-specification1.pdf" target="_blank">Biology Specification</a></li>
          <li><a href="https://www.pearsonschoolsandfecolleges.co.uk/secondary/Science/International-GCSE/Edexcel-International-GCSE-Biology/Edexcel-International-GCSE-Biology.aspx" target="_blank">Pearson Textbooks</a></li>
        </ul>
      </div>
      <div class="card">
        <h4>Study Guides</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li><a href="https://www.savemyexams.co.uk/igcse/biology/edexcel/17/" target="_blank">Save My Exams Revision Notes</a></li>
          <li><a href="https://www.physicsandmathstutor.com/biology-revision/igcse-edexcel/" target="_blank">Physics & Maths Tutor</a></li>
          <li><a href="https://www.bbc.co.uk/bitesize/examspecs/zcwmsbk" target="_blank">BBC Bitesize</a></li>
          <li><a href="https://www.senecalearning.com/en-GB/blog/edexcel-igcse-biology-revision/" target="_blank">Seneca Learning</a></li>
        </ul>
      </div>
      <div class="card">
        <h4>Practice & Past Papers</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li><a href="https://www.physicsandmathstutor.com/biology-revision/igcse-edexcel/past-papers/" target="_blank">Physics & Maths Tutor Past Papers</a></li>
          <li><a href="https://www.savemyexams.co.uk/igcse/biology/edexcel/17/past-papers/" target="_blank">Save My Exams Past Papers</a></li>
          <li><a href="https://www.igcsecentre.com/cambridge-igcse-past-exam-papers/" target="_blank">IGCSE Centre</a></li>
          <li><a href="https://pastpapers.papacambridge.com/papers/edexcel/igcse/biology" target="_blank">PapaCambridge</a></li>
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
      <h4 class="mb-4">Sample Questions by Topic</h4>
      
      <div class="border p-4 rounded mb-4">
        <p class="font-bold">Topic 1: Nature and Variety of Living Organisms</p>
        <p class="mb-2">A student observed an organism under a microscope. It was unicellular with a cell wall and chloroplasts. To which kingdom does this organism most likely belong?</p>
        <button class="btn btn-outline btn-sm" onclick="toggleElement('answer1')">Show Answer</button>
        <div id="answer1" class="mt-2 p-3 bg-gray-50 rounded" style="display:none;">
          <p><strong>Answer:</strong> Protoctista (algae)</p>
          <p><strong>Explanation:</strong> The organism has a cell wall (ruling out animals) and chloroplasts for photosynthesis. Being unicellular rules out plants (which are multicellular). Bacteria (prokaryotes) don't have chloroplasts. Therefore, this is likely a unicellular alga from kingdom Protoctista.</p>
        </div>
      </div>
      
      <div class="border p-4 rounded mb-4">
        <p class="font-bold">Topic 2: Structure and Functions in Living Organisms</p>
        <p class="mb-2">Explain how the structure of alveoli is adapted for efficient gas exchange.</p>
        <button class="btn btn-outline btn-sm" onclick="toggleElement('answer2')">Show Answer</button>
        <div id="answer2" class="mt-2 p-3 bg-gray-50 rounded" style="display:none;">
          <p><strong>Answer:</strong></p>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Large surface area due to millions of small air sacs</li>
            <li>Thin walls (single cell layer) for short diffusion distance</li>
            <li>Moist surface to dissolve gases</li>
            <li>Rich blood supply to maintain concentration gradient</li>
            <li>Network of capillaries surrounds each alveolus</li>
            <li>Large number of mitochondria in cells for active transport</li>
          </ul>
        </div>
      </div>
      
      <div class="border p-4 rounded mb-4">
        <p class="font-bold">Topic 3: Reproduction and Inheritance</p>
        <p class="mb-2">A man with blood type A marries a woman with blood type B. Both are heterozygous. What are the possible blood types of their children and in what ratio?</p>
        <button class="btn btn-outline btn-sm" onclick="toggleElement('answer3')">Show Answer</button>
        <div id="answer3" class="mt-2 p-3 bg-gray-50 rounded" style="display:none;">
          <p><strong>Answer:</strong></p>
          <p>Man's genotype: I<sup>A</sup>i (heterozygous A)<br>Woman's genotype: I<sup>B</sup>i (heterozygous B)</p>
          <p>Possible genotypes of children:</p>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>I<sup>A</sup>I<sup>B</sup> (blood type AB)</li>
            <li>I<sup>A</sup>i (blood type A)</li>
            <li>I<sup>B</sup>i (blood type B)</li>
            <li>ii (blood type O)</li>
          </ul>
          <p>The ratio is 1:1:1:1 or 25% each type.</p>
        </div>
      </div>
      
      <div class="border p-4 rounded mb-4">
        <p class="font-bold">Topic 4: Ecology and the Environment</p>
        <p class="mb-2">Describe the carbon cycle and explain how human activities have affected it.</p>
        <button class="btn btn-outline btn-sm" onclick="toggleElement('answer4')">Show Answer</button>
        <div id="answer4" class="mt-2 p-3 bg-gray-50 rounded" style="display:none;">
          <p><strong>Answer:</strong></p>
          <p><strong>Carbon cycle:</strong></p>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Carbon dioxide is removed from atmosphere by photosynthesis in plants</li>
            <li>Carbon is transferred to animals when they eat plants</li>
            <li>Carbon dioxide returns to atmosphere through respiration of plants and animals</li>
            <li>When organisms die, decomposers break down remains, releasing carbon dioxide</li>
            <li>Some carbon forms fossil fuels over millions of years</li>
          </ul>
          <p><strong>Human impacts:</strong></p>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Burning fossil fuels releases stored carbon as CO₂</li>
            <li>Deforestation reduces carbon dioxide uptake by plants</li>
            <li>Industrial processes release additional CO₂</li>
            <li>This has increased atmospheric CO₂, contributing to global warming</li>
            <li>Ocean acidification as more CO₂ dissolves in seawater</li>
          </ul>
        </div>
      </div>
      
      <div class="border p-4 rounded mb-4">
        <p class="font-bold">Topic 5: Use of Biological Resources</p>
        <p class="mb-2">Compare and contrast selective breeding and genetic engineering as methods to improve crop plants.</p>
        <button class="btn btn-outline btn-sm" onclick="toggleElement('answer5')">Show Answer</button>
        <div id="answer5" class="mt-2 p-3 bg-gray-50 rounded" style="display:none;">
          <p><strong>Answer:</strong></p>
          <p><strong>Selective breeding:</strong></p>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Uses existing variation within a species</li>
            <li>Involves choosing individuals with desired traits</li>
            <li>Breeding selected individuals over many generations</li>
            <li>Slower process (takes many generations)</li>
            <li>Limited to traits already present in the species</li>
            <li>May lead to inbreeding and reduced genetic diversity</li>
            <li>Generally more accepted by consumers</li>
          </ul>
          <p><strong>Genetic engineering:</strong></p>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li>Involves direct manipulation of DNA</li>
            <li>Can transfer genes between unrelated species</li>
            <li>Faster results (can introduce trait in one generation)</li>
            <li>Can introduce completely new traits not found in the species</li>
            <li>More precise targeting of specific traits</li>
            <li>Raises concerns about safety and unforeseen consequences</li>
            <li>Faces consumer resistance in some markets</li>
          </ul>
        </div>
      </div>
      
      <a href="https://www.savemyexams.co.uk/igcse/biology/edexcel/17/topic-questions/" target="_blank" class="btn btn-primary">View More Practice Questions</a>
    </div>
  </section>

  <!-- Exam Preparation Tips -->
  <section class="container mb-8">
    <div class="card-header">
      <h3><i class="fas fa-clipboard-check text-primary mr-2"></i>&nbsp; Exam Preparation Tips</h3>
    </div>
    <div class="card p-6">
      <div class="grid grid-cols-2 gap-6">
        <div>
          <h4 class="mb-3">Effective Revision Strategies</h4>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li><strong>Active recall:</strong> Test yourself regularly rather than just reading notes</li>
            <li><strong>Spaced repetition:</strong> Review material at increasing intervals</li>
            <li><strong>Concept mapping:</strong> Create visual connections between related concepts</li>
            <li><strong>Past papers:</strong> Practice with timed conditions to build exam skills</li>
            <li><strong>Teach others:</strong> Explaining concepts helps solidify understanding</li>
            <li><strong>Use mnemonics:</strong> Create memory aids for complex sequences</li>
            <li><strong>Practice diagrams:</strong> Redraw key biological diagrams from memory</li>
          </ul>
        </div>
        <div>
          <h4 class="mb-3">Common Exam Pitfalls to Avoid</h4>
          <ul style="list-style-type: disc; margin-left: 20px;">
            <li><strong>Misreading questions:</strong> Underline key command words (describe, explain, compare)</li>
            <li><strong>Insufficient detail:</strong> Include specific examples and precise terminology</li>
            <li><strong>Poor time management:</strong> Allocate time based on mark allocation</li>
            <li><strong>Skipping calculations:</strong> Show all working for mathematical questions</li>
            <li><strong>Confusing similar terms:</strong> Be precise with scientific vocabulary</li>
            <li><strong>Overlooking units:</strong> Always include appropriate units with numerical answers</li>
            <li><strong>Ignoring mark schemes:</strong> Use them to understand what examiners want</li>
          </ul>
        </div>
      </div>
      
      <div class="mt-6">
        <h4 class="mb-3">Command Words and their Definitions</h4>
        <div class="grid grid-cols-3 gap-3">
          <div class="card border p-3 rounded">
            <p class="font-bold">Describe</p>
            <p class="text-sm">Give an account of something without explaining why or how</p>
          </div>
          <div class="card border p-3 rounded">
            <p class="font-bold">Explain</p>
            <p class="text-sm">Give reasons or mechanisms behind a process or observation</p>
          </div>
          <div class="card border p-3 rounded">
            <p class="font-bold">Compare</p>
            <p class="text-sm">Identify similarities and differences between things</p>
          </div>
          <div class="card border p-3 rounded">
            <p class="font-bold">Calculate</p>
            <p class="text-sm">Work out a numerical answer, showing working</p>
          </div>
          <div class="card border p-3 rounded">
            <p class="font-bold">Suggest</p>
            <p class="text-sm">Apply knowledge to a new situation or propose a hypothesis</p>
          </div>
          <div class="card border p-3 rounded">
            <p class="font-bold">Evaluate</p>
            <p class="text-sm">Consider different aspects and come to a conclusion</p>
          </div>
        </div>
      </div>
      
      <div class="alert alert-success mt-6 p-4">
        <h4 class="mb-2">Final Tips for Success</h4>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li>Create a realistic revision timetable covering all topics</li>
          <li>Focus on weaker areas while maintaining knowledge of stronger ones</li>
          <li>Use diagrams and visual aids when revising complex processes</li>
          <li>Practice applying knowledge to unfamiliar contexts</li>
          <li>Develop a strategy for multiple-choice questions</li>
          <li>Learn to interpret data from graphs, tables, and experimental results</li>
          <li>Get proper rest, nutrition, and exercise before exams</li>
        </ul>
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
  </script>

</body>
</html>