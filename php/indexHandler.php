
<?php
session_start();
include('dbconnectionHandler.php');
include('functions.php');


    $userdata = get_userdata($con);
    $img_path = "img/uploadedpfp/".$userdata['Profile_Pic'];

    echo <<<END
      <center>
        <img src="$img_path"><br><br>
        <h3>$userdata[Username]</h3>
        <span></span>
      </center>
      <br>
      <a href="#"><i class="fa fa-home"></i><span>Home</span></a>
      <a href="#"><i class="fa fa-pen-alt"></i><span>Post Now</span></a>
      <a href="#"><i class="fa fa-pied-piper-square"></i><span>My Posts</span></a>
      <a href="#"><i class="fa fa-dungeon"></i><span>Manage Events</span></a>
      END;
?>
