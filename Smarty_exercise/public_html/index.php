<?php
/**
 * @var $smarty defined in config.php
 */
include "../private_html/config.php";

if(empty($_POST['f_name'])){
   $smarty->display(form.tpl);
}else{
    if(empty($_POST['lname'])){
        $lname = "Empty";
        $smarty->assign(lname,$lname);
    }else {
        $smarty->assign($_POST['lname'],$lname);
    }
    if (empty($_POST['city'])){
        $smarty->assign("Empty",$city);
    } else {
        $smarty->assign($_POST['city'],$city);
    }
    if (empty($_POST['state'])){
        $smarty->assign("Empty",$state);
    } else {
        $smarty->assign($_POST['state'],$state);
    }
    
    if (empty($_POST['zip_code'])){
        $smarty->assign("Empty",$zip);
    } else {
        $smarty->assign($_POST['zip_code'],$zip);
    }
    if (empty($_POST['user_id'])){
        $smarty->assign("Empty",$userid);
    } else {
        $smarty->assign($_POST['user_id'],$userid);
    }if (empty($_POST['password'])){
        $smarty->assign("Empty",$password);
    } else {
        $smarty->assign($_POST['password'],$password);
    }

    if (empty($_POST['gender'])){
        $smarty->assign("Empty",$gender);
    } else{
        $smarty->assign($_POST['gender'],$gender);
    }

    if (empty($_POST['married'])){
        $smarty->assign("Not Married",$married);
    } else{
        $smarty->assign("Married",$married);
    }
    $smarty->display("results.tpl");
}

