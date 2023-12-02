<?php

$rows = file_get_contents('values.txt');
$rows = explode("\n", $rows);
$total = 0;

$number_map = [
    'one' => 'o1e',
    'two' => 't2o',
    'three' => 't3e',
    'four' => 'f4r',
    'five' => 'f5e',
    'six' => 's6x',
    'seven' => 's7n',
    'eight' => 'e8t',
    'nine' => 'n9e',
];


foreach($rows as $row) {

    # Convert all string numbers to integers
    $row = str_replace(array_keys($number_map), array_values($number_map), $row);

    # Find the first number
    echo "Row: $row\n";
    preg_match_all('/\d/', $row, $matches);

    $first = $matches[0][0] ?? '0';
    $last = count($matches[0]) > 1 ? end($matches[0]) : $first;

    echo "First number: $first\n";
    echo "Last number: $last\n";

    # Add the first and last number
    $number = (int) $first . $last;
    echo "Number: $number\n";

    # Add the number to the total
    $total += $number;
    echo "Running Total: $total\n\n";
    echo "------------------------\n";
}

echo "Total: $total\n";
echo "------------------------\n";