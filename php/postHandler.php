<?php 

include('includes/dbconnectionHandler.php');
include('includes/functions.php');

if (!isset($_POST['url'])) {}

$post_id = $con->real_escape_string($_POST['url']);
$postResult = retrieve_post($con, $post_id);

if(mysqli_num_rows($postResult) > 0) {
    $postData = $postResult->fetch_array();
    echo json_encode($postData);
} else {
  
}

?>