<?php

class Genre {
    private string $type;
    private array $films;
    
    
    public function __construct(string $type) {
        $this->type = $type;
        $this->films = [];
    }


    // GETTER & SETTER //
    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    // FONCTIONS //
    public function addFilm(Film $film){
        $this->films[] = $film;
    }

    public function afficherFilms(){
        $result = "<h2>Films de $this :</h2>";

        foreach($this->films as $film){
            $result .= $film."<br>";
        }
        return $result;
    }

    // TO STRING //
    public function __toString(){
        return $this->type;
    }
}