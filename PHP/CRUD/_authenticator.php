<?php

session_start();
$webroot = "http://localhost/ARMAN/BASIS/PHP/CRUD/";

$is_authenticated = $_SESSION['is_authenticated'];

if(!$is_authenticated){
    header('location: '.$webroot.'404.php');
}
else{
    echo "Hello!";
}




?>