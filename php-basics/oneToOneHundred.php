<?php

require __DIR__ . "/vendor/autoload.php";

$number = 0;

for ($i = 0; $i < 100; $i += 1) {
    $number += 1;
    dump($number);
};