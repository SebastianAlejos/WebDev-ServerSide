<?php
include "../private_html/config.inc.php";
include PRIVATE_PATH . "db.inc.php";
include "class/Course.class.php";
include "class/Teacher.class.php";
echo"---------------------------------";
$course = new Course(200);
echo $course;
echo "<br>-----------------------------";
$courses=CourseFactory::courses();
foreach ($courses as $courseID => $course) {
    echo "Course $courseID is as follows <br>";
    echo "Course $course";
    echo "---------------------------------------------------------------------<br>";
}