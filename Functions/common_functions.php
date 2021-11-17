<?php
function array_to_string($array){
    $string="";
    foreach (array_keys($array) as $field){
        if ($field=="submit") {
            break;
        } else {
            if (is_array($array[$field])) {
                $string.= $field ."=";
                foreach(array_keys($array[$field]) as $skill){
                    $string.=$array[$field][$skill].", ";   
                }
            } else {
                $string.=$field ."= ".$array[$field]."\n";
            }
        }
    }
    return $string;
}