<?php
session_start();
// Madriaga
include('includes/dbconnectionHandler.php');
include('includes/functions.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $title = $_POST['posttitle'];
    $content = $_POST['postdetails'];
    $date_today = date('Y-m-d H:i:s');

    $userData = check_login($con);
    
    $result = insert_post($con, $userData['UID'], $date_today, $title, $content);
    echo $result;
       
} else {
    echo "error";
}

?>