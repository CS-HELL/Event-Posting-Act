<?php
session_start();
// Madriaga - Andres
include('includes/dbconnectionHandler.php');
include('includes/functions.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $author = $_SESSION['Username'];
    $event_title = $_POST['eventtitle'];
    $event_location = $_POST['eventlocation'];
    $event_description = $_POST['eventdetails'];
    $event_status_default = "live";

    $event_start_date_time = new DateTime($_POST['eventstart']);
    $event_end_date_time = new DateTime($_POST['eventend']);

    $event_start = $event_start_date_time->format('Y-m-d H:i:ss');
    $event_end = $event_end_date_time->format('Y-m-d H:i:ss');

    $img_name = $_FILES['image']['name'];
    $img_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];

    if(isset($_FILES['image'])) {
        if ($error === 0) {
            if ($img_size > 12500000) {
                $em = "largefile";
                echo $em;
            } else {
                $img_ext = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ext_lc = strtolower($img_ext);
    
                $allowed_exts = array('jpg', 'png', 'jpeg');
    
                if (in_array($img_ext_lc, $allowed_exts)) {
                    $new_img_name = uniqid("IMG-", true) . '.' . $img_ext_lc;
                    $img_upload_path = "../img/uploadedeventbanner/" . $new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);
    
                    $result = insert_event($con, $author, $event_title, $event_location, $event_description, $event_start, $event_end, $new_img_name, $event_status_default);
    
                    if ($result === "success") {
                        echo $result;
                        //header('Location: ../eventpage.php');
                    } else {
                        echo $result;
                    }
                } else {
                    $em = "invalidext";
                    echo $em;
                }
            }
        } else {
            $em = "unknownerror";
            echo $em;
        }
    }

} else {
    echo "error";
}

?>