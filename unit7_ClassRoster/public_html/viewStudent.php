<?php
/**
 * @var $smarty Smarty set in /private_html/config.inc.php
 * @var $pdo PDO set in /private_html/dbconfig.inc.php
 */
require_once "../private_html/config.inc.php";
include PRIVATE_PATH . "db.inc.php";

if(!isset($_GET['id'])){
    $smarty->assign("message", "No id selected.");
    $smarty->display("viewStudent.tpl");
    exit();
}
$studentID = $_GET['id'];
$query = "SELECT * FROM Student WHERE Student_OID = :id";
$statement = $pdo->prepare($query);
$statement->bindParam(":id", $studentID);
$statement->execute();
if($statement->rowCount() != 1){
    $smarty->assign("message", "No record found for the student with the id of "
        . $studentID);
    $smarty->display("viewStudent.tpl");
    exit();
}
include "commonSmarty.php";
$smarty->assign("student", $statement->fetch(PDO::FETCH_ASSOC));
$smarty->display("viewStudent.tpl");