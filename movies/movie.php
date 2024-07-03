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

    public function getTitle(){
        return $this->$title;
    }

    public function getYear(){
        return $this->$year;
    }

    public function getTime(){
        return $this->time;
    }

}