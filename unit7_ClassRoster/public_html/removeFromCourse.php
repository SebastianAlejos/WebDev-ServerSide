<?php
/**
 * @var $pdo
 */
if(!isset($smarty)){
    header("Location:/");
    exit();
}
$sql = "DELETE FROM Grade WHERE Student_FK = :s AND Course_FK = :c";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":s", $_GET['studentid']);
$stmt->bindParam(":c", $_GET['courseid']);
$stmt->execute();
