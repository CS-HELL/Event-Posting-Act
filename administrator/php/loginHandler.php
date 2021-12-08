<?php
session_start();

include('includes/dbconnectionHandler.php');
include('includes/functions.php');

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
                    echo "Success";
                    die;
                }
            }
        }
        echo "Denied";
    } else {
        echo "Blank Credentials";
    }
}