<?php include("php/sessionHandler.php"); ?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/styles.css">
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
        <h3>Gawr Gura</h3>
      </center>
      <br>
      <a href="#"><i class="fa fa-pen-alt"></i><span>Post Now</span></a>
      <a href="#"><i class="fa fa-pied-piper-square"></i><span>Posts</span></a>
      <a href="#"><i class="fa fa-list-ul"></i><span>Polls</span></a>
      <a href="#"><i class="fa fa-dungeon"></i><span>Events</span></a>
      <a href="#"><i class="fa fa-sign-out-alt"></i><span>Sign out</span></a>
    </div>
    <div class="middle-content">
      <div class="col-lg-8">
        <div style="height: 26px"></div>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Posts Regular</h3>
            <p>Yawa ka teng</p>
          </div>
        </div>
      </div>
      </div>
      <div class="sidebar-right"></div>
    </div>

</body>
<footer></footer>

</html>