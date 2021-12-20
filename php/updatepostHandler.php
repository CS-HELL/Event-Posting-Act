<?php
session_start();

include('includes/dbconnectionHandler.php');
include('includes/functions.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $event_post_id =  $_POST['eventPost_ID'];

    $author = $_SESSION['Username'];
    $event_title = $_POST['eventtitle'];
    $event_location = $_POST['eventlocation'];
    $event_description = $_POST['eventdetails'];

    $event_start_date_time = new DateTime($_POST['eventstart']);
    $event_end_date_time = new DateTime($_POST['eventend']);

    $event_start = $event_start_date_time->format('Y-m-d H:i:ss');
    $event_end = $event_end_date_time->format('Y-m-d H:i:ss');

    $result = update_event_post($con, $event_post_id, $event_title, $event_location, $event_description, $event_start, $event_end);
    echo $result;

} else {
    echo "error";
}

?>