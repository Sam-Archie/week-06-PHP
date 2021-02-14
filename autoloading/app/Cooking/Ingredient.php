<?php


namespace App\Cooking;

use Illuminate\Support\Collection;

class Ingredient
{
    private Collection $dietryInfo;
    private string $name;

    public function __construct(string $name, array $dietryInfo)
    {
        $this->dietryInfo = collect($dietryInfo);
        $this->name = $name;
    }

    public function name() : string
    {
        return $this->name;
    }

    public function vegan() : bool
    {
        return !$this->dietryInfo->contains("animal produce");
    }

}