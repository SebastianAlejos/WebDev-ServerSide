<?php

class Course{
    private $Course_OID;
    private $Course_Name;
    private $Teacher_FK;
    private $Teacher;

    public function __construct($CourseID =-1, $courseData=-1){
        global $pdo;
        if ($CourseID!=-1){
            $sql="SELECT *
              FROM COURSE 
              WHERE Course_OID = :course_id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':course_id', $CourseID);
            if ($stmt->execute()===false){
                throw new Exception("Database error. Contact Webmaster.");
            }
            if ($stmt->rowCount()==0) {
                throw new Exception("Course $CourseID not found");
            }
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
        }
        foreach ($courseData as $columnName => $value) {
            $this->$columnName=$value;
        }
        try {
            $this->Teacher=new Teacher($this->Teacher_FK);
        } catch (Exception $e) {
            echo "error". $e.getMessage();
        }
       
    }

    public function __toString(){
        $returnString="";
        foreach (get_object_vars($this) as $variable_name => $value) {
            $returnString.="$variable_name=$value <br>";   
        }
        return $returnString;
    }

    public function getStudents( ){
        
    }
    
    public function students( ){
        
    }
    
}
class CourseFactory{
    public static function courses(){
        global $pdo;
        $sql="SELECT * FROM Course";
        $stmt = $pdo->prepare($sql);
        if ($stmt->execute()===false){
            throw new Exception("Database error. Contact Webmaster.");
        }
        $courses=[];
        while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            $courses[$row['Course_OID']]=new Course($row['Course_OID']);
        }
        return $courses;
    }    
}
