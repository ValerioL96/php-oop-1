<?php

class Movie{

    public $title;
    public $year;
    public $time;

    function __construct($_title, $_year, $_time) {
        $this->title = $_title;
        $this->year = $_year;
        $this->time = $_time;
    }

    public function getMovie(){
        return self:: $title;
        return self:: $year;
        return self:: $time;
    }

}