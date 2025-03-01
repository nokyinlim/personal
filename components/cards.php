<?php

function subject_card(string $subject_name, string $subject_code, array $links = []) {
  echo '<div class="card shadow-lg shadow-primary border border-gray-300">';
  echo '<h4><i class="fas fa-graduation-cap text-primary mr-2"></i>' . htmlspecialchars($subject_name) . ' [' . htmlspecialchars($subject_code) . ']</h4>';
  echo '<span>';
  
  foreach ($links as $link) {
    echo '<a href="' . htmlspecialchars($link['url']) . '" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">' . htmlspecialchars($link['label']) . '</a>';
  }
  
  echo '</span>';
  echo '</div>';
}



?>