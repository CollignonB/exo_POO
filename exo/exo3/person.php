<?php 

class Person {
    protected string $nom;
    protected string $prenom;
    protected string $adresse;

    public function __construct(?array $info){
        $this->setNom($info["nom"]);
        $this->setPrenom($info["prenom"]);
        $this->setAdresse($info["adresse"]);
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