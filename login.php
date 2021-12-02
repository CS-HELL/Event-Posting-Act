<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $host = "localhost";
    $dbuser = "root";
    $dbpass = "root";
    $db = "apesstronkdb";

    $mysqli = new mysqli($host, $dbuser, $dbpass);
    if($mysqli->connect_error) {
        die("Failed to connect : " .$mysqli->connect_error);
      } else {
        $existingUsername = $mysqli->prepare("SELECT * FROM accounts WHERE username = ?");
        $existingUsername->bind_param('s', $username);
        $existingUsername->execute();

        $existingUsername_result = $existingUsername->get_result();

        if($existingUsername_result->num_rows > 0) {
            $data_fetch = $existingUsername_result->fetch_assoc();
            if($data_fetch['password'] === $password){
                echo "<h2>Nice</h2>";
            }
            else {
                echo "<h2>Invalid Username or Password</h2>";
            }
        } else {
            echo "<h2>Invalid Username or Password</h2>";
        }
      }
