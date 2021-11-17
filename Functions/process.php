<?php
    include 'common_functions.php';
    echo nl2br(array_to_string($_POST));
    $test = array( "first" => "Scott", "last" => "Weaver", "skills" => array("programming", "swimming", "hang gliding") );
    echo nl2br(array_to_string($test));
?>