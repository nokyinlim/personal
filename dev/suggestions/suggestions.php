<?php

include '../../database.php';

/**
 * Table `suggestions` is used to store suggestions for the user.
 * Columns:
 * - `id` <INTEGER> is the primary key.
 * - `title` <TEXT> is the title of the suggestion.
 * - `description` <TEXT> is the description of the suggestion. Optional
 * - `type` <TEXT> is the type of the suggestion.
 * - `link` <TEXT> is the link (from the root directory) to the suggestion. Optional
 * - `image` <TEXT> is the full link to the image of the suggestion. Optional
 * - `status` <NUMBER> is the status of the suggestion. A range from 0-1, default 1
 *            where 1 is most likely to show up and 0 is not likely to show up.
 * - `source` <TEXT> is a string representing a source for the suggestion. Optional
 * - `date` <DATE> is the date the suggestion was added. Optional, defaults to the current datetime.
 * - `username` <INTEGER> is the username of the user who owns the suggestion.
 */


$db = new Database();

function addSuggestion() {
    global $db;
    
    $stmt = $db->prepare('INSERT INTO suggestions (username, title, description, type, link, image, source) VALUES (?, ?, ?, ?, ?, ?, ?)');
}



