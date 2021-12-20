<?php
session_start();
include('includes/dbconnectionHandler.php');
include('includes/functions.php');

if (isset($_GET['retrieveEventPosts'])) {

    $eventsResult = retrieve_event_posts($con);
    $date_default_timezone_set = ('Philippines');
    $date_today = date('Y-m-d H:i:s');

    switch ($_GET['retrieveEventPosts']) {

        case 'ongoingEventsDetails':

            $ongoingeventsArray = array();


            if (mysqli_num_rows($eventsResult) > 0) {


                while ($ongoing_eventData = mysqli_fetch_assoc($eventsResult)) {
                    $event_start_date_time = new DateTime($ongoing_eventData['event_start_date_time']);
                    $event_end_date_time = new DateTime($ongoing_eventData['event_end_date_time']);

                    $formatted_event_start_date_time = $event_start_date_time->format('Y-m-d H:i:s');
                    $formatted_event_end_date_time = $event_end_date_time->format('Y-m-d H:i:s');

                    if (($date_today >= $formatted_event_start_date_time) && ($date_today <= $formatted_event_end_date_time) && ($ongoing_eventData['event_status'] === 'live')) {
                        $ongoingeventsArray[] = mb_convert_encoding($ongoing_eventData, 'UTF-8', 'UTF-8');
                    }
                }

                echo json_encode($ongoingeventsArray);
            } else {
                echo "Error";
            }

            break;

        case 'upcomingEventsDetails':

            $upcomingEvents = array();

            if (mysqli_num_rows($eventsResult) > 0) {

                while ($ongoing_eventData = mysqli_fetch_assoc($eventsResult)) {
                    $event_start_date_time = new DateTime($ongoing_eventData['event_start_date_time']);
                    $event_end_date_time = new DateTime($ongoing_eventData['event_end_date_time']);

                    $formatted_event_start_date_time = $event_start_date_time->format('Y-m-d H:i:s');
                    $formatted_event_end_date_time = $event_end_date_time->format('Y-m-d H:i:s');

                    if (($date_today < $formatted_event_start_date_time) && ($ongoing_eventData['event_status'] === 'live')) {
                        $upcomingEvents[] = mb_convert_encoding($ongoing_eventData, 'UTF-8', 'UTF-8');
                    }
                }

                echo json_encode($upcomingEvents);
            } else {
                echo "Error";
            }

            break;

        case 'participatedEventsDetails':

            $myEvents = array();

            $current_user_participant = $_SESSION['Username'];
            $eventids = retrieve_user_events($con, $current_user_participant);

            foreach ($eventids as $value) {
                if ($value['event_status'] === 'live') {
                    $myEvents[] = mb_convert_encoding($value, 'UTF-8', 'UTF-8');
                }
            }
        
            echo json_encode($myEvents);
                
            

            break;
    }
} else if (isset($_POST['getEventPost'])) {
    $event_post_id = $con->real_escape_string($_POST['getEventPost']);
    $eventpostsResult = retrieve_event_posts($con);

    if (mysqli_num_rows($eventpostsResult) > 0) {
        while ($eventData = mysqli_fetch_assoc($eventpostsResult)) {
            if ($event_post_id == $eventData['event_post_id']) {
                echo json_encode(mb_convert_encoding($eventData, 'UTF-8', 'UTF-8'));
            }
        }
    } else {
        echo "Error";
    }
} else if (isset($_POST['getParticipants'])) {
    $event_post_id = $con->real_escape_string($_POST['getParticipants']);
    $eventParticipantsResults = retrieve_participants($con);

    $eventParticipants = array();

    if (mysqli_num_rows($eventParticipantsResults) > 0) {
        while ($eventParticipant = mysqli_fetch_assoc($eventParticipantsResults)) {
            if ($event_post_id == $eventParticipant['event_target_id']) {
                $eventParticipants[] = mb_convert_encoding($eventParticipant, 'UTF-8', 'UTF-8');
            }
        }
        echo json_encode(mb_convert_encoding($eventParticipants, 'UTF-8', 'UTF-8'));
    } else {
        echo "Error";
    }
} else if (isset($_POST['joinEvent'])) {
    $date_today = date('Y-m-d H:i:s');
    $current_user_participant = $_SESSION['Username'];
    $event_post_id = $con->real_escape_string($_POST['joinEvent']);
    $eventjoinParticipantResult = add_currentuser_participant($con, $current_user_participant, $event_post_id, $date_today);

    if ($eventjoinParticipantResult === "success") {
        echo $eventjoinParticipantResult;
    } else {
        echo $eventjoinParticipantResult;
    }
} else if (isset($_POST['unjoinEvent'])) {
    $current_user_participant = $_SESSION['Username'];
    $event_post_id = $con->real_escape_string($_POST['unjoinEvent']);
    $eventleaveParticipantResult = remove_currentuser_participant($con, $current_user_participant, $event_post_id);

    if ($eventleaveParticipantResult === "success") {
        echo $eventleaveParticipantResult;
    } else {
        echo $eventleaveParticipantResult;
    }
} else if (isset($_POST['isParticipant'])) {
    $current_user_participant = $_SESSION['Username'];
    $event_post_id = $con->real_escape_string($_POST['isParticipant']);

    $isParticipant = find_if_currentuser_is_participant($con, $current_user_participant, $event_post_id);

    echo $isParticipant;
} else {
    echo "error";
}
