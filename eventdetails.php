<?php
include("php/sessionHandler.php");
include("header/htmlheader.php");
?>
<!-- Andres -->
<body id="eventdetails">

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
    <div class="container">
        <div class="event-details tx-13">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="event-header">
                        <div class="cover">
                            <div class="gray-shade">

                                <div class="back-link">
                                    <a href="eventpage.php" id="loginFormButton"><i class="fa fa-arrow-circle-left" style="font-size:40px"></i></a>

                                </div>
                            </div>
                            <div class="cover-body d-flex justify-content-between align-items-center">
                                <div>
                                    <img class="event-pic" id="event-pic" alt="event" style="border-radius: 40px;">
                                    <span class="event-name" id="event-name"></span>
                                </div>

                            </div>
                        </div>
                        <div class="header-links">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row event-body">
                <!-- left wrapper start -->
                <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
                    <div class="card rounded">
                        <div class="card-body">
                            <div class="mt-3">
                                <h5>Event Duration:</h5>
                                <p id="eventStart">Start: </p>
                                <p id="eventEnd">End: </p>
                                <br>
                            </div>
                            <div class="mt-3">
                                <h5>Event by:</h5>
                                <p id="eventAuthor"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- left wrapper end -->
                <!-- middle wrapper start -->
                <div class="col-md-8 col-xl-6 middle-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="card rounded">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="ml-2">
                                            <h5>DETAILS:</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p id="eventDetails">
                                    
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- middle wrapper end -->
                <!-- right wrapper start -->
                <div class="d-none d-xl-block col-xl-3 right-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="card rounded" id="cardrounded">
                                
                                <br>
                                <button id="participants" style="background: rgb(182, 182, 182);" type="button" class="[ btn btn-default ]" data-toggle="modal" data-target="#participantsModal">Participants</button>"
                    
                            </div>
                        </div>
                    </div>
                    <!-- right wrapper end -->
                </div>
            </div>
        </div>

        
                            <div class="modal fade" id="validateJoinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background-color: #313a5c; padding-top: 10%;">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="font-family: Verdana, Arial, Helvetica, sans-serif;">
                                            <h3 style="color: black;">Are you sure you want to join this event?</h3>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" id="verifyjoin" class="btn btn-primary">Verify</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="validateUnjoinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background-color: #313a5c; padding-top: 10%;">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="font-family: Verdana, Arial, Helvetica, sans-serif;">
                                            <h3 style="color: black;">Are you sure you want to leave this event?</h3>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" id="verifyunjoin" class="btn btn-primary">Verify</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="participantsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background-color: #313a5c; padding-top: 10%;">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" id="modal-body" style="font-family: Verdana, Arial, Helvetica, sans-serif;">
                                            <h3 style="color: black;">Participants:</h3>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="cancelmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background-color: #313a5c; padding-top: 10%;">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" id="modal-body" style="font-family: Verdana, Arial, Helvetica, sans-serif;">
                                            <h3 style="color: black;">Area you sure you want to cancel this event?</h3>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" id="verifycancel" class="btn btn-primary">Verify</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background-color: #313a5c; padding-top: 10%;">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" id="modal-body" style="font-family: Verdana, Arial, Helvetica, sans-serif;">
                                            <h3 style="color: black;">Area you sure you want to permanently delete this event?</h3>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" id="verifydelete" class="btn btn-primary">Verify</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="recovermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background-color: #313a5c; padding-top: 10%;">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" id="modal-body" style="font-family: Verdana, Arial, Helvetica, sans-serif;">
                                            <h3 style="color: black;">Area you sure you want to recover this cancelled event?</h3>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" id="verifyrecover" class="btn btn-primary">Verify</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="js/navigationscript.js"></script>
<script type="text/javascript" language="javascript" src="js/eventdetailsscript.js"></script>

<footer></footer>

</html>