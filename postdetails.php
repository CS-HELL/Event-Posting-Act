<?php
include("header/htmlheader.php");
include("php/sessionHandler.php");
?>
<!-- Videz -->
<body>
    <header>
        <a class="name" href="index.php">AsTronK</a>
        <ul class="navigation">
            <li><a class="ahref" href="#"><i class="fa fa-bars" style="font-size:23px;"></i></a>
                <ul>
                    <li><a class="ahref" href="index.php">Home</a></li>
                    <li><a class="ahref" href="#">Profile</a></li>
                    <li><a class="ahref" href="php/logoutHandler.php"><i class="fa fa-sign-out-alt"></i> Sign Out</a></li>
                </ul>
            </li>
        </ul>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-sm" id="col-left">
                <div class="sidebar-left" id="sidebar-left">
                </div>
            </div>
            <div class="col-sm-6 my-auto">
                <div class="middle-content" id="mid-content">
                    
                </div>
            </div>
            <div class="col-sm" id="col-right">
                <div class="float-left">
                    <div class="sidebar-right"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/navigationscript.js"></script>
    <script type="text/javascript" language="javascript" src="js/postdetailsscript.js"></script>

</body>



<footer></footer>

</html>