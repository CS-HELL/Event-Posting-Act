<?php
session_start();

include("php/dbconnectionHandler.php");
include("php/functions.php");

$userdata = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/styles.css">
</head>

<header><a class="name">Apes</a>
  <ul class="navigation">
    <li onclick="index.php">Home</li>
    <li><a href="php/logoutHandler.php">Log Out</a></li>
  </ul>
</header>

<body>
  <section>
    <div class="rt-container">
      <div class="col-rt-12">
        <div class="Scriptcontent">

          <!-- Student Profile -->
          <div class="user-profile py-4">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card shadow-sm">
                    <div class="card-header bg-transparent text-center">
                      <img class="profile_img" src="img/defaultpictest.png" alt="Gawr Gura">
                      <h3>-INSERT NAME HERE-</h3>
                    </div>
                    <div class="card-body">
                      <p class="mb-0"><strong class="pr-1">Account ID:</strong>-INSERT-</p>
                      <p class="mb-0"><strong class="pr-1">Account Creation Date:</strong>-INSERT-</p>
                      <p class="mb-0"><strong class="pr-1">About:</strong>-INSERT-</p>
                      <p class="mb-0"><strong class="pr-1">Likes:</strong>-INSERT-</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="card shadow-sm">
                    <div class="card-header bg-transparent border-0">
                      <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Posts Regular</h3>
                      <p>Pangets Lods</p>
                    </div>
                  </div>

                  <div style="height: 26px"></div>
                  <div class="card shadow-sm">
                    <div class="card-header bg-transparent border-0">
                      <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Posts Polls</h3>
                    </div>
                    <div class="card-body pt-0">
                      <p>Ano next???</p>
                    </div>
                  </div>
                  <div style="height: 26px"></div>
                  <div class="card shadow-sm">
                    <div class="card-header bg-transparent border-0">
                      <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Posts Events</h3>
                    </div>
                    <div class="card-body pt-0">
                      <p>Ano next???</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
<script src="js/index.js" type="text/javascript"></script>