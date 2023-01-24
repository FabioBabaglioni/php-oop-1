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
?>