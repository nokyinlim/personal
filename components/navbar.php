<?php

function create_navbar(int $selected, string $title = 'Personal Dashboard', string $currentUsername = '', bool $dev = false) {
  /*
    * <header class="container">
      <nav class="nav">
          <ul class="nav-list">
              <h1 class="text-xl font-bold nav-item">Personal Dashboard</h1>
              <li class="nav-item"><a href="#" class="active">Home</a></li>
              <li class="nav-item"><a href="#productivity">Productivity</a></li>
              <li class="nav-item"><a href="/academic">Academic</a></li>
              <li class="nav-item"><a href="#utilities">Utilities</a></li>
          </ul>
          
          <div class="nav-right">
              <span class="text-muted mr-2">Welcome, <?php echo htmlspecialchars($currentUser['username']); ?></span>
              <a href="account.php" class="btn btn-sm btn-secondary">
                  <i class="fas fa-user"></i> Account
              </a>
              <a href="logout.php" class="btn btn-sm btn-outline"><i class="fas fa-sign-out-alt"></i> Logout</a>
          </div>
      </nav>
    </header>
    */

  $nav_items = [
    'Home' => '/',
    'Productivity' => '/productivity',
    'Academic' => '/academic',
    'Utilities' => '/utilities'
  ];
  if ($dev) {
    echo '<header class="container">';
    echo '<nav class="nav">';
    echo '<div class="flex justify-between items-center">';
    echo '<ul class="nav-list">';
    echo "<h1 class='text-xl font-bold nav-item'><span class='text-sm text-muted font-bold'>DEV</span>&nbsp;/&nbsp;" . htmlspecialchars($title) . "</h1>";
    echo '<li class="nav-item"><span class="text-sm text-muted btn-sm">You are on a Developer page!</span></li>';
    echo '</ul>';
    echo '</div>';
    echo '<div class="nav-right">';
    echo '<a href="/account.php" class="btn btn-sm btn-secondary">';
    echo '<i class="fas fa-user"></i>&nbsp;Account';
    echo '</a>';
    echo '<a href="/logout.php" class="btn btn-sm btn-outline"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>';
    echo '</div>';
    echo '</nav>';
    echo '</header>';
  } else {
    echo '<header class="container">';
    echo '<nav class="nav">';
    echo '<div class="flex justify-between items-center">';
    echo '<ul class="nav-list">';
    echo "<h1 class='text-xl font-bold nav-item'>" . htmlspecialchars($title) . "</h1>";
    foreach ($nav_items as $item => $url) {
        $active = $selected === array_search($item, array_keys($nav_items)) ? 'active' : '';
        echo "<li class='nav-item'><a href='$url' class='$active'>$item</a></li>";
    }
    echo '</ul>';
    echo '</div>';
    echo '<div class="nav-right">';
    if ($currentUsername) { 
        echo '<span class="text-muted mr-2">Welcome, ' . htmlspecialchars($currentUsername) . '!</span>';
    } else {
        echo '<span class="text-muted mr-2">Welcome!</span>';
    }
    echo '<a href="/account.php" class="btn btn-sm btn-secondary">';
    echo '<i class="fas fa-user"></i>&nbsp;Account';
    echo '</a>';
    echo '<a href="/logout.php" class="btn btn-sm btn-outline"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>';
    echo '</div>';
    echo '</nav>';
    echo '</header>';
  };
}

?>