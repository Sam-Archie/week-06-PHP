<?php

require __DIR__ . "/vendor/autoload.php";

class Address
{
    private string $town;
    private string $postcode;
    private string $street;

    public function __construct(string $street, string $town, string $postcode)
    {
        $this->street = $street;
        $this->town = $town;
        $this->postcode = $postcode;
    }

    public function setStreet($street) : void
    {
        $this->street = $street;
    }
    public function setPostcode($postcode) : void
    {
        $this->postcode = $postcode;
    }
    public function setTown($town) : void
    {
        $this->town = $town;
    }
    public function fullAddress() : string
    {
        return "{$this->street}, {$this->town}, {$this->postcode}";
    }
}

$address = new Address("1 Made Up Street", "BS4 8TR", "Bristol");

// logs the full address neatly
dump($address->fullAddress()); // "1 Made Up Street, Bristol, BS4 8TR"

// can update the street, postcode, and town
$address->setStreet("12 Cantelope Way");
$address->setPostcode("SW5 8RQ");
$address->setTown("Swansea");

// logs the new full address neatly
dump($address->fullAddress()); // "12 Cantelope Way, Swansea, SW5 8RQ"