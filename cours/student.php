<?php 

class Student {
    public string $firstname;
    public int $age;
    protected string $id;

    public function __construct(?string $firstname = null, ?int $age = null) {
        $this->firstname = $firstname;
        $this->age = $age;
    }

    public function setId(string $id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
}

