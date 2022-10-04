<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "registrationdb";

try{
    $connect = mysqli_connect($host, $user, $password, $database);
    }catch(mysqli_sql_exception $ex){
    // echo "Error";
    $msg = "Error";
    }
?>