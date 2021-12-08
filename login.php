<?php
include("header/htmlheader.php");
?>

<body style="overflow: hidden;">
    <header><a class="name" href="index.php">AsTronK</a>
        <ul class="navigation">
            <li><a class="ahref" href="#">Main Page</a></li>
            <li><a class="ahref" href="#">About Us</a></li>
        </ul>
    </header>

    <div class="main-container" id="blur">

        <div class="login-form">
            <h1>Login<br></h1>
            <form>
                <!-- <form action="php/loginHandler.php" method="POST"> -->
                <<div class="field"><input type="text" id="username" name="username" autocomplete="off" required><label>
                    <i class="fa fa-user fa-fw" aria-hidden="true"></i>&nbsp;Username</label><span></span></div>

                <div class="field"><input type="password" id="password" name="password" required><label>
                    <i class="fa fa-key fa-fw" aria-hidden="true"></i>&nbsp;Password</label><span></span></div>
                <span id="loginstatus"></span>
                <span id="loginmessage"></span>
                <button type="button" id="loginbutton">Confirm</button>
                <div class="register-link">
                    Don't have an account?
                    <a href="#" id="regFormButton">Register</a>
                </div>

            </form>
        </div>
    </div>
    <div class="registration-form" id="popup">
        <div class="login-link">
            <a href="#" id="loginFormButton"><i class="fa fa-arrow-circle-left" style="font-size:40px"></i></a>
        </div>
        <h1>Create your Account</h1>
        <form>
            <div class="field"><input type="text" id="r-username" name="r-username" autocomplete="nope" required><label>Username</label><span></span></div>
            <div class="field"><input type="file" id="r-image" name="r-image"><label></label><span></span></div>
            <div class="field"><input type="text" id="r-first-name" name="r-first-name" autocomplete="nope" required><label>First Name</label><span></span></div>
            <div class="field"><input type="text" id="r-last-name" name="r-last-name" autocomplete="nope" required><label>Last Name</label><span></span></div>
            <div class="field"><input type="email" id="r-email" name="r-email" autocomplete="nope" required><label>Email</label><span></span></div>
            <div class="field"><input type="password" id="r-password" name="r-password" required><label>Password</label><span></span></div>
            <div class="field"><input type="password" id="r-cpassword" name="r-cpassword" required><label>Confirm Password</label><span></span></div>
            <span id="regstatus"></span>
            <span id="regmessage"></span>
            <button type="button" id="register">Register</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/loginscript.js"></script>

</body>

<footer></footer>

</html>