<?php

namespace App\Stuff\Things;

class Potato {

    private int $waterCount = 0;
    private bool $hasGrown = false;

    public function water() : void
    {
        $this->waterCount += 1;
    }

    public function hasGrown() : bool
    {
        return $this->waterCount < 5 ? false : true;
    }

}