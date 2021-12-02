<?php
session_start();

include("php/dbconnectionHandler.php");
include("php/functions.php");

$userdata = check_login($con);
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<header><a class="name">Apes</a>
    <ul class="navigation">
        <li onclick="index.php">Home</li>
        <li><a href="php/logoutHandler.php">Log Out</a></li>
    </ul>
</header>
<div class="main-container">
    Hello, <?php echo "<h1>$userdata[First_Name]</h1>"; ?>
</div>
<footer></footer>

</html>
<script src="js/index.js" type="text/javascript"></script>