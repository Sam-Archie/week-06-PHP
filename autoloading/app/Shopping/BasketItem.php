<?php


namespace App\Shopping;

class BasketItem
{
    private string $type;
    private float $price;
    public function __construct(string $type, int $price)
    {
        $this->type = $type;
        $this->price = $price;
    }
    public function type() : string 
    {
        return $this->type;
    }
    public function price() : int
    {
        return $this->price;
    }
    public function priceFormatted() : string
    {
       return "£" . number_format($this->price, 2);
    }
}