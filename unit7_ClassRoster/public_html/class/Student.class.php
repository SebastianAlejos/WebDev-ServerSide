<?php
class Student{
    private $Student_OID;
    private $First_Name;
    private $Last_Name;
    private $Email;
    private $Grade_Level;

    public function __construct($student_id=-1,$student_data=-1){
        if ($student_id==-1 && $student_data == -1) {
            return;
        }if ($Student_id != -1) {
            throw new Exception("This has not been implemented in student");
        }
        foreach ($student_data as $column => $value) {

        }
    }
}


class StudentFactory{
    public static function studentByCourse($CourseID){
        global $pdo;
        $sql= "SELECT *
               FROM Student
                    JOIN Grade ON Student_OID =Student_FK
                WHERE Course_FK = :course_ID";
        $stmt=$pdo->prepare($sql);
        $stmt->bindParam(":couse_id",$CourseID);
        if ($stmt->execute()===false){
            throw new Exception("Database error. Contact Webmaster.");
        }
        $students=[];
        while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            $students[$row['Student_OID']]=new Course(-1, $row);
        }
        return $students;
    }
}