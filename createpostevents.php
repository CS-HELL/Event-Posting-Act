<?php
include("php/sessionHandler.php");
include("header/htmlheader.php");
?>

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
                    <div class="middle-contentd" id="mid-content">
                        <div class="form-group">

                            <span class="col-md-2 text-center"></span>

                            <div class="col-md-8">

                                <form id="event_post" method="post">
                                    <h2>Create Event Post</h2>
                                    <input id="fname" name="name" type="text" placeholder="Title (Required)" autocomplete="off" class="form-control">

                                    <label class="label">Location</label>
                                    <input list="browsers" name="browser" class="form-control">
                                    <datalist id="browsers">
                                        <option value="Virtual">
                                    </datalist>

                                    <label class="label">Event Start:</label>
                                    <input type="datetime-local" id="eventstartdatetime" class="form-control" placeholder="Start Date Time (Required)">

                                    <label class="label">Event Ends:</label>
                                    <input type="datetime-local" id="eventenddatetime" class="form-control" placeholder="End Date Time (Required)">

                                    <label class="label">Event Details:</label>
                                    <textarea class="form-control" id="eventdetails" placeholder="Insert Event Details" rows="7"></textarea>

                                    <label class="label">Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile">
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>

                                    &nbsp;
                                    <input type="submit" id="submitbutton" class="posteventbtn">Post Event</input>

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









</body>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="js/navigationscript.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script type="text/javascript" language="javascript" src="js/createposteventsscript.js"></script>

<footer></footer>

</html>