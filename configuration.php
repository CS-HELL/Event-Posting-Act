<?php

$server = "locahost";
$username = "root";
$password = "";
$database = "apesstronkdb";

$mysqli = mysqli_connect($server, $username, $password, $database);

if(!$mysqli) {
    echo "<script> Alert('Could not connect to the server.') </script>";
  }

?>