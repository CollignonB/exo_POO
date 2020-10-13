<?php 

class Person {
    protected string $nom;
    protected string $prenom;
    protected string $adresse;

    public function __construct(?array $info){
        $this->nom = $info["nom"];
        $this->prenom = $info["prenom"];
        $this->adresse = $info["adresse"];
    }

    public function setNom(string $nom){
        $this->nom = $nom;
    }
    public function getNom(){
        return $this->nom;
    }

    public function setPrenom(string $prenom){
        $this->prenom = $prenom;
    }
    public function getPrenom(){
        return $this->prenom;
    }

    public function setAdresse(string $adresse){
        $this->adresse =$adresse;
    }
    public function getAdresse(){
        return $this->adresse;
    }

    public function getCoord(){
        echo "Je m'appelle " . $this->getPrenom() . " " . $this->getNom() . " et je vis au " . $this->getAdresse();
    }
}