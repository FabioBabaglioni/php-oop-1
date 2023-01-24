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
            return "Titolo: " . $this -> title . "<br>" . " Genere: " . $this -> genre . "<br>" . " Regista: " . $this -> director . "<br><br>";
        }
    }

    $movie1 = new Movie("Cado dalle nubi", "Commedia", "Checco Zalone");
    $movie2 = new Movie("Tre uomini e una gamba", "Commedia", "Aldo, Giovanni e Giacomo");


    echo $movie1 -> getAllMovie();
    echo $movie2 -> getAllMovie();

?>