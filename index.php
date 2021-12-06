<?php 
include("php/sessionHandler.php"); 
include('php/dbconnectionHandler.php');
?>


<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="styles/header.css">
</head>
<header><a class="name">AsTronK</a>
  <ul class="navigation">
    <li><a class="ahref" href="index.php">Home</a></li>
    <li><a class="ahref" href="php/logoutHandler.php">Log Out</a></li>
  </ul>
</header>

<body>


  <div class="container">
    <div class="sidebar-left">
      <center>
        <img src="img/uploadedpfp/defaultpictest.png"><br><br>
        <h3><?php echo "$userdata[Username]"; ?></h3>
      </center>
      <br>
      <a href="#"><i class="fa fa-pen-alt"></i><span>Post Now</span></a>
      <a href="#"><i class="fa fa-pied-piper-square"></i><span>Posts</span></a>
      <a href="#"><i class="fa fa-list-ul"></i><span>Polls</span></a>
      <a href="#"><i class="fa fa-dungeon"></i><span>Events</span></a>
      <a href="php/logoutHandler.php"><i class="fa fa-sign-out-alt"></i><span>Sign out</span></a>
    </div>

    <div class="middle-content" id="mid-content">
      

      
    </div>

    <div class="sidebar-right"></div>
  </div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="js/script.js"></script>

<footer></footer>

</html>


<!-- <div class="panel-post-tags">
          <ul>
            <li>Post Regular</li>
            <li>Post Event</li>
            <li>Post Poll</li>
          </ul>
        </div> -->