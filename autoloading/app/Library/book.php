<?php

namespace App\Library;

class Book 
{
    private int $pages;
    private string $title;
    private int $atPage = 1;
    public function __construct(string $title, int $pages)
    {
        $this->pages = $pages;
        $this->title = $title;
    }
    public function read(int $noOfPages) : void
    {
        $this->atPage += $noOfPages;
    }
    public function currentPage() : int
    {
        return $this->atPage;
    }
}