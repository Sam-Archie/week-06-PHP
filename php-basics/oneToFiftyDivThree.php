<?php

require __DIR__ . "/vendor/autoload.php";

for ($i = 1; $i <= 50; $i += 1) {
    $i % 3 ? : dump($i);
}
