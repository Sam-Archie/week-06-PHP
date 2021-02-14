<?php

require __DIR__ . "/vendor/autoload.php";

class Stringy
{
    private string $string;
    private string $repeated = "";
    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function lower() : string
    {
        return strtolower($this->string);
    }

    public function upper() : string
    {
        return strtoupper($this->string);
    }

    public function append($string) : string
    {
        return "{$this->string}{$string}";
    }

    public function repeat(int $value) : string
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