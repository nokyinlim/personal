<?php

// File is WIP. Do not use.

require 'auth.php';

// A File for configuring how to access, get, modify and update the user's settings

// The defaults can be found as a JSONified string in the database, in table 'users' under column 'settings'

$defaults = [
  'timezone' => 8
];

// Get user settings
function get_setting($setting, $user) {
  
}

?>