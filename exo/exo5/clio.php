<?php 
class Clio {
    const DOORS = [3, 5];

    protected int $nb_doors;
    protected string $color;

    protected static int $price;
    protected static $poossible_color = [
        "bleu" => "00021",
        "rouge" => "00210",
        "rose" => "000211",
        "violet" => "02101",
        "vert" => "00112",
        "pourpre" => "02111",
        "cyan" => "01002",
        "fauve" => "01021"
    ];
    
    public function setNbDoors(int $nb_doors){
        if(in_array($nb_doors, self::DOORS)){
            $this->nb_doors = $nb_doors;
        }
    }

    public function getNbDoors(){
        return $this->nb_doors;
    }

    public function setColor(string $color){
        if(in_array($color, array_keys(self::$poossible_color))){
            $this->color = self::$poossible_color[$color];
        }
    }

    public function getColor(){
        return $this->color;
    }

    public static function setPrice(int $price){
        self::$price = $price;
    }

    public static function getPrice(){
        return self::$price;
    }
}