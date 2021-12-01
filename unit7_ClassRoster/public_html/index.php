<?php
include "../private_html/config.inc.php";
include PRIVATE_PATH . "db.inc.php";
/**
 * @var $smarty Smarty defined in private_html/config.inc.php
 * @var $pdo PDO defined in db.inc.php
 */
if(isset($_GET['courseid']) & isset($_GET['studentid'])){
    include "removeFromCourse.php";
}
$sql = "SELECT Course_OID, Course_Name, Teacher.First_Name as Teacher_FName, Teacher.Last_Name as Teacher_LName
           , Student_OID, Student.First_Name as Student_FName, Student.Last_Name as Student_LName, Email
        FROM Teacher
            JOIN Course ON Teacher_OID = Teacher_FK
            JOIN Grade ON Course_OID = Course_FK
            JOIN Student ON Student_OID = Student_FK
            ORDER BY Course_Name ";
$stmt = $pdo->prepare($sql);
$stmt->execute();
/* The format of the resultant table from the database looks like this:
 * Course_OID, Course_Name, Teacher_FName, Teacher_LName, Student_OID, Student_FName, Student_LName, Email
 * 200	Accounting	Michelle	Pieffer	150	Jim	Parks	jparks@gmail.com
 * 200	Accounting	Michelle	Pieffer	400	Toby	Rye	trye@gmail.com
 * 200	Accounting	Michelle	Pieffer	450	Melody	Jones	mjones@gmail.com
 * 410	Business Finance	Roger	Moore	400	Toby	Rye	trye@gmail.com
 * 445	Business Law	Don	Johnson	200	Jason	Baker	jbaker@aol.com
 *
 * But I want to have an array of arrays like this:
 * $courses = array(
 *     "200" => array(
 *         "Course_OID => 200,
 *         "Course_Name" => "Accounting",
 *         "Teacher_FName" => "Michelle",
 *         "Teacher_LName" => "Pieffer",
 *         "Students" => array (
 *             "150" => array(
 *                 "Student_OID" => 150,
 *                 "Student_FName" => "Jim",
 *                 "Student_LName" => "Parks",
 *                 "Email" => "jparks@gmail.com"
 *             ),
 *             "400" => array(
 *                 ...
 */
$courses = array();
$course = array();
$students = array();
$currentCourse = -1;
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    if($currentCourse != $row['Course_OID']){
        //Change of course
        //Build old course and add to course list ($courses)
        if($currentCourse != -1){
            $course['Students'] = $students;
            $courses[$currentCourse] = $course;
        }
        //Start over
        $course = array();
        $currentCourse = $row['Course_OID'];
        $course['Course_OID'] = $row['Course_OID'];
        $course['Course_Name'] = $row['Course_Name'];
        $course['Teacher_FName'] = $row['Teacher_FName'];
        $course['Teacher_LName'] = $row['Teacher_LName'];
        $students = array();
    }
    $students[$row['Student_OID']] = array(
        'Student_OID' => $row['Student_OID'],
        'Student_FName' => $row['Student_FName'],
        'Student_LName' => $row['Student_LName'],
        'Email' => $row['Email']
    );
}
$course['Students'] = $students;
$courses[$currentCourse] = $course;
$smarty->assign("courses", $courses);
$smarty->display("courseList.tpl");