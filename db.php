<?php

$host = 'localhost';
$username = 'root';
$password="";
$database = "booking";

$conn = mysqli_connect($host, $username,$password, $database);

if(!$conn){
    die("Connection failed: " . mysquil_connect_error());
}
?>