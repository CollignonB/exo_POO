<?php

include "clio.php";

$clio1 = new Clio();
$clio2 = new Clio();
Clio::setPrice(2000);

$clio1->setNbDoors(3);
$clio1->setColor("fauve");


$clio2->setNbDoors(5);
$clio2->setColor("bleu");

// var_dump($clio1);

echo "Clio " . $clio1->getNbDoors() . " portes, " . $clio1->getColor() . ", " . Clio::getPrice() . "€</br>";
echo "Clio " . $clio2->getNbDoors() . " portes, " . $clio2->getColor() . ", " . Clio::getPrice() . "€</br>";