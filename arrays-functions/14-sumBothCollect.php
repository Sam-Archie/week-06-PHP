<?php

require __DIR__ . "/vendor/autoload.php";

function sumBoth($arrOne, $arrTwo) {
    $sumOne = collect($arrOne)->reduce(fn($acc, $current) => 
        $acc + $current
    , 0);
    $sumTwo = collect($arrTwo)->reduce(fn($acc, $current) => 
        $acc + $current
    , 0);
    return $sumOne + $sumTwo;
}

dump(
    sumBoth([2, 3, 4, 5, 6], [1, 2, 3, 4]), // 30
    sumBoth([2, 3, 4, 5, 6], [5, 10, 12]), // 47
);