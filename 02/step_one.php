<?php

# Game Limits
$red_limit = 12;
$green_limit = 13;
$blue_limit = 14;

# Break the file into lines, filter empty lines
$file = file_get_contents("./games.txt");
$games = explode("\n", $file);
$games = array_filter($games);

# Start the count
$sum = 0;

# Test all games
foreach($games as $game) {
    # Get name and stuff
    list($name, $parts) = explode(":", $game);
    list($name, $id) = explode(" ", $name);

    # Get all our bits
    preg_match_all('/ (\d+) red/', $parts, $red_matches);
    preg_match_all('/ (\d+) green/', $parts, $green_matches);
    preg_match_all('/ (\d+) blue/', $parts, $blue_matches);

    # Return the max value of each
    $red = max($red_matches[1]);
    $green = max($green_matches[1]);
    $blue = max($blue_matches[1]);

    # Check if the max value is greater than the limit
    if ($red > $red_limit || $green > $green_limit || $blue > $blue_limit) {
        continue;
    }

    # If we get here, we're good
    $sum += $id;
}

# Print the sum
echo $sum;

