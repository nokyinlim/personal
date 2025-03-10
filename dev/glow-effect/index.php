<?php include '../../components/navbar.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Glow Effects</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <?php create_navbar(0, 'glow-effect/index.php', 'Developer', true) ?>
    <div class="container mt-8">
        <h1>Card Glow Effects</h1>
        <p class="text-lg">Move your cursor over the cards below to see the glow effect in action.</p>
        
        <div class="grid grid-cols-3 gap-4 mt-6">
            <!-- Basic glow card -->
            <div class="card cursor-glow-alt glow-primary">
                <h3>Primary Glow</h3>
                <p>Move your cursor over this card to see the primary blue glow effect follow your mouse.</p>
            </div>
            
            <!-- Success glow card -->
            <div class="card cursor-glow-alt glow-success">
                <h3>Success Glow</h3>
                <p>This card has a green success glow that follows your mouse position.</p>
            </div>
            
            <!-- Warning glow card -->
            <div class="card cursor-glow-alt glow-warning">
                <h3>Warning Glow</h3>
                <p>This card has an amber warning glow that follows your mouse position.</p>
            </div>
            
            <!-- Error glow card -->
            <div class="card cursor-glow-alt glow-error">
                <h3>Error Glow</h3>
                <p>This card has a red error glow that follows your mouse position.</p>
            </div>
            
            <!-- Purple glow card -->
            <div class="card cursor-glow-alt glow-purple">
                <h3>Purple Glow</h3>
                <p>This card has a purple glow that follows your mouse position.</p>
            </div>
            
            <!-- Original cursor glow for comparison -->
            <div class="card cursor-glow">
                <h3>Original Cursor Glow</h3>
                <p>This is the original cursor glow effect for comparison.</p>
            </div>
        </div>
    </div>
    
    <script src="../../glow-effect.js"></script>
</body>
</html>