<?php
/**
 * @var $smarty defined in config.php
 */
include "../private_html/config.php";
$fname="Empty";
$lname = "Empty";
$city = "Empty";
$state = "Empty";
$zip = "Empty";
$userid = "Empty";
$password = "Empty";
$gender = "Empty";
$married = "Not Married";


if(empty($_POST['fname'])){
   $smarty->display("form.tpl");
}else{
    $smarty->assign('fname',$_POST['fname']);
    if(!empty($_POST['lname'])){
        $smarty->assign('lname',$_POST['lname']);
    }
    if (!empty($_POST['city'])){
        $smarty->assign('city',$_POST['city']);
    }
    if (!empty($_POST['state'])){
        $smarty->assign('state',$_POST['state']);
    }
    if (!empty($_POST['zip_code'])){
        $smarty->assign('zip',$_POST['zip_code']);
    }
    if (!empty($_POST['user_id'])){
        $smarty->assign('userid',$_POST['user_id']);
    }
    if (!empty($_POST['password'])){
        $smarty->assign('password',$_POST['password']);
    }
    if (!empty($_POST['gender'])){
        $smarty->assign('gender',$_POST['gender']);
    }
    if (!empty($_POST['married'])){
        $smarty->assign('married',$_POST['married']);
    }
    $smarty->display("results.tpl");
}

