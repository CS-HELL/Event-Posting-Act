<?php
session_start();

include("php/dbconnectionHandler.php");
include("php/functions.php");

$userdata = check_login($con);
?>