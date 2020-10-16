<?php 

require "cat.php";
require "catManagement.php";

$catManagement = new CatManagement();

if(isset($_POST["newCat"])){
    $cat = new Cat($_POST);
    $catManagement->addCat($cat);
}

$cats = $catManagement->getCat();

include "indexView.php";