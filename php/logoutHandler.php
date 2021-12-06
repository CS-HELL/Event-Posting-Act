<?php

if(isset($_SESSION['Username'])){
    unset($_SESSION['Username']);
}

header("Location: ../login.php");
?>