<?php
session_start();
    include("php/dbconnectionHandler.php");
    include("php/functions.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $firstname = $_POST['first-name'];
        $lastname = $_POST['last-name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $date = date('m/d/Y');
        $about = 'CSnoob';
        $sql = "INSERT INTO accounts (Username, Password, First_Name, Last_Name, Account_Creation_Date, About) VALUES ('$username', '$password', '$firstname', '$lastname', '$date', '$about')";
    
        $con -> query($sql);
        echo '<script>alert("New account added successfully!")</script>';
    }
?>