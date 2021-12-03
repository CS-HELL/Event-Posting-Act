<?php
session_start();

    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "apesstronkdb";

    $accept = false;

    $con = new mysqli($host, $dbuser, $dbpass, $db);
    if($con->connect_error) {
        die("Failed to connect : " .$con->connect_error);
    } 
    include("php/dbconnectionHandler.php");
    include("php/functions.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $firstname = $_POST['first-name'];
        $lastname = $_POST['last-name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $date = date('m/d/Y');
        $about = 'CSnoob';
        $sql = "INSERT INTO accounts (Username, Password, First_Name, Last_Name, Account_Creation_Date, About) VALUES ('$username', '$password', '$firstname', '$lastname', '$date', '$about')";

        echo 'reached';

        $con -> query($sql);
        //$run = mysqli_info($con, $sql) or die(mysqli_error( $con));

        //if($run){
        //    echo 'Data saved';
        //} else {
        //    echo 'Error';
        //}
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/header.css">
    <script type="text/javascript" src="js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<header><a class="name">Apes Registration</a>
    <ul class="navigation">
        <li onclick="scrollto('banner-container');">About Us</li>
    </ul>
</header>
<div class="main-container">
    <div class="login-form">
        <h1>Create your Account</h1>
        <form class="reg-form" action="registration.php" method="post">
            <div class="field reg-field"><input type="text" id="first-name" name="first-name" autocomplete="off" required><label>First Name</label><span></span></div>
            <div class="field reg-field"><input type="text" id="last-name" name="last-name" autocomplete="off" required><label>Last Name</label><span></span></div>
            <div class="field reg-field"><input type="text" id="username" name="username" autocomplete="off" required><label>Username</label><span></span></div>
            <div class="field reg-field"><input type="email" id="email" name="email" autocomplete="off" required><label>Email</label><span></span></div>
            <div class="field reg-field"><input type="password" id="password" name="password" required><label>Password</label><span></span></div>
            <div class="field reg-field"><input type="password" id="cpassword" name="cpassword" required><label>Confirm Password</label><span></span></div>
            <input type="submit" value="Confirm" id="login">
            <a class="back" href="login.php">🡠Back to Login</a>
        </form>
    </div>
</div>




<footer></footer>

</html>