<?php
class Student
{
  protected string $name;
  protected int $age;

  public function setName(string $name) {
    if(strlen($name)>=2){
        $this->name = $name;
    }else{
        throw new Exception("Le nom doit comporter au moins 2 caratères", 1);
    }
  }
  public function setAge(string $age) {
    if($age > 16 && $age < 70){
        $this->age = $age;
    }else {
        throw new Exception("l'age doit être en 16 et 70 ans", 1);
    }

}
}