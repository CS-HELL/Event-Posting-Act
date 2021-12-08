<?php
include("header/htmlheader.php");
?>

<body style="overflow: hidden;">
    <header><a class="name" href="index.php">AsTronK Administration</a>
    </header>

    <div class="main-container" id="blur">

        <div class="login-form">
            <h1><i class="fa fa-users-cog fa-fw fa-3x" aria-hidden="true"></i><br>Login<br></h1>
            <form>
                <!-- <form action="php/loginHandler.php" method="POST"> -->
                <div class="field"><input type="text" id="username" name="username" autocomplete="off" required><label>
                    <i class="fa fa-user fa-fw" aria-hidden="true"></i>&nbsp;Username</label><span></span></div>

                <div class="field"><input type="password" id="password" name="password" required><label>
                    <i class="fa fa-key fa-fw" aria-hidden="true"></i>&nbsp;Password</label><span></span></div>
                    
                <span id="loginstatus"></span>
                <span id="loginmessage"></span>
                <button type="button" id="loginbutton">Confirm</button>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/adminloginscript.js"></script>

</body>

<footer></footer>

</html>