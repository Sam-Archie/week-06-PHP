<?php

require __DIR__ . "/vendor/autoload.php";

function sumBoth($numbersOne, $numbersTwo) {
    $total = 0;
    foreach($numbersOne as $value) {
        $total += $value;
    }
    foreach($numbersTwo as $value) {
        $total += $value;
    }
    return $total;
}

dump(
    sumBoth([2, 3, 4, 5, 6], [1, 2, 3, 4]), // 30
    sumBoth([2, 3, 4, 5, 6], [5, 10, 12]), // 47
);