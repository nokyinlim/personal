<?php include '../components/navbar.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Homepage</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <?php create_navbar(0, 'index.php', 'Developer', true) ?>
    <div class="container mt-8">
        <h1>Developer Homepage</h1>
        <p class="text-lg">
          A site for all the inevitable crashes you will face on this journey.
        </p>
        
        <div class="grid grid-cols-3 gap-4 mt-6">
            <!-- Glow Effects -->
            <div class="card cursor-glow-alt glow-primary">
                <h3>Glow Effects</h3>
                <a class="btn btn-outline" href="/dev/glow-effect">Open</a>
            </div>


            
        </div>
    </div>
    
    <script src="../../glow-effect.js"></script>
</body>
</html>