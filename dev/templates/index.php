<?php include '../../components/navbar.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note Templates</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <?php create_navbar(0, 'templates / index.php', 'Developer', true) ?>
    <div class="container mt-8">
        <h1>Note Templates</h1>
        <p class="text-lg">Preset formats for displaying notes. Choose a template to match your content style.</p>
        
        <div class="grid grid-cols-1 gap-4 mt-6">
            <!-- Plain Text Template -->
            <div class="card cursor-glow-alt glow-primary">
                <h3>Text-Only Note</h3>
                <p>Simple plain text note for quick ideas and reminders.</p>
            </div>
            <!-- Image-based Note Template -->
            <div class="card cursor-glow-alt glow-teal">
                <h3>Note with Image</h3>
                <img width="525" height="350" src="https://plus.unsplash.com/premium_photo-1709579654090-3f3ca8f8416b?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8bmF0dXJlJTIwbGFuZHNjYXBlfGVufDB8fDB8fHww" alt="Nature image" class="mt-4 rounded border p-3 shadow-lg main-image" style="border-color:black; opacity:95%;">
                <p class="text-muted mt-4">Photo by <a href="https://unsplash.com/photos/7CvFq7JZz00" class="text-primary">John Doe</a></p>
            </div>
            <!-- Bullet List Template -->
            <div class="card cursor-glow-alt glow-success">
                <h3>Bullet List Note</h3>
                <ul class="mt-4">
                    <li>First point</li>
                    <li>Second point</li>
                    <li>Third point</li>
                </ul>
            </div>
            <!-- Checklist Template -->
            <div class="card cursor-glow-alt glow-warning">
                <h3>Checklist Note</h3>
                <ul class="mt-4">
                    <li><input type="checkbox" disabled> Task 1</li>
                    <li><input type="checkbox" disabled> Task 2</li>
                    <li><input type="checkbox" disabled> Task 3</li>
                </ul>
            </div>
            <!-- Quote Template -->
            <div class="card cursor-glow-alt glow-purple">
                <h3>Quote Note</h3>
                <blockquote class="mt-4" style="font-style: italic;">
                    "The only limit to our realization of tomorrow is our doubts of today."
                </blockquote>
                <p class="mt-2 text-right">- Franklin D. Roosevelt</p>
            </div>
            <!-- Code Note Template -->
            <div class="card cursor-glow-alt glow-orange">
                <h3>Code Note</h3>
                <pre class="mt-4" style="background-color:#f4f4f5; color:black; padding:var(--spacing-2); border-radius: var(--radius-md);">
export default function Home() {
  return (
    <?php echo htmlspecialchars("<div>");?><?php echo "<br>"?>
      <?php echo htmlspecialchars("<button onClick={() => {"); ?><?php echo "<br>"?>
        'use php';
        &lt;?php echo 'Hello, World!'; ?>
      <?php echo htmlspecialchars("}}"); ?><?php echo "<br>"?>
    <?php echo htmlspecialchars("</div>");?><?php echo "<br>"?>
  )
}</pre>
            </div>

            <!-- Code Note Template -->
            <div class="card cursor-glow-alt glow-orange">
                <h3>Code Note</h3>
                <pre class="mt-4" style="background-color:#f4f4f5; color:black; padding:var(--spacing-2); border-radius: var(--radius-md);">
<?php echo htmlspecialchars('<div class="card cursor-glow-alt glow-orange">'); ?><?php echo "<br>"?>
  <?php echo htmlspecialchars('<h3>Code Note</h3>'); ?><?php echo "<br>"?>
  <?php echo htmlspecialchars('<pre class="mt-4" style="background-color:#f4f4f5; color:black; padding:var(--spacing-2); border-radius: var(--radius-md);">'); ?><?php echo "<br>"?>
    export default function Home() {
      return (
        <?php echo htmlspecialchars("<div>");?><?php echo "<br>"?>
          <?php echo htmlspecialchars("<button onClick={() => {"); ?><?php echo "<br>"?>
            'use php';
            &lt;?php echo <?php echo htmlspecialchars('\'<p>Hello, World!</p>\''); ?><?php echo "<br>"?>
          <?php echo htmlspecialchars("}}"); ?><?php echo "<br>"?>
        <?php echo htmlspecialchars("</div>");?><?php echo "<br>"?>
      )
    }
  <?php echo htmlspecialchars('</pre>'); ?><?php echo "<br>"?>
<?php echo htmlspecialchars('</div>'); ?>
</pre>

            </div>
        </div>
    </div>
    
    <?php include '../../components/footer.php'; footer(); ?>
    <script src="../../glow-effect.js"></script>
</body>
</html>