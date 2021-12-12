<?php 

include('includes/dbconnectionHandler.php');
include('includes/functions.php');

if (isset($_POST['event'])) {

    $eventsResult = retrieve_event_posts($con);

    switch ($_POST['event']) {
        
        case 'ongoingEvents':

            $ongoingeventsArray = array();
            $date_default_timezone_set = ('Philippines');
            $date_today = date('Y-m-d H:m:s');
            
            if(mysqli_num_rows($eventsResult) > 0) {
                

                while($ongoing_eventData = mysqli_fetch_assoc($eventsResult)) {
                    $event_start_date_time = new DateTime($ongoing_eventData['event_start_date_time']);
                    $event_end_date_time = new DateTime($ongoing_eventData['event_end_date_time']);

                    $formatted_event_start_date_time = $event_start_date_time->format('Y-m-d H:m:s');
                    $formatted_event_end_date_time = $event_end_date_time->format('Y-m-d H:m:s');
                    
                    if(($date_today >= $formatted_event_start_date_time) && ($date_today <= $formatted_event_end_date_time)) { 
                        $ongoingeventsArray[] = mb_convert_encoding($ongoing_eventData, 'UTF-8', 'UTF-8');
                    }
                    
                }

                echo json_encode($ongoingeventsArray);
                
            } else {
                // TBD
            }

            break;

        case 'upcomingEvents':

            $upcomingEvents = array();
            $date_default_timezone_set = ('Philippines');
            $date_today = date('Y-m-d H:m:s');
            
            if(mysqli_num_rows($eventsResult) > 0) {
                

                while($ongoing_eventData = mysqli_fetch_assoc($eventsResult)) {
                    $event_start_date_time = new DateTime($ongoing_eventData['event_start_date_time']);
                    $event_end_date_time = new DateTime($ongoing_eventData['event_end_date_time']);

                    $formatted_event_start_date_time = $event_start_date_time->format('Y-m-d H:m:s');
                    $formatted_event_end_date_time = $event_end_date_time->format('Y-m-d H:m:s');
                    
                    if($date_today < $formatted_event_start_date_time) { 
                        $upcomingEvents[] = mb_convert_encoding($ongoing_eventData, 'UTF-8', 'UTF-8');
                    }
                    
                }

                echo json_encode($upcomingEvents);
                
            } else {
                // TBD
            }

            break;

    }
    
} else if (isset($_POST['event_post_url_id'])) {
    $event_post_id = $con->real_escape_string($_POST['event_post_url_id']);
    $eventpostsResult = retrieve_event_posts($con);
    
    if(mysqli_num_rows($eventpostsResult) > 0) {
        while($eventData = mysqli_fetch_assoc($eventpostsResult)) {
            if($event_post_id == $eventData['event_post_id']) {
                echo json_encode(mb_convert_encoding($eventData, 'UTF-8', 'UTF-8'));
            }
        }
    } else {
      
    }

} else {

}






?>