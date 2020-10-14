<?php 

include "form.php";

$form = new Form("");
$form->setText("name");
$form->setText("amount");
$form->setSubmit("envoyer", "send");
$form->showForm();