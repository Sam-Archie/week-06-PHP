<?php

require __DIR__ . "/vendor/autoload.php";

function stone($weight) {
    $kilos = $weight / 6.35029318;
    return round($kilos, 5);
}

dump(
    stone(74), // 11.65278
    stone(50), // 7.8735
);