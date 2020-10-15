<?php 

class StudentModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=test', 'root');
    }

    public function getStudents():array {
        $query = $this->db->query("
        SELECT * FROM student");
        $students = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach($students as $key => $value){
            $students[$key] = new Student($value);
        }
        return $students;
    }

    public function addStudent(Student $data):bool {
        $query = $this->db->prepare("
            INSERT INTO student (firstname, age)
            VALUES (:firstname, :age)
        ");

       $result = $query->execute([
            "firstname"=>$data->getFirstname(),
            "age" => $data->getAge()
        ]);
        return $result;
    }
}