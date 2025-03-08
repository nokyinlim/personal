<?php

function generate_greet_message() {
    $hour = date('H');
    if ($hour < 12) {
        return "Good morning!";
    } elseif ($hour < 18) {
        return "Good afternoon!";
    } else {
        return "Good evening!";
    }
}

function generate_welcome_message() {
    $message = [
      "Welcome back, ",
      "Hello, ",
      "Hi, ",
      "Hey, ",
      "Stop procrastinating, ",
      "What's up, ",
      "Good to see you, ",
      "Nice to see you, ",
      "Great to see you, ",
      "Welcome, ",
      "Greetings, ",
      "Greetings and Salutations, ",
      "Salutations, ",
      "Howdy, ",
      "Enough reels for today, ",
      "Stop scrolling, ",
    ];

    echo $message[array_rand($message)];
}

function generate_passive_aggressive_subtitle() {
    $message = [
      "Your personal workspace for productivity, learning, and organization",
      "Your personal workspace for procrastination, laziness, and disorganization",
      "Your personal workspace for productivity, learning, and organization (or lack thereof)",
      "Your personal workspace for pretending to be busy",
      "Your personal workspace for avoiding real work",
      "Your personal workspace for staring at the screen blankly",
      "Your personal workspace for endless coffee breaks",
      "Your personal workspace for browsing memes",
      "Your personal workspace for daydreaming about vacations",
      "Your personal workspace for counting down to the weekend",
      "Your personal workspace for wondering what you did all day",
      "Your personal workspace for questioning your life choices",
      "Your personal workspace for pretending to be productive",
      "Your personal workspace for making to-do lists you'll never complete",
      "Your personal workspace for organizing your disorganization",
      "Your personal workspace for finding new ways to procrastinate",
      "Your personal workspace for achieving minimal effort",
      "Your personal workspace for looking busy while doing nothing"
    ];

    echo $message[array_rand($message)];
}