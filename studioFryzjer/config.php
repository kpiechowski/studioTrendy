<?php 

session_start();

$host = "localhost";
$user = "root";
$password = "password";
$db_name = "studioTrendy";

$mysqli = new mysqli($host,$user,$password,$db_name);
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

$cache= date("Y-m-d H:i:s");


// login check function

// function loginCheck(){
    
// }

// core styles
?>

