<?php

    include("dbconnectionHandler.php");
    include("functions.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        
        $firstname = $_POST['r-first-name'];
        $lastname = $_POST['r-last-name'];
        $username = $_POST['r-username'];
        $password = md5($_POST['r-password']);

        $img_name = $_FILES['r-image']['name'];
        $img_size = $_FILES['r-image']['size'];
        $tmp_name = $_FILES['r-image']['tmp_name'];
        $error = $_FILES['r-image']['error'];

        $date = date('m/d/Y');
        $about = 'Add a little something about yourself.';

        if($error === 0){
            if($img_size > 125000){
                $em = "largefile";
                echo $em;
            } else {
                $img_ext = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ext_lc = strtolower($img_ext);

                $allowed_exts = array('jpg', 'png', 'jpeg');

                if(in_array($img_ext_lc, $allowed_exts)){
                    $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                    $img_upload_path = "../img/uploadedpfp/".$new_image_name;
                    move_uploaded_file($tmp_name, $img_upload_path);

                    $sql = "INSERT INTO accounts (Username, Profile_Pic, Password, First_Name, Last_Name, Account_Creation_Date, About) VALUES ('$username', '$new_img_name', '$password', '$firstname', '$lastname', '$date', '$about')";
                    $con -> query($sql);
                    echo 'success';

                } else {
                    $em = "invalidext";
                    echo $em;
                }
            }
        } else {
            $em = "unknownerror"; 
            echo $em;
        }
    }else {
        echo "error";
    }
?>