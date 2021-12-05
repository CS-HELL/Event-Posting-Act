
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/header.css">
</head>
<header><a class="name">AsTronK</a>
    <ul class="navigation">
        <li onclick="scrollto('banner-container');">Register</li>
        <li onclick="scrollto('banner-container');">About Us</li>
    </ul>
</header>


<body>
    <div class="main-container">
        <div class="login-form">
            <h1>Login</h1>
            <form>
                <!-- <form action="php/loginHandler.php" method="POST"> -->
                <div class="field"><input type="text" id="username" name="username" autocomplete="off"
                        required><label>Username</label><span></span></div>
                <div class="field"><input type="password" id="password" name="password"
                        required><label>Password</label><span></span></div>
                <span id="loginstatus"></span>
                <span id="loginmessage"></span>
                <button type="button" id="loginbutton">Confirm</button>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script type="text/javascript" language="javascript" src="js/script.js"></script>

                <div class="register-link">Don't have an account? <a href="registration.php">Register</a></div>
            </form>
        </div>
    </div>
</body>>

<footer></footer>

</html>