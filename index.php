<?php include("php/sessionHandler"); ?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<header><a class="name">Apes</a>
    <ul class="navigation">
        <li><a class="ahref" href="index.php">Home</a></li>
        <li><a class="ahref" href="php/logoutHandler.php">Log Out</a></li>
    </ul>
</header>

<body>
    <div class="main-container">
        Hello, <?php echo "<h1>$userdata[First_Name]</h1>"; ?>
    </div>
</body>

<footer></footer>

</html>
<script src="js/index.js" type="text/javascript"></script>