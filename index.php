<?php
    class Movie{
        public $titolo;
        public $durata;

        function __construct($_durata) {
            $this->durata = $_durata ;
        }
    }

$thebatman = new Movie(176);