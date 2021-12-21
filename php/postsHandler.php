<?php

include('includes/dbconnectionHandler.php');
include('includes/functions.php');

// Capistrano

if (isset($_GET['RetrievePosts'])) {

  if ($_GET['RetrievePosts'] == 'RetrieveAllPosts') {
    $postResults = retrieve_posts($con);
    $postArray = array();

    if (mysqli_num_rows($postResults) > 0) {
      while ($postData = mysqli_fetch_assoc($postResults)) {
        $postArray[] = $postData;
      }
      echo json_encode($postArray);
    } else {
      echo "End of Posts";
    }
  }

  // Retrieve results from functions.php
} else if (isset($_GET['RetrieveSinglePost'])) {
  $post_id = $con->real_escape_string($_GET['RetrieveSinglePost']);
  $postResult = retrieve_posts($con);

  if (mysqli_num_rows($postResult) > 0) {
    while ($posts = mysqli_fetch_assoc($postResult)) {
      if ($post_id == $posts['post_id']) {
        echo json_encode($posts);
      }
    }
    
  } else {

  }
}

?>