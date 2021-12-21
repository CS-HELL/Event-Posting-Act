<?php
session_start();
// Napeek - Ferrer
include('includes/dbconnectionHandler.php');
include('includes/functions.php');

if (isset($_POST['cancel'])) {
    $event_post_id = $_POST['cancel'];

    $result = cancel_event_post($con, $event_post_id);
    echo $result;

} else {
    echo "error";
}

?>