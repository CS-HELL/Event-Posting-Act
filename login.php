<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "apesstronkdb";

    $connection = new mysqli($host, $dbuser, $dbpass, $db);
    if($connection->connect_error) {
        die("Failed to connect : " .$connection->connect_error);
      } else {
        $existingUsername = $connection->prepare("SELECT * FROM accounts WHERE Username = ?");
        $existingUsername->bind_param('s', $username);
        $existingUsername->execute();

        $existingUsername_result = $existingUsername->get_result();

        if($existingUsername_result->num_rows > 0) {
            $data_fetch = $existingUsername_result->fetch_assoc();
            if($data_fetch['Password'] === $password){
                echo "<h2>Nice</h2>";
            }
            else {
                echo "<h2>Invalid Username or Password</h2>";
            }
        } else {
            echo "<h2>Invalid Username or Password</h2>";
        }
      }
?>