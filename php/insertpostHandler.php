<?php 
session_start();

include('includes/dbconnectionHandler.php');
include('includes/functions.php');

$author = $_SESSION['Username'];
$event_title = $_POST['eventtitle'];
$event_location = $_POST['eventlocation'];
$event_description = $_POST['eventdetails'];

$event_start_date_time = new DateTime($_POST['eventstartdatetime']);
$event_end_date_time = new DateTime($_POST['eventstartdatetime']);

$event_start = $event_start_date_time->format('Y-m-d H:i:ss');
$event_end = $event_start_date_time->format('Y-m-d H:i:ss');

$output_dir = "img/uploadedeventbanner";

if(isset($_FILES['image'])){
    $RandomNum = time();
	$ImageName = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));
	$ImageType = $_FILES['image']['type'][0];
 
	$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
	$ImageExt = str_replace('.','',$ImageExt);
	$ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
	$NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
    $ret[$NewImageName]= $output_dir.$NewImageName;
	            
	move_uploaded_file($_FILES["image"]["tmp_name"][0],$output_dir."/".$NewImageName );
    $result = insert_event($con, $author, $event_title, $event_location, $event_description, $event_start, $event_end, $img);

    if($result === "Success"){
        echo $result;
    } else {
        echo $result;
    }
}

	


?>
