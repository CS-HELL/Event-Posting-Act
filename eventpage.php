<?php

include("header/htmlheader.php");
?>

<body id="eventpage">



  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <header>
    <a class="name" href="index.php">AsTronK</a>
    <ul class="navigation">
      <li><a class="ahref" href="#"><i class="fa fa-bars" style="font-size:23px;"></i></a>
        <ul>
          <li><a class="ahref" href="index.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;<span>Home</span></a></li>
          <li><a class="ahref" href="#"><i class="fa fa-user-circle fa-fw" aria-hidden="true"></i>&nbsp;<span>Profile</span></a></li>
          <li><a class="ahref" href="php/logoutHandler.php"><i class="fa fa-sign-out-alt fa-fw" aria-hidden="true"></i>&nbsp;<span>Sign Out</span></a></li>
        </ul>
      </li>
    </ul>
  </header>

  <div class="events py-5"">
  <div class=" container">
    <!-- Row  -->
    <div class="row justify-content-center">
      <!-- Column -->
      <div class="col-md-8 text-center">

        <h1 class="my-3">Ongoing Events</h1>
        <h6 class="subtitle font-weight-normal">You can relay on our amazing features list and also our customer services will be great experience for you without doubt</h6>
      </div>
      <!-- Column -->
      <!-- Column -->
    </div>
    <div class="row-mt-4" id="ongoing-events-row">
      <!-- Column -->

      <!-- Column -->

    </div>
  </div>




  <div class="container">
    <!-- Row  -->
    <div class="row justify-content-center">
      <!-- Column -->
      <div class="col-md-8 text-center">

        <h1 class="my-3">Upcoming Events</h1>
        <h6 class="subtitle font-weight-normal">You can relay on our amazing features list and also our customer services will be great experience for you without doubt</h6>
      </div>
      <!-- Column -->
      <!-- Column -->
    </div>
    <div class="row-mt-4" id="upcoming-events-row">
      <!-- Column -->

    </div>
  </div>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="js/navigationscript.js"></script>
  <script type="text/javascript" language="javascript" src="js/eventscript.js"></script>


</body>

<footer></footer>

</html>