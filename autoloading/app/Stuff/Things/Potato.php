<?php

namespace App\Stuff\Things;

class Potato {

    private $waterCount = 0;
    private $hasGrown = false;

    public function water() {
        $this->waterCount += 1;
    }

    public function hasGrown() {
        return $this->waterCount < 5 ? false : true;
  
    }

}