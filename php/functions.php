<?php

function check_login($con) {
     
    if(isset($_SESSION['Username'])){
        $uname = $_SESSION['Username'];
        $query = "SELECT * FROM accounts WHERE Username = '$uname' limit 1";

        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0) {
            $userdata = mysqli_fetch_assoc($result);
            return $userdata;
            
        }
    }

    header("Location: login.php");
    die;

}

?>