<?php

function create_navbar(int $selected) {
    $nav_items = [
        'Home' => '/',
        'Productivity' => '/productivity',
        'Academic' => '/academic',
        'Utilities' => '/utilities'
    ];

    echo '<header class="container">';
    echo '<nav class="nav">';
    echo '<div class="flex justify-between items-center">';
    echo '<ul class="nav-list">';
    echo '<h1 class="text-xl font-bold nav-item">Knowledge Organizers</h1>';

    foreach ($nav_items as $item => $url) {
        $active = $selected === array_search($item, array_keys($nav_items)) ? 'active' : '';
        echo "<li class='nav-item'><a href='$url' class='$active'>$item</a></li>";
    }

    echo '</ul>';
    echo '</div>';
    echo '</nav>';
    echo '</header>';
}

?>