<?php
// Motivational Messages for the user

function get_study_session_motivation() {
    $messages = [
        'Keep up the good work!',
        'You got this!',
        'You are doing great!',
        'Stay focused!',
        'Are you even trying?',
        'Do you call this studying?',
        'Maybe take a break, you look tired.',
        'You can do better than this!',
        'Don’t give up now, you’re almost there!',
        'Wow, you’re still here?',
        'Keep going, future you will thank you!',
        'Is that all you’ve got?',
        'You’re on fire! (Not literally, I hope)',
        'Just one more page, you can do it!'
    ];

    echo $messages[array_rand($messages)];
}

function get_study_complete_message() {
    $messages = [
        'Congratulations on finishing your study session!',
        'Great job on completing your study session!',
        'You did it! You finished your study session!',
        'You’re done! Great job!',
        'You’re finished! Time to relax!',
        'You’re done! Time to celebrate!',
        'Keep up the good work!',
        'You got this!',
        'You are doing great!',
        'Stay focused!',
        'Are you even trying?',
        'You can do better than this!',
        'Don’t give up now, you’re almost there!',
        'Nice work! You finished your study session!',
    ];

    echo $messages[array_rand($messages)];
}

function get_create_goal_message() {
    // After the user has started a new goal.

    $messages = [
        'Great job on setting a new goal!',
        'Here\'s to a new chapter in your life!',
        'You’re on your way to achieving great things!',
        'You’re one step closer to your dreams!',
        'Good luck on your new goal!',
        'You better start now. Or else.',
        'You’re going to do great things!',
        'Procrastination won’t get you anywhere, you know that right?'
    ];
}

function get_leave_study_message() {
    // After the user has left the page entirely and quit. (not good!)

    $messages = [
        'You’re leaving already?',
        'You’re giving up already?',
        'Wow, you’re quitting already?',
        'You sure you want to leave?',
        'I guess you’re done for today?',
        'I\'m <em>sure</em> you have better things to do, right?',
        'I\'m disappointed in you.',
        'You’re not going to finish?',
        '99% of <s>gamblers</s> students quit before they win!',
    ];

    echo $messages[array_rand($messages)];
}