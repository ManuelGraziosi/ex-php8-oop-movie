<?php

class Movie
{
    use HasTimestap;
    protected $title;
    protected $description;
    protected $year;

    protected array $genre = [];

    public function __construct($_title, $_description, $_year, Genre $_genre)
    {
        $this->title = $_title;
        $this->description = $_description;
        $this->year = $_year;
        $this->genre[] = $_genre;

        $this->initTimestamps();


    }

    public function setTitle($_title)
    {
        $this->title = $_title;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setDescription($_description)
    {
        $this->description = $_description;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setYear($_year)
    {
        $this->year = $_year;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function addGenre($_genre)
    {
        $this->genre[] = $_genre;
    }

}