<?php

    class Movie{

        public $title;
        public $genre;
        public $director;

        public function __construct($title, $genre, $director)
        {
            $this -> title = $title;
            $this -> genre = $genre;
            $this->director = $director;
        }
    }

    $movie1 = new Movie("Cado dalle nubi", "Commedia", "Checco Zalone");
    
    var_dump($movie1)
?>