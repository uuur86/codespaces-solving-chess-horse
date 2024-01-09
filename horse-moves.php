<?php

$moves = [
    [2,1],
    [2,-1],
    [1,2],
    [1,-2],
    [-1,2],
    [-1,-2],
    [-2,1],
    [-2,-1],
];

$times = 1000;
$x = rand(0, 7);
$y = rand(0, 7);

$probs = [];

for ( $t = 0; $t < $times; $t++ ) {
    $move = rand(0, 7);
    $new_y = $y + (int) $moves[$move][0];
    $new_x = $x + (int) $moves[$move][1];

    if ($new_x >= 8 || $new_x < 0 || $new_y >= 8 || $new_y < 0) {
        $t--;
        continue;
    }

    $x = $new_x;
    $y = $new_y;
    $probs[$y][$x] = isset($probs[$y][$x]) ? $probs[$y][$x] + 1 : 1;
}

for ($y = 0; $y < 8; $y++) {
    echo '|';

    for ($x = 0; $x < 8; $x++) {
        $prob = $probs[$y][$x];

        if ($prob <= 10) {
            echo ' ';
        }
        echo $prob . '|';
    }
    echo "\r\n";
}