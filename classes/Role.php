<?php

class Role {
    private string $nomPersonnage;
    private array $castings;

public function __construct(string $nomPersonnage) {
    $this->nomPersonnage = $nomPersonnage;
    $this->castings = [];
}


    // GETTER & SETTER //
    public function getNomPersonnage()
    {
        return $this->nomPersonnage;
    }

    public function setNomPersonnage($nomPersonnage)
    {
        $this->nomPersonnage = $nomPersonnage;

        return $this;
    }

    // FONCTIONS //
    public function addCasting(Casting $casting) {
        $this->castings[] = $casting;
    }

    public function afficherActeur(){
        $result = "<h2>Liste des acteurs pour le rôle de $this :</h2>";

        foreach($this->castings as $casting) {
            $result .= $casting->getActeur()."<br>";
        }
        return $result;
    }

    // TO STRING //
    public function __toString() {
        return $this->nomPersonnage;
    }
}
