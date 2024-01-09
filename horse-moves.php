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

    if ($new_x < 7 && $new_x >= 0 && $new_y < 7 && $new_y >= 0) {
        $x = $new_x;
        $y = $new_y;

        $probs[$y][$x] = isset($probs[$y][$x]) ? $probs[$y][$x] + 1 : 1;
    }
}