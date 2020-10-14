<?php 

class Student {

    const MAX = 20;

    public string $firstname;
    public int $age;
    protected string $id;
    public static $base;

    public function __construct(?string $firstname = null, ?int $age = null) {
        self::$base = "12";
        $this->firstname = $firstname;
        $this->age = $age;
    }

    public function setId(string $id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }

    public static function setBase(string $base_int){
        if(intval($base_int) < self::MAX){
            self::$base = $base_int;
        }
    }
}

