<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
</head>

<body style="overflow: hidden;">


    <div class="main-container" id="blur">
        <header><a class="name">AsTronK</a>
            <ul class="navigation">
                <li onclick="scrollto('banner-container');">Register</li>
                <li onclick="scrollto('banner-container');">About Us</li>
            </ul>
        </header>
        <div class="login-form">
            <h1>Login</h1>
            <form>
                <!-- <form action="php/loginHandler.php" method="POST"> -->
                <div class="field"><input type="text" id="username" name="username" autocomplete="off" required><label>Username</label><span></span></div>
                <div class="field"><input type="password" id="password" name="password" required><label>Password</label><span></span></div>
                <span id="loginstatus"></span>
                <span id="loginmessage"></span>
                <button type="button" id="loginbutton">Confirm</button>


                <!-- <div class="register-link">Don't have an account? <a href="registration.php">Register</a></div> -->
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
        <form class="reg-form" action="registration.php" method="post">
            <div class="field"><input type="text" id="r-first-name" name="r-first-name" autocomplete="off"><label>First Name</label><span></span></div>
            <div class="field"><input type="text" id="r-last-name" name="r-last-name" autocomplete="off"><label>Last Name</label><span></span></div>
            <div class="field"><input type="text" id="r-username" name="r-username" autocomplete="off" required><label>Username</label><span></span></div>
            <div class="field"><input type="email" id="r-email" name="r-email" autocomplete="off" required><label>Email</label><span></span></div>
            <div class="field"><input type="password" id="r-password" name="r-password" required><label>Password</label><span></span></div>
            <div class="field"><input type="password" id="r-cpassword" name="r-cpassword" required><label>Confirm Password</label><span></span></div>
            <input type="submit" value="Register" id="register">
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/script.js"></script>

</body>

<footer></footer>

</html>