<?php
include("php/sessionHandler.php");
include("header/htmlheader.php");
?>
<!-- Andres -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<body id="createcommunitypost">

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
        <div class="row">
            <div class="col-sm" id="col-left">

            </div>
            <div class="col-sm-12 my-auto">
                <div class="middle-contentd" id="mid-content">
                    <div class="middle-contentd" id="mid-content">
                        <div class="form-group">

                            <span class="col-md-2 text-center"></span>

                            <div class="col-md-8">

                                <form id="event_post" method="post">
                                    <h2>Create Community Post</h2>
                                    <h6>Current Date and Time is <span id='date-time'></span>.</h6>
                                    <script>
                                        var dt = new Date();
                                        document.getElementById('date-time').innerHTML = dt;
                                    </script>
                                    <input id="posttitle" name="name" type="text" placeholder="Title (Required)" autocomplete="off" class="form-control">

                                    <label class="label">Details:</label>
                                    <textarea class="form-control" id="eventdetails" placeholder="Insert Event Details" rows="7"></textarea>

                                    &nbsp;
                                    <button type="button" id="validate" class="posteventbtn" data-toggle="modal" data-target="#exampleModalCenter">Post</button>

                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background-color: #313a5c; padding-top: 10%;">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="font-family: Verdana, Arial, Helvetica, sans-serif;">
                                                    <h3 style="color: black;">Post Details:</h3>
                                                    <br>
                                                    <p style="overflow-wrap: break-word; font-style: bold;">Title: </p>
                                                    <p style="overflow-wrap: break-word;" id="titlever">Empty</p>

                                                    <p style="font-style: bold;">Details: </p>
                                                    <p style="overflow-wrap: break-word;" id="detver">Empty</p>
                                                    <br>
                                                    <p>NOTICE: When you successfully submit the post, you will be redirected to the main page.</p>
                                                    <br>
                                                    <label style="color: red;" class="label" id="statusmessage"></label>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" id="submitbutton" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm" id="col-right">

            </div>
        </div>
    </div>


    <script type="text/javascript" language="javascript" src="js/jquery-3.6.0.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->






</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="js/navigationscript.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script type="text/javascript" language="javascript" src="js/createcommunitypostscript.js"></script>

<footer></footer>

</html>