<?php

$host = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "apesstronkdb";

$accept = false;

$con = new mysqli($host, $dbuser, $dbpass, $db);
if($con->connect_error) {
    die("Failed to connect : " .$con->connect_error);
} 
  
?>