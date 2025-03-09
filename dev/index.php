<?php include '../components/navbar.php'; include 'glow-effect/colors.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Homepage</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <?php create_navbar(0, 'index.php', 'Developer', true) ?>
    <div class="container mt-8">
        <h1>Developer Homepage</h1>
        <p class="text-muted">A dashboard of all the upcoming resources and projects under development.</p>
        <p class="text-muted">This contains temporary, work in progress, experimental, and prototype resources.</p>
        <p class="text-muted">These resources are not yet ready for production or public use. There may be hidden insects, mosquitos or bugs.</p>
        <p class="text-muted">Expect these to be unpolished. They can be removed at any moment without notice.</p>
        <p class="text-muted">Select a resource type below to get started.</p>
        
        <div class="grid grid-cols-3 gap-4 mt-6">
            <!-- Glow Effects -->
            <div class="card cursor-glow-alt cursor-glow-alt-large <?php echo getRandomGlowClass(); ?>">
                <h3>Glow Effects</h3>
                <a class="btn btn-outline" href="/dev/glow-effect">Open</a>
            </div>

            <div class="card cursor-glow-alt cursor-glow-alt-large <?php echo getRandomGlowClass(); ?>">
                <h3>Note Templates</h3>
                <a class="btn btn-outline" href="/dev/templates">Open</a>
            </div>

            <div class="card cursor-glow-alt cursor-glow-alt-large <?php echo getRandomGlowClass(); ?>">
                <h3>Activities</h3>
                <a class="btn btn-outline" href="/dev/activities">Open</a>
            </div>


            
        </div>
    </div>
    
    <script src="/glow-effect.js"></script>
</body>
</html>