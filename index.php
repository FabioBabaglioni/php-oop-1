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

        public function getAllMovie(){
            return "Titolo: " . $this -> title . "<br>" . " Genere: " . $this -> genre . "<br>" . " Regista: " . $this -> director;
        }
    }

    $movie1 = new Movie("Cado dalle nubi", "Commedia", "Checco Zalone");

    echo $movie1 -> getAllMovie();
?>