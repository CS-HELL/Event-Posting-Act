<?php

function check_login($con) {
    if(isset($_SESSION['Username'])){
        $uname = $_SESSION['Username'];
        $result = $con->query("SELECT * FROM accounts WHERE Username = '$uname' limit 1");

        if($result && mysqli_num_rows($result) > 0) {
            $userdata = mysqli_fetch_assoc($result);
            return $userdata;
        }
    }

    header("Location: login.php");
    die;
}

function retrieve_posts($con){
    $result = $con->query("SELECT post_id,post_author_uid,accounts.Username,accounts.Profile_Pic,post_type,post_datetime,post_title,post_content,likers_uid
    FROM `user_posts` 
    INNER JOIN `accounts` 
    ON accounts.UID = user_posts.post_author_uid");
    
    return $result;
}

function retrieve_post($con, $post_id) {
    $result = $con->query("SELECT post_id,post_author_uid,accounts.Username,accounts.Profile_Pic,post_type,post_datetime,post_title,post_content,likers_uid
    FROM `user_posts` 
    INNER JOIN `accounts` 
    ON accounts.UID = user_posts.post_author_uid WHERE post_id = '$post_id'");

    return $result;
}

function retrieve_event_posts($con) {
    $result = $con->query("SELECT * FROM `event_posts`");

    // $result = $con->query("SELECT event_post_id,event_author_uid,event_title,event_location,event_description,
    // DATE_FORMAT(event_start_date_time, '%Y-%m-%d %H:%m:%s'),
    // DATE_FORMAT(event_end_date_time, '%Y-%m-%d %H:%i:%s'), event_banner_image FROM `event_posts`");
    
    return $result;
}












function redirectToHomePage() {
    header('Location: ../index.php');
    exit();
}

function redirectToErrorPage() {

}

function redirectToPostDetailErrorPage() {

}


?>