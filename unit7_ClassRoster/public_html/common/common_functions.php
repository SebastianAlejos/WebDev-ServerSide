<?php

function arrayToString($array, $pad = ""){
    $returnString = "";
    foreach($array as $key=>$value){
        $returnString .= $pad . "$key = ";
        if(is_array($value)){
            $returnString .= "Array<br>" . arrayToString($value, $pad . "&nbsp;&nbsp;&nbsp;&nbsp;");
        } else {
            $returnString .= "$value<br>";
        }
    }
    return $returnString;
}