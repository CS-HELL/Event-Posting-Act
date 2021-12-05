<?php include("php/sessionHandler.php"); ?>

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
        <h3><?php echo "$userdata[First_Name] $userdata[Last_Name]"; ?></h3>
      </center>
      <br>
      <a href="#"><i class="fa fa-pen-alt"></i><span>Post Now</span></a>
      <a href="#"><i class="fa fa-pied-piper-square"></i><span>Posts</span></a>
      <a href="#"><i class="fa fa-list-ul"></i><span>Polls</span></a>
      <a href="#"><i class="fa fa-dungeon"></i><span>Events</span></a>
      <a href="php/logoutHandler.php"><i class="fa fa-sign-out-alt"></i><span>Sign out</span></a>
    </div>
    <div class="middle-content">
      <div class="[ panel panel-default ] panel-post">
        <div class="panel-post-tags">
          <ul>
            <li>Post Regular</li>
            <li>Post Event</li>
            <li>Post Poll</li>
          </ul>
        </div>
        <div class="panel-heading">
          <img class="[ img-circle pull-left ]" src="img\uploadedpfp\defaultpictest.png" alt="" />
          <h3><?php echo "$userdata[First_Name] $userdata[Last_Name]"; ?></h3>
          <h5><span>06/69/6969</span> </h5>
        </div>
        <div class="panel-body">
          <p>Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako </p>
        </div>
        <div class="panel-footer">
          <button type="button" class="[ btn btn-default ]"><i class="fa fa-thumbs-up fa-1x like" aria-hidden="true"></i></button>
          <button type="button" class="[ btn btn-default ]">Comment</button>
        </div>
      </div>
      <div class="[ panel panel-default ] panel-post">
        <div class="panel-post-tags">
          <ul>
            <li>Post Regular</li>
            <li>Post Event</li>
            <li>Post Poll</li>
          </ul>
        </div>
        <div class="panel-heading">
          <img class="[ img-circle pull-left ]" src="img\uploadedpfp\defaultpictest.png" alt="" />
          <h3><?php echo "$userdata[First_Name] $userdata[Last_Name]"; ?></h3>
          <h5><span>06/69/6969</span> </h5>
        </div>
        <div class="panel-body">
          <p>Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako </p>
        </div>
        <div class="panel-footer">
          <button type="button" class="[ btn btn-default ]"><i class="fa fa-thumbs-up fa-1x like" aria-hidden="true"></i></button>
          <button type="button" class="[ btn btn-default ]">Comment</button>
        </div>
      </div>
      <div class="[ panel panel-default ] panel-post">
        <div class="panel-post-tags">
          <ul>
            <li>Post Regular</li>
            <li>Post Event</li>
            <li>Post Poll</li>
          </ul>
        </div>
        <div class="panel-heading">
          <img class="[ img-circle pull-left ]" src="img\uploadedpfp\defaultpictest.png" alt="" />
          <h3><?php echo "$userdata[First_Name] $userdata[Last_Name]"; ?></h3>
          <h5><span>06/69/6969</span> </h5>
        </div>
        <div class="panel-body">
          <p>Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako </p>
        </div>
        <div class="panel-footer">
          <button type="button" class="[ btn btn-default ]"><i class="fa fa-thumbs-up fa-1x like" aria-hidden="true"></i></button>
          <button type="button" class="[ btn btn-default ]">Comment</button>
        </div>
      </div>
      <div class="[ panel panel-default ] panel-post">
        <div class="panel-post-tags">
          <ul>
            <li>Post Regular</li>
            <li>Post Event</li>
            <li>Post Poll</li>
          </ul>
        </div>
        <div class="panel-heading">
          <img class="[ img-circle pull-left ]" src="img\uploadedpfp\defaultpictest.png" alt="" />
          <h3><?php echo "$userdata[First_Name] $userdata[Last_Name]"; ?></h3>
          <h5><span>06/69/6969</span> </h5>
        </div>
        <div class="panel-body">
          <p>Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako </p>
        </div>
        <div class="panel-footer">
          <button type="button" class="[ btn btn-default ]"><i class="fa fa-thumbs-up fa-1x like" aria-hidden="true"></i></button>
          <button type="button" class="[ btn btn-default ]">Comment</button>
        </div>
      </div>
      <div class="[ panel panel-default ] panel-post">
        <div class="panel-post-tags">
          <ul>
            <li>Post Regular</li>
            <li>Post Event</li>
            <li>Post Poll</li>
          </ul>
        </div>
        <div class="panel-heading">
          <img class="[ img-circle pull-left ]" src="img\uploadedpfp\defaultpictest.png" alt="" />
          <h3><?php echo "$userdata[First_Name] $userdata[Last_Name]"; ?></h3>
          <h5><span>06/69/6969</span> </h5>
        </div>
        <div class="panel-body">
          <p>Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako </p>
        </div>
        <div class="panel-footer">
          <button type="button" class="[ btn btn-default ]"><i class="fa fa-thumbs-up fa-1x like" aria-hidden="true"></i></button>
          <button type="button" class="[ btn btn-default ]">Comment</button>
        </div>
      </div>
      <div class="[ panel panel-default ] panel-post">
        <div class="panel-post-tags">
          <ul>
            <li>Post Regular</li>
            <li>Post Event</li>
            <li>Post Poll</li>
          </ul>
        </div>
        <div class="panel-heading">
          <img class="[ img-circle pull-left ]" src="img\uploadedpfp\defaultpictest.png" alt="" />
          <h3><?php echo "$userdata[First_Name] $userdata[Last_Name]"; ?></h3>
          <h5><span>06/69/6969</span> </h5>
        </div>
        <div class="panel-body">
          <p>Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako </p>
        </div>
        <div class="panel-footer">
          <button type="button" class="[ btn btn-default ]"><i class="fa fa-thumbs-up fa-1x like" aria-hidden="true"></i></button>
          <button type="button" class="[ btn btn-default ]">Comment</button>
        </div>
      </div>
      <div class="[ panel panel-default ] panel-post">
        <div class="panel-post-tags">
          <ul>
            <li>Post Regular</li>
            <li>Post Event</li>
            <li>Post Poll</li>
          </ul>
        </div>
        <div class="panel-heading">
          <img class="[ img-circle pull-left ]" src="img\uploadedpfp\defaultpictest.png" alt="" />
          <h3><?php echo "$userdata[First_Name] $userdata[Last_Name]"; ?></h3>
          <h5><span>06/69/6969</span> </h5>
        </div>
        <div class="panel-body">
          <p>Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako </p>
        </div>
        <div class="panel-footer">
          <button type="button" class="[ btn btn-default ]"><i class="fa fa-thumbs-up fa-1x like" aria-hidden="true"></i></button>
          <button type="button" class="[ btn btn-default ]">Comment</button>
        </div>
      </div>
      <div class="[ panel panel-default ] panel-post">
        <div class="panel-post-tags">
          <ul>
            <li>Post Regular</li>
            <li>Post Event</li>
            <li>Post Poll</li>
          </ul>
        </div>
        <div class="panel-heading">
          <img class="[ img-circle pull-left ]" src="img\uploadedpfp\defaultpictest.png" alt="" />
          <h3><?php echo "$userdata[First_Name] $userdata[Last_Name]"; ?></h3>
          <h5><span>06/69/6969</span> </h5>
        </div>
        <div class="panel-body">
          <p>Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako </p>
        </div>
        <div class="panel-footer">
          <button type="button" class="[ btn btn-default ]"><i class="fa fa-thumbs-up fa-1x like" aria-hidden="true"></i></button>
          <button type="button" class="[ btn btn-default ]">Comment</button>
        </div>
      </div>
      <div class="[ panel panel-default ] panel-post">
        <div class="panel-post-tags">
          <ul>
            <li>Post Regular</li>
            <li>Post Event</li>
            <li>Post Poll</li>
          </ul>
        </div>
        <div class="panel-heading">
          <img class="[ img-circle pull-left ]" src="img\uploadedpfp\defaultpictest.png" alt="" />
          <h3><?php echo "$userdata[First_Name] $userdata[Last_Name]"; ?></h3>
          <h5><span>06/69/6969</span> </h5>
        </div>
        <div class="panel-body">
          <p>Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako </p>
        </div>
        <div class="panel-footer">
          <button type="button" class="[ btn btn-default ]"><i class="fa fa-thumbs-up fa-1x like" aria-hidden="true"></i></button>
          <button type="button" class="[ btn btn-default ]">Comment</button>
        </div>
      </div>
      <div class="[ panel panel-default ] panel-post">
        <div class="panel-post-tags">
          <ul>
            <li>Post Regular</li>
            <li>Post Event</li>
            <li>Post Poll</li>
          </ul>
        </div>
        <div class="panel-heading">
          <img class="[ img-circle pull-left ]" src="img\uploadedpfp\defaultpictest.png" alt="" />
          <h3><?php echo "$userdata[First_Name] $userdata[Last_Name]"; ?></h3>
          <h5><span>06/69/6969</span> </h5>
        </div>
        <div class="panel-body">
          <p>Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako </p>
        </div>
        <div class="panel-footer">
          <button type="button" class="[ btn btn-default ]"><i class="fa fa-thumbs-up fa-1x like" aria-hidden="true"></i></button>
          <button type="button" class="[ btn btn-default ]">Comment</button>
        </div>
      </div>
      <div class="[ panel panel-default ] panel-post">
        <div class="panel-post-tags">
          <ul>
            <li>Post Regular</li>
            <li>Post Event</li>
            <li>Post Poll</li>
          </ul>
        </div>
        <div class="panel-heading">
          <img class="[ img-circle pull-left ]" src="img\uploadedpfp\defaultpictest.png" alt="" />
          <h3><?php echo "$userdata[First_Name] $userdata[Last_Name]"; ?></h3>
          <h5><span>06/69/6969</span> </h5>
        </div>
        <div class="panel-body">
          <p>Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako </p>
        </div>
        <div class="panel-footer">
          <button type="button" class="[ btn btn-default ]"><i class="fa fa-thumbs-up fa-1x like" aria-hidden="true"></i></button>
          <button type="button" class="[ btn btn-default ]">Comment</button>
        </div>
      </div>
      <div class="[ panel panel-default ] panel-post">
        <div class="panel-post-tags">
          <ul>
            <li>Post Regular</li>
            <li>Post Event</li>
            <li>Post Poll</li>
          </ul>
        </div>
        <div class="panel-heading">
          <img class="[ img-circle pull-left ]" src="img\uploadedpfp\defaultpictest.png" alt="" />
          <h3><?php echo "$userdata[First_Name] $userdata[Last_Name]"; ?></h3>
          <h5><span>06/69/6969</span> </h5>
        </div>
        <div class="panel-body">
          <p>Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako Biot ako
            Biot ako Biot ako </p>
        </div>
        <div class="panel-footer">
          <button type="button" class="[ btn btn-default ]"><i class="fa fa-thumbs-up fa-1x like" aria-hidden="true"></i></button>
          <button type="button" class="[ btn btn-default ]">Comment</button>
        </div>
      </div>
    </div>
    <div class="sidebar-right"></div>
  </div>

</body>
<footer></footer>

</html>