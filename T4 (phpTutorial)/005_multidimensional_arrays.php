<?php

$matrix = [ 
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

foreach ($matrix as $i) {
    $sum = 0;

    foreach ($i as $y) {
        $sum= $sum + $y;
    }
    echo "{$sum}\n";
}
?>

