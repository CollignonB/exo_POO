<?php

class Bird {
    protected string $type;
    protected string $color;
    protected int $age;
    protected array $areas;

    public function __construct(string $type, string $color, int $age, array $areas){
        $this->type = $type;
        $this->color = $color;
        $this->age = $age;
        $this->areas = $areas;
    }

    public function sing() {
        echo "<br>$this->type : Cui cui<br>";
    }

    public function fly(string $destiantion ) {
        if($this->age > 4){
            echo "The bird is flying to " . $destiantion;
        } else {
            echo "This bird is too young to fly";
        }
    }
}