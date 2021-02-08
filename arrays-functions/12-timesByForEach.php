<?php

require __DIR__ . "/vendor/autoload.php";

function timesBy($arr, $num) {
    $multiplied = [];
    foreach($arr as $value) {
        $result = $value * $num;
        array_push($multiplied, $result);
    }
    return $multiplied;
}

dump(
    timesBy([2, 3, 4, 5, 6], 10), // [20, 30, 40, 50, 60]
    timesBy([2, 3, 4], 5), // [10, 15, 20]
    timesBy([2, 3, 4, 5, 6, 7], -5), // [-10, -15, -20, -25, -30, -35]
    timesBy([-3, -4, -5, -6], -5), // [15, 20, 25, 30]
);