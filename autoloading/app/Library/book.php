<?php

namespace App\Library;

class Book 
{
    private $pages;
    private $title;
    private $atPage = 1;
    public function __construct($title, $pages)
    {
        $this->pages = $pages;
        $this->title = $title;
    }
    public function read($noOfPages)
    {
        $this->atPage += $noOfPages;
    }
    public function currentPage()
    {
        return $this->atPage;
    }
}