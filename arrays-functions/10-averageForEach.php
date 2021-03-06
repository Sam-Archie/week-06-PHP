<?php

require __DIR__ . "/vendor/autoload.php";

function average($arrOfNums) {
    $total = 0;
    $count = 0;
    foreach($arrOfNums as $num) {
        $total += $num;
        $count ++;
    }
    return $total / $count;
}

dump(
    average([2, 3, 4, 5, 6]), // 4
    average([2, 3]), // 2.5
    average([10, 30]), // 20
    average([-4, -8, -9]), // -7
);