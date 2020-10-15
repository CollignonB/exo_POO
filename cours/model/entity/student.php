<?php 

class Student {

    const MAX = 20;

    protected $firstname;
    protected $age;
    protected $id;

    public static $base;

    public function __construct(array $data) {
        $this->hydrate($data);

        self::$base = "12";
    }

    public function setId(string $id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }

    public function setFirstname(string $firstname){
        $this->firstname = $firstname;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function setAge(int $age){
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public static function setBase(string $base_int){
        if(intval($base_int) < self::MAX){
            self::$base = $base_int;
        }
    }

    private function hydrate(array $data){
        foreach ($data as $key => $value){
            $method = "set" . ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }
}

