<?php 

class Cat {
    
    const SEXE = [
        "male",
        "female"
    ];
    const COLOR = [
        "black",
        "white",
        "red",
        "brown"
    ];
    protected $name;
    protected $age;
    protected $sexe;
    protected $color;

    public function getSexe() {
        return $this->sexe;
    }
    public function getColor() {
        return $this->color;
    }
    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }

    public function setName(string $name){
        if (strlen($name)<= 15 ){
            $this->name = $name;
        } else {
            echo "le nom doit faire moins de 15 caractères";
        }
    }
    public function setAge(int $age){
        if ($age < 30 && $age >0){
            $this->age = $age;
        }else{
            echo " l'age doit être compris entre 0 et 30 ans";
        }
    }
    public function setSexe(string $sexe){
        if(in_array($sexe, self::SEXE)){
            $this->sexe = $sexe;
        }
    }
    public function setColor(string $color){
        if(in_array($color, self::COLOR)){
            $this->color = $color;
        }
    }

    private function hydrate(array $data){
        foreach($data as $key => $value){
            $method = "set" .ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    public function __construct(array $data) {
        $this->hydrate($data);
    }
}