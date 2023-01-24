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

    $movies= [new movie("Cado dalle nubi", "Commedia", "Checco Zalone"), 
            new movie("Tre uomini e una gamba", "Commedia", "Aldo, Giovanni e Giacomo")
        ];

    foreach($movies as $movie) {
        echo $movie->getAllMovie();
    }
    
?>