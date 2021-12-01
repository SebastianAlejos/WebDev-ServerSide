<?php

class Teacher{
    private $Teacher_OID;
    private $First_Name;
    private $Last_Name;

    public function __construct($TeacherID){
        global $pdo;
        $sql="SELECT *
              FROM Teacher
              WHERE Teacher_OID = :teacher_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':teacher_id', $TeacherID);
        if ($stmt->execute()===false){
            throw new Exception("Database error. Contact Webmaster.");
        }
        if ($stmt->rowCount()==0) {
            throw new Exception("Teacher $TeacherID not found");
        }
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        foreach ($row as $columnName => $value) {
            $this->$columnName=$value;
        }
    }
    public function __toString(){
        $returnString="";
        foreach (get_object_vars($this) as $variable_name => $value) {
            $returnString.="$variable_name=$value <br>";   
        }
        return $returnString;
    }
}