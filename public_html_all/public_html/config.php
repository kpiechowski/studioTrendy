<?php
ob_start();
session_start();

$host = "localhost";
$user = "id20083539_root";
$password = "Maciaszek76qwerty!";
$db_name = "id20083539_studiotrendy";

$mysqli = new mysqli($host,$user,$password,$db_name,3306);
if ($mysqli -> connect_error) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

$cache='2131';
?>