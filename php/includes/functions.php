<?php

/**
 * This function is used to retrieve data of current logging user.
 * $con is the handler for the database configuration.
 */
function check_login($con)
{
    if (isset($_SESSION['Username'])) {
        $uname = $_SESSION['Username'];
        $result = $con->query("SELECT * FROM accounts WHERE Username = '$uname' limit 1");

        if ($result && mysqli_num_rows($result) > 0) {
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
function retrieve_posts($con)
{
    $result = $con->query("SELECT post_id,post_author_uid,accounts.Username,accounts.Profile_Pic,post_type,post_datetime,post_title,post_content,likers_uid
    FROM `user_posts` 
    INNER JOIN `accounts` 
    ON accounts.UID = user_posts.post_author_uid");

    return $result;
}

/**
 * This function is used to retrieve the event posts from the database
 * $con is the handler for the database configuration
 */
function retrieve_event_posts($con)
{
    $result = $con->query("SELECT e.event_post_id,e.event_author,e.event_title,e.event_location,e.event_description,
    e.event_start_date_time,e.event_end_date_time,e.event_banner_image,e.event_status
    FROM `event_posts` e");

    return $result;
}

function insert_event($con, $author, $event_title, $event_location, $event_description, $event_start, $event_end, $event_image, $event_status)
{
    $query = "INSERT INTO event_posts(event_author, event_title, event_location, event_description, event_start_date_time, event_end_date_time, event_banner_image, event_status)
    VALUES ('$author','$event_title','$event_location','$event_description','$event_start','$event_end', '$event_image', '$event_status')";

    $execute = mysqli_query($con, $query);
    if ($execute === true) {
        return "success";
    } else {
        return "error";
    }
}

function retrieve_participants($con)
{
    $result = $con->query("SELECT * FROM `event_participants`");
    return $result;
}

function retrieve_user_events($con, $username) {
    $result = $con->query("SELECT event_target_id, event_post_id, event_author, event_title, event_location, event_description,
    event_start_date_time, event_end_date_time, event_banner_image, event_status
    FROM `event_participants` INNER JOIN `event_posts` ON event_post_id = event_target_id WHERE participant = '$username'");

    $eventids = array();
    while ($eventid = mysqli_fetch_array($result)) {
        $eventids[] = $eventid;
    }
    return $eventids;
}

function remove_currentuser_participant($con, $username, $event_post_id)
{
    $query = "DELETE FROM `event_participants` WHERE participant = '$username' AND event_target_id = '$event_post_id'";

    $execute = mysqli_query($con, $query);
    if ($execute === true) {
        return "success";
    } else {
        return "error";
    }
}

function find_if_currentuser_is_participant($con, $username, $event_post_id)
{
    $query = "SELECT * FROM `event_participants` WHERE participant = '$username' AND event_target_id = $event_post_id";

    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 0) {
        echo "no";
    } else {
        echo "yes";
    }
}


function add_currentuser_participant($con, $username, $event_post_id, $join_date)
{
    $query = "INSERT INTO event_participants(participant, event_target_id, event_join_date) 
    VALUES ('$username', '$event_post_id', '$join_date')";

    $execute = mysqli_query($con, $query);
    if ($execute === true) {
        return "success";
    } else {
        return "error";
    }
}


function update_event_post($con, $event_post_id, $event_title, $event_location, $event_description, $event_start, $event_end)
{
    $query = "UPDATE event_posts SET event_title = '$event_title', event_location = '$event_location', event_description = '$event_description', event_start_date_time = '$event_start', event_end_date_time = '$event_end'
    WHERE event_post_id = $event_post_id";

    $execute = mysqli_query($con, $query);
    if ($execute == true) {
        return "success";
    } else {
        return "error";
    }
}

function cancel_event_post($con, $event_post_id)
{
    $query = "UPDATE event_posts SET event_status = 'cancelled'
    WHERE event_post_id = $event_post_id";

    $execute = mysqli_query($con, $query);
    if ($execute == true) {
        return "success";
    } else {
        return "error";
    }
}

function deleteEvent($con, $event_id) {
    $query = "DELETE FROM event_posts 
    WHERE event_post_id = $event_id";

    $execute = mysqli_query($con, $query);
    if ($execute == true) {
        return "success";
    } else {
        return "error";
    }
}

function recoverEvent($con, $event_id) {
    $query = "UPDATE event_posts 
    SET event_status = 'live' WHERE event_post_id = '$event_id'";

    $execute = mysqli_query($con, $query);
    if ($execute == true) {
        return "success";
    } else {
        return "error";
    }
}








function redirectToHomePage()
{
    header('Location: index.php');
    exit();
}


function redirectToErrorPage()
{
}

function redirectToPostDetailErrorPage()
{
}

function redirectToLoginPage()
{
    header('Location: login.php');
    exit();
}
?>