<?php

session_start(); // Required if data is needed for AJAX requests.
if(isset($_SESSION['Username'])){
    unset($_SESSION['Username']);
}
header("Location: ../login.php");

?>