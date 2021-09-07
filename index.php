<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Movie{
    public $titolo;
    public $genere;
    public $lista_best_movies = 'non in lista';
    

    function __construct($_titolo, $_genere){
        $this->titolo = $_titolo;
        $this->genere = $_genere;
    }

    public function setRating($rating){
        if($rating >= 4){
            $this->lista_best_movies = 'best movies';
        }
    }

    public function getRating(){
        return $this->lista_best_movies;
    }

}

$lotr = new Movie('Il signore degli Anelli','fantasy');
$lotr->setRating(5);
var_dump($lotr);

$sharknado = new Movie('Sharknado','azione');
$sharknado->setRating(0);
var_dump($sharknado);

$Carol = new Movie('Carol','romantico,drammatico');
$Carol->setRating(5);
var_dump($Carol);

$harry_potter = new Movie('Harry Potter','fantasy');
$harry_potter->setRating(4);
var_dump($harry_potter);
