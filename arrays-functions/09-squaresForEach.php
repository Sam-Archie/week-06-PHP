<?php

require __DIR__ . "/vendor/autoload.php";


function squares($arrayOfNums){
    $squaredNumbers = [];
    foreach ($arrayOfNums as $value) {
        $squared = $value * $value;
        array_push($squaredNumbers, $squared);
    }
    return $squaredNumbers;
}

dump(
    squares([2, 3, 4]), // [4, 9, 16]
    squares([2, 3, 4, 5, 6]), // [4, 9, 16, 25, 36]
);