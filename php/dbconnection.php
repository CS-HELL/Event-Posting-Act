<?php

$host = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "apesstronkdb";

$accept = false;

$connection = new mysqli($host, $dbuser, $dbpass, $db);
if($connection->connect_error) {
    die("Failed to connect : " .$connection->connect_error);
  } else {
    $accept = true;
  }
  
?>