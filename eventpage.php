<?php
include("php/sessionHandler.php");
include("header/htmlheader.php");
?>

<body id="eventpage">

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
        <h1 class="my-3">Events I am in</h1>
        <h6 class="subtitle font-weight-normal">The Apes are astonished that you joined so many events!</h6>
      </div>

    </div>
    <div class="row-mt-4" id="participated-events-row">
      <!-- Dynamic Content ongoing-events-row (JS) -->
    </div>
  </div>



  <div class=" container">
    <!-- Row  -->
    <div class="row justify-content-center">
      <!-- Column -->
      <div class="col-md-8 text-center">
        <h1 class="my-3">Ongoing Events</h1>
        <h6 class="subtitle font-weight-normal">Relay the flame, who will come out victorious? What's this?</h6>
      </div>

    </div>
    <div class="row-mt-4" id="ongoing-events-row">
      <!-- Dynamic Content ongoing-events-row (JS) -->
    </div>
  </div>




  <div class="container">
    <!-- Row  -->
    <div class="row justify-content-center">

      <!-- Column -->
      <div class="col-md-8 text-center">
        <h1 class="my-3">Upcoming Events</h1>
        <h6 class="subtitle font-weight-normal">Wait for the ice to melt and start crushing what's left of it!</h6>
      </div>
    </div>

    <div class="row-mt-4" id="upcoming-events-row">
      <!-- Dynamic Content upcoming-events-row (JS) -->
    </div>

  </div>


  <div class="container">
    <!-- Row  -->
    <div class="row justify-content-center">

      <!-- Column -->
      <div class="col-md-8 text-center">
        <h1 class="my-3">Cancelled Events</h1>
        <h6 class="subtitle font-weight-normal">Ara... Wait for further announcements!</h6>
      </div>
    </div>

    <div class="row-mt-4" id="cancelled-events-row">
      <!-- Dynamic Content upcoming-events-row (JS) -->
    </div>

  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="js/navigationscript.js"></script>
  <script type="text/javascript" language="javascript" src="js/eventpagescript.js"></script>


</body>

<footer></footer>

</html>