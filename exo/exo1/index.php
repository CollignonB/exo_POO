<?php 

include "city.php";

$city = new City();
$city2 = new City();
$city3 = new City();

$city->setNom("Rouen");
$city2->setNom("Montpellier");
$city3->setNom("Toulouse");

$city->setDepartement("Seine Maritime");
$city2->setDepartement("Hérault");
$city3->setDepartement("Haute-Garonne");


$city->showLocation();
$city2->showLocation();
$city3->showLocation();