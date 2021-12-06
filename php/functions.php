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

function retrieve_userdata($con) {
  if(isset($_SESSION['Username'])){
      $uname = $_SESSION['Username'];
      $query = "SELECT UID,Account_Type,Username,Profile_Pic,First_Name,Last_Name,Account_Creation_Date,About FROM accounts WHERE Username = '$uname' limit 1";

      $result = mysqli_query($con, $query);
      if($result && mysqli_num_rows($result) > 0) {
          $userdata = mysqli_fetch_assoc($result);
          return $userdata;
      }
  }
}

function retrieve_posts($con) {
    $query = "SELECT post_id,post_author_uid,accounts.Username,accounts.Profile_Pic,post_type,post_datetime,post_title,post_content,likers_uid
    FROM `user_posts` 
    INNER JOIN `accounts` 
    ON accounts.UID = user_posts.post_author_uid";
    
    $result = mysqli_query($con, $query);
    return $result;
}

function create_user($con) {
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
}

?>
