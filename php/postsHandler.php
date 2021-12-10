<?php 

include('includes/dbconnectionHandler.php');
include('includes/functions.php');

// Retrieve results from functions.php
$postResults = retrieve_posts($con);
$postArray = array();

if(mysqli_num_rows($postResults) > 0) {
  while($postData = mysqli_fetch_assoc($postResults)){
      $postArray[] = $postData;
  }
  echo json_encode($postArray);
} else {
  echo "End of Posts";
}

?>