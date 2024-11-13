<?php

class Realisateur extends Personne {
    private array $films;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance){
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->films = [];
    }
    
    // FONCTIONS //
    public function addFilm(Film $film){
        $this->films[] = $film;
    }

    public function afficherFilmographie(){
        $result = "<h2>Films réalisé par $this :</h2>";

        foreach($this->films as $film){
            $result .= $film."<br>";
        }
        return $result;
    }

}