<?php 
// include "bird.php";

// $bird = new Bird("sparrow", "grey", 5, ["europe", "north america", "asia"]);

// var_dump($bird);

// $bird->sing();

// $bird->fly("Mexico");

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~

include "otherBird.php";

$data = [
    "type" => "sparrow",
    "color" => "white",
    "age" => 2,
    "areas" => ["europe", "north america", "asia"],
  ];

$bird = new OtherBird($data);

var_dump($bird);