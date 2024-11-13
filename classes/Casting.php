<?php

class Casting {
   private Acteur $acteur;
   private Role $role;
   private Film $film;

   public function __construct(Acteur $acteur, Role $role, Film $film){
    $this->acteur = $acteur;
    $acteur->addCasting($this);
    $this->role = $role;
    $role->addCasting($this);
    $this->film = $film;
    $film->addCasting($this);
   }


   // GETTER & SETTER //
   public function getFilm()
   {
      return $this->film;
   }

   public function setFilm($film)
   {
      $this->film = $film;

      return $this;
   }


   public function getRole()
   {
      return $this->role;
   }

   public function setRole($role)
   {
      $this->role = $role;

      return $this;
   }


   public function getActeur()
   {
      return $this->acteur;
   }

   public function setActeur($acteur)
   {
      $this->acteur = $acteur;

      return $this;
   }
}