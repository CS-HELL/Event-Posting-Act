<?php

/**
 * This function is used to retrieve data of current logging user.
 * $con is the handler for the database configuration.
 */
function check_login($con) {
    if(isset($_SESSION['Username'])){
        $uname = $_SESSION['Username'];
        $result = $con->query("SELECT * FROM accounts WHERE Username = '$uname' limit 1");

        if($result && mysqli_num_rows($result) > 0) {
            $userdata = mysqli_fetch_assoc($result);
            return $userdata;
        }
    }

    redirectToLoginPage();
    die;
}

/**
 * This function is used to retrieve the posts from the database
 * with its corresponding author.
 * $con is the handler for the database configuration.
 */
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

/**
 * This function is used to retrieve the event posts from the database
 * $con is the handler for the database configuration
 */
function retrieve_event_posts($con) {
    $result = $con->query("SELECT * FROM `event_posts`");
    
    return $result;
}












function redirectToHomePage() {
    header('Location: index.php');
    exit();
}

function redirectToErrorPage() {

}

function redirectToPostDetailErrorPage() {

}

function redirectToLoginPage() {
    header('Location: login.php');
    exit();
}

?>