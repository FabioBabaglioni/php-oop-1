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

        // funzione per ritornare i dati da stampare in pagina 
        public function getAllMovie(){
            return "Titolo: " . $this -> title . "<br>" . " Genere: " . $this -> genre . "<br>" . " Regista: " . $this -> director . "<br><br>";
        }
    }

    // creo un array per istanziare nuovi film 
    $movies= [
            new movie("Cado dalle nubi", "Commedia", "Checco Zalone"), 
            new movie("Tre uomini e una gamba", "Commedia", "Aldo, Giovanni e Giacomo"),
            new movie("Titanic", "Romantico", "James Cameron")
        ];

    // creo il ciclo che mi va a tampare a video i dati richiamando la funzione 
    foreach($movies as $movie) {
        echo $movie -> getAllMovie();
    }
    
?>