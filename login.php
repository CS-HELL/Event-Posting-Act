<?php
session_start();

include('php/dbconnectionHandler.php');
include('php/functions.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $query = "SELECT * FROM accounts WHERE Username = '$username' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $userdata = mysqli_fetch_assoc($result);

                if ($userdata['Password'] === md5($password)) {
                    $_SESSION['Username'] = $userdata['Username'];
                    header("Location: index.php");
                    die;
                }
            }
        }
        echo "Invalid Username or Password!";
    } else {
        echo "Invalid Username or Password!";
    }
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
<header><a class="name">Apes</a>
    <ul class="navigation">
        <li onclick="scrollto('banner-container');">Register</li>
        <li onclick="scrollto('banner-container');">About Us</li>
    </ul>
</header>
<div class="main-container">
    <div class="login-form">
        <h1>Login </h1>
        <form action="login.php" method="POST">
            <div class="field"><input type="text" id="username" name="username" autocomplete="off" required><label>Username</label><span></span></div>
            <div class="field"><input type="password" id="password" name="password" required><label>Password</label><span></span>
            </div>

            <input type="submit" value="Confirm" id="login">
            <div class="register-link">Don't have an account? <a href="registration.php">Register</a></div>
        </form>
    </div>
</div>




<footer></footer>

</html>