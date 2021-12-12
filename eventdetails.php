<?php
include("php/sessionHandler.php");
include("header/htmlheader.php");
?>

<body id="eventdetails">

    <header>
        <a class="name" href="index.php">AsTronK</a>
        <ul class="navigation">
            <li><a class="ahref" href="#"><i class="fa fa-bars" style="font-size:23px;"></i></a>
                <ul>
                    <li><a class="ahref" href="index.php"><i class="fa fa-home fa-fw"
                                aria-hidden="true"></i>&nbsp;<span>Home</span></a></li>
                    <li><a class="ahref" href="#"><i class="fa fa-user-circle fa-fw"
                                aria-hidden="true"></i>&nbsp;<span>Profile</span></a></li>
                    <li><a class="ahref" href="php/logoutHandler.php"><i class="fa fa-sign-out-alt fa-fw"
                                aria-hidden="true"></i>&nbsp;<span>Sign Out</span></a></li>
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

                                <!-- <div class="registration-form" id="popup"> -->
                                <div class="back-link">
                                    <a href="#" id="loginFormButton"><i class="fa fa-arrow-circle-left"
                                            style="font-size:40px"></i></a>
                                    <!-- </div> -->
                                    
                                </div>
                            </div>
                            <div class="cover-body d-flex justify-content-between align-items-center">
                                <div>
                                    <img class="event-pic" src="https://www.pngrepo.com/png/190685/512/calendar.png"
                                        alt="event">
                                    <span class="event-name">EVENT NAME</span>
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
                                <p>test</p>
                            </div>
                            <div class="mt-3">
                                <h5>People Responded:</h5>
                                <p>test</p>
                            </div>
                            <div class="mt-3">
                                <h5>Event by:</h5>
                                <p>test</p>
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
                                    <p>Ok
                                        vrodwquibbaslddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
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
                            <div class="card rounded">
                                <div class="card-body">
                                    <h6 class="card-title">TEST</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- right wrapper end -->
                </div>
            </div>
        </div>


</body>

<footer></footer>

</html>