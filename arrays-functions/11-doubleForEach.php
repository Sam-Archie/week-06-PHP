<?php

require __DIR__ . "/vendor/autoload.php";

function double($arrayOfNums) {
    $doubled = [];
    foreach($arrayOfNums as $number) {
        $double = $number * 2;
        array_push($doubled, $double);
    }
    return $doubled;
}

dump(
    double([2, 3, 4, 5, 6]), // [4, 6, 8, 10, 12]
    double([1, 2, 5]), // [2, 4, 10]
);