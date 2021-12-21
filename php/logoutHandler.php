<?php
session_start(); // Required if data is needed for AJAX requests.

/**
 * This handler is responsible for removing the session data.
 * Madriaga
 */

if(isset($_SESSION['Username'])){
    unset($_SESSION['Username']);
}
header("Location: ../login.php");

?>