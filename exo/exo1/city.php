<?php

class City {
    protected string $nom;
    protected string $departement;

    public function setNom(string $nom){
        $this->nom = $nom;
    }
    public function getNom(){
        return $this->nom;
    }
    
    public function setDepartement(string $departement){
        $this->departement = $departement;
    }
    public function getDepartement(){
        return $this->departement;
    }

    public function showLocation() {
        echo "La ville " . $this->getNom() . " est dans le département " . $this->getDepartement() . "</br>";
    }
}