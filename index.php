<?php include("php/sessionHandler.php"); ?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
        <h3><?php echo "$userdata[First_Name] $userdata[Last_Name]"; ?></h3>
      </center>
      <br>
      <a href="#"><i class="fa fa-pen-alt"></i><span>Post Now</span></a>
      <a href="#"><i class="fa fa-pied-piper-square"></i><span>Posts</span></a>
      <a href="#"><i class="fa fa-list-ul"></i><span>Polls</span></a>
      <a href="#"><i class="fa fa-dungeon"></i><span>Events</span></a>
      <a href="#"><i class="fa fa-sign-out-alt"></i><span>Sign out</span></a>
    </div>
    <div class="middle-content">
      <div class="[ panel panel-default ] panel-post">
        <div class="dropdown">
          <span class="dropdown-toggle" type="button" data-toggle="dropdown">
            <span class="[ glyphicon glyphicon-chevron-down ]"></span>
          </span>
          <ul class="dropdown-menu" role="menu">
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
            <li role="presentation" class="divider"></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
          </ul>
        </div>
        <div class="panel-post-tags">
          <ul>
            <li>#Post Regular</li>
            <li>#Post Event</li>
            <li>#Post Poll</li>
          </ul>
        </div>
        <div class="panel-heading">
          <img class="[ img-circle pull-left ]"
            src="https://yt3.ggpht.com/uMUat6yJL2_Sk6Wg2-yn0fSIqUr_D6aKVNVoWbgeZ8N-edT5QJAusk4PI8nmPgT_DxFDTyl8=s900-c-k-c0x00ffffff-no-rj"
            alt="" />
          <h3><?php echo "$userdata[First_Name] $userdata[Last_Name]"; ?></h3>
          <h5><span>06/69/6969</span> </h5>
        </div>
        <div class="panel-body">
          <p>Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako </p>
        </div>
        <div class="panel-footer">
          <button type="button" class="[ btn btn-default ]">Like</button>
          <button type="button" class="[ btn btn-default ]">Comment</button>
        </div>
      </div>
    </div>
    <div class="sidebar-right"></div>
  </div>

</body>
<footer></footer>

</html>