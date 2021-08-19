<?php
$var = 'admin';

switch($var){
    case "teacher"||"Teacher" :
        echo "This message is for {$var}";
    break;
    case "student"||"Student" :
        echo "This message is for {$var}";
    break;
    case "Stuff"||"stuff" :
        echo "This message is for {$var}";
    break;
    case "admin"||"Admin" :
        echo "This message is for {$var}";
    break;

    default: 
    echo "Unknown Users";

    








}






?>