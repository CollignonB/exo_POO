<?php 

include "person.php";
$data = array('nom' => "Durden", 'prenom' => "Tyler", 'adresse' => "2 Mayhem street");
$person = new Person ($data);

// var_dump($person);
$person->getCoord();