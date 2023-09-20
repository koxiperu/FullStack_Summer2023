<?php
//Class movie is an entity. A class representing an element in the database. In this case Movie. This does not represent the table movies but rather one element of the table movies.
class Movie
{
    public $id;
    public $name;
    public $release_date;
    public $director;

    public function __toString()
    {
        return 'Name: ' .$this->name .'<br> Director: ' .$this->director. '<br>';
    }
}

?>