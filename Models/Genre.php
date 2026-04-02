<?php
// definizione di una classe Movie
class Genre
{

    protected $name;
    protected $description;
    //protected $ageRating;

    public function __construct($_name, $_description) //, $_ageRating)
    {
        $this->name = $_name;
        $this->description = $_description;
        //$this->ageRating = $_ageRating;
    }

    public function setName($_name)
    {
        $this->name = $_name;
    }

    public function setDescription($_description)
    {
        $this->description = $_description;
    }

    // public function setAgeRating($_ageRating)
    // {
    //     $this->ageRating = $_ageRating;
    // }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    // public function getAgeRating()
    // {
    //     return $this->ageRating;
    // }

}