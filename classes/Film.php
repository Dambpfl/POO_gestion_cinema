<?php

Class Film {

    private string $titre;
    private int $anneeSortie;
    private int $duree;
    private string $synopsis;
    private Realisateur $realisateur;
    private Genre $genre;
    private array $castings;

    public function __construct(string $titre,int $anneeSortie, int $duree, string $synopsis, Realisateur $realisateur, Genre $genre) {
        $this->titre = $titre;
        $this->anneeSortie = $anneeSortie;
        $this->duree = $duree;
        $this->synopsis = $synopsis;
        $this->realisateur = $realisateur;
        $this->realisateur->addFilm($this);
        $this->genre = $genre;
        $this->genre->addFilm($this);
        $this->castings = [];
    }
    
    
    
    // GETTER & SETTER //

    public function getSynopsis()
    {
        return $this->synopsis;
    }

    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }


    public function getDuree()
    {
        return $this->duree;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }


    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }
    
    
    public function getAnneeSortie()
    {
        return $this->anneeSortie;
    }
    
    public function setAnneeSortie($anneeSortie)
    {
        $this->anneeSortie = $anneeSortie;
    
        return $this;
    }

    // FONCTIONS //
    public function addCasting(Casting $casting){
        $this->castings[] = $casting;
    }

    public function afficherCasting(){
        $result = "<h2>Dans le film : $this</h2>";

        foreach($this->castings as $casting){
            $result .= $casting->getActeur()." a joué le rôle de : ".$casting->getRole()."<br>";
        }
        return $result;
    }

    // TO_STRING //
    public function __toString() {
        return $this->titre." (".$this->anneeSortie.") ";
    }

}