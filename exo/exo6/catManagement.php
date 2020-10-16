<?php 

class CatManagement {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=cat', 'root');
    }

    public function getCat():array {
        $query = $this->db->query("
        SELECT * FROM chat");
        $cat = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach($cat as $key => $value){
            $cat[$key] = new Cat($value);
        }
        return $cat;
    }

    public function addCAt(Cat $data) {
        $query = $this->db->prepare("
        INSERT INTO chat (name, age, sexe, color)
        VALUES (:name, :age, :sexe, :color)");

        $result = $query->execute([
            "name"=>$data->getName(),
            "age"=>$data->getAge(),
            "sexe"=>$data->getSexe(),
            "color"=>$data->getColor()
        ]);
        return $result;
    }
}