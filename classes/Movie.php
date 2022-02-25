<?php
class Movie {
    private $title;
    private $genre;
    private $year;

    public function __construct($_title, $_genre){
        $this->title = $_title;
        $this->genre = $_genre;
    }

    public function getYear(){
        return $this->year;
    }

    public function setyear($_year){
        $this->year = $_year;
    }
}