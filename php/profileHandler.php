
<?php
session_start();
include('includes/dbconnectionHandler.php');
include('includes/functions.php');

    $userData = check_login($con);

    
    echo json_encode($userData);
      
?>
