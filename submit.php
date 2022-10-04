<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "registrationdb";

$msg = "";

$fname = "";
$lname = "";
$address = "";
$birthday = "";
$phone = "";
$email = "";
$school = "";
$gender = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
$connect = mysqli_connect($host, $user, $password, $database);
}catch(mysqli_sql_exception $ex){
// echo "Error";
$msg = "Error";
}

function getPosts(){
    $posts = array();
    $posts[0] = $_POST['fname'];
    $posts[1] = $_POST['lname'];
    $posts[2] = $_POST['address'];
    $posts[3] = $_POST['birthday'];
    $posts[4] = $_POST['phone'];
    $posts[5] = $_POST['email'];
    $posts[6] = $_POST['school'];
    $posts[7] = $_POST['gender'];
    return $posts;
}
if(isset($_POST['submit'])){
    $data = getPosts();
    $insert_Query = "INSERT INTO form(fname,lname,address,birthday,phone,email,school,gender) VALUES('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]')";
    
    try{
    $insert_Result = mysqli_query($connect, $insert_Query);
    
    if($insert_Result){
    if(mysqli_affected_rows($connect) > 0){
    // echo "Data Inserted";
    $msg = "Data Inserted";
    }else{
    // echo "Data Not Inserted";
    $msg = "Data Not Inserted";
    }
    }
    }catch(Exception $ex){
    // echo "Error Insert" . $ex->getMessage();
    $msg = "Error Insert" . $ex->getMessage();
    }
header('Location: summary.php');
}
    