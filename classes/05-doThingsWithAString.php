<?php

require __DIR__ . "/vendor/autoload.php";

class Stringy
{
    private $string;
    private $repeated = "";
    public function __construct($string)
    {
        $this->string = $string;
    }

    public function lower()
    {
        return strtolower($this->string);
    }

    public function upper()
    {
        return strtoupper($this->string);
    }

    public function append($string)
    {
        return "{$this->string}{$string}";
    }

    public function repeat($value)
    {
        for($i = 0; $i < $value; $i += 1)
        {
           $this->repeated .= $this->string;
        }
        return $this->repeated;
    }
}

$string = new Stringy("Na");

// it can lowercase a string
dump($string->lower()); // "na"

// it can uppercase a string
dump($string->upper()); // "NA"

// it can concatenate
dump($string->append("blah")); // "Nablah"

// it can repeat a string
dump($string->repeat(5)); // "NaNaNaNaNa"