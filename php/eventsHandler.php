<?php 

include('includes/dbconnectionHandler.php');
include('includes/functions.php');

if (isset($_GET['retrieveEventPosts'])) {

    $eventsResult = retrieve_event_posts($con);
    $date_default_timezone_set = ('Philippines');
    $date_today = date('Y-m-d H:i:ss');

    switch ($_GET['retrieveEventPosts']) {
        
        case 'ongoingEventsDetails':

            $ongoingeventsArray = array();
            

            if(mysqli_num_rows($eventsResult) > 0) {
                

                while($ongoing_eventData = mysqli_fetch_assoc($eventsResult)) {
                    $event_start_date_time = new DateTime($ongoing_eventData['event_start_date_time']);
                    $event_end_date_time = new DateTime($ongoing_eventData['event_end_date_time']);

                    $formatted_event_start_date_time = $event_start_date_time->format('Y-m-d H:i:ss');
                    $formatted_event_end_date_time = $event_end_date_time->format('Y-m-d H:i:ss');
                    
                    if(($date_today >= $formatted_event_start_date_time) && ($date_today <= $formatted_event_end_date_time)) { 
                        $ongoingeventsArray[] = mb_convert_encoding($ongoing_eventData, 'UTF-8', 'UTF-8');
                    }
                    
                }

                echo json_encode($ongoingeventsArray);
                
            } else {
                // TBD
            }

            break;

        case 'upcomingEventsDetails':

            $upcomingEvents = array();
            
            if(mysqli_num_rows($eventsResult) > 0) {

                
                while($ongoing_eventData = mysqli_fetch_assoc($eventsResult)) {
                    $event_start_date_time = new DateTime($ongoing_eventData['event_start_date_time']);
                    $event_end_date_time = new DateTime($ongoing_eventData['event_end_date_time']);

                    $formatted_event_start_date_time = $event_start_date_time->format('Y-m-d H:i:ss');
                    $formatted_event_end_date_time = $event_end_date_time->format('Y-m-d H:i:ss');
                    
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
    
} else if (isset($_POST['eventPost_ID'])) {
    $event_post_id = $con->real_escape_string($_POST['eventPost_ID']);
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