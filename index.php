<?php
    class Movie{
        private $titolo;
        private $durata;

        function __construct(int $_durata, string $_titolo ) {
            $this->durata = $_durata ;
            $this->titolo = $_titolo ;

        }
        
        function setTitle($_title){
            $this->titolo = $_title;
        }
        function getTitle($_title){
            return $this->$_title;
        }

    }

$thebatman = new Movie(176, "The Batmana");


$bulletTrain= new Movie(127, "Bullet Train");


var_dump($thebatman);