<?php

class Acteur extends Personne {
    private array $castings;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance){
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->castings = [];
    }
    
    // FONCTIONS //
    public function addCasting(Casting $casting){
        $this->castings[] = $casting;
    }

    public function AfficherFilmographie(){
        $result = "<h2>$this a joué dans :</h2>";

        foreach($this->castings as $casting){
            $result .= $casting->getFilm()."<br>";
        }
        return $result;
    }

    public function AfficherRole(){
        $result = "<h2>$this a joué le rôle de :</h2>";

        foreach($this->castings as $casting){
            $result .= $casting->getRole()."<br>";
        }
        return $result;
    }
}