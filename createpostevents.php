<?php
include("php/sessionHandler.php");
include("header/htmlheader.php");
?>
<!-- Andres -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<body id="createpostevents">

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

                    <div class="form-group">

                        <span class="col-md-2 text-center"></span>

                        <div class="col-md-8">


                            <h2>Create Event Post</h2>
                            <input id="eventtitle" name="eventtitle" type="text" placeholder="Title (Required)" autocomplete="off" class="form-control">

                            <label class="label">Location</label>
                            <input list="eventlocation" id="eventlocation" name="eventlocation" class="form-control">
                            <datalist id="eventlocation2">
                                <option value="Virtual">
                            </datalist>

                            <label class="label">Event Start:</label>
                            <input type="datetime-local" name="eventstartdatetime" id="eventstartdatetime" class="form-control" placeholder="Start Date Time (Required)">

                            <label class="label">Event Ends:</label>
                            <input type="datetime-local" name="eventenddatetime" id="eventenddatetime" class="form-control" placeholder="End Date Time (Required)">

                            <label class="label">Event Details:</label>
                            <textarea class="form-control" name="eventdetails" id="eventdetails" placeholder="Insert Event Details" rows="7"></textarea>

                            <label class="label">Image</label>

                            <input style="color: white; "type="file" name="image" id="image">


                            <br>
                            <button type="button" id="validate" class="posteventbtn" data-toggle="modal" data-target="#exampleModalCenter">Host Event</button>

                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background-color: #313a5c; padding-top: 10%;">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="font-family: Verdana, Arial, Helvetica, sans-serif;">
                                            <h3 style="color: black;">Are you sure you want to submit this event?</h3>
                                            <h3 style="color: black;">Details:</h3>
                                            <br>
                                            <p style="overflow-wrap: break-word; font-style: bold;">Title: </p>
                                            <p style="overflow-wrap: break-word;" id="titlever">Empty</p>

                                            <p style="font-style: bold;">Location: </p>
                                            <p id="locationver">Empty</p>

                                            <p style="font-style: bold;">Start Date: </p>
                                            <p id="startver">Empty</p>

                                            <p style="font-style: bold;">End Date: </p>
                                            <p id="endver">Empty</p>

                                            <p style="font-style: bold;">Details: </p>
                                            <p style="overflow-wrap: break-word;" id="detver">Empty</p>

                                            <p style="font-style: bold;">Image name: </p>
                                            <p style="overflow-wrap: break-word;" id="imagever">Empty</p>
                                            <br>
                                            <p>NOTICE: When you successfully submit the event, you will be redirected to the event page.</p>
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

                        </div>
                    </div>


                </div>
            </div>



            <div class="col-sm" id="col-right">

            </div>
        </div>
    </div>

</body>

<script type="text/javascript" language="javascript" src="js/jquery-3.6.0.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="js/navigationscript.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script type="text/javascript" language="javascript" src="js/createposteventsscript.js"></script>

<footer></footer>

</html>