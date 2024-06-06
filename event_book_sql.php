<?php
if(isset($_POST['event_name']) && isset($_POST['event_type']) && isset($_POST['event_space']) && isset($_POST['event_no_people']) && isset($_POST['event_food'])){
    $event_name = $_POST['event_name'];
    $event_type = $_POST['event_type'];
    $event_start_time = $_POST['event_start_time'];
    $event_End_time = $_POST['event_End_time'];
    $event_date = $_POST['event_date'];
    $event_space = $_POST['event_space'];
    $event_no_people = $_POST['event_no_people'];
    $event_food = $_POST['event_food'];
    $specialreq = $_POST['requests'];
    $house_no = $_POST['house_no'];
    $additionalFacilities = "";

    $cost_event = intval(800 * intval($event_no_people));
    if(isset($_POST['audio-visual'])){
        $cost_event = $cost_event + 200;
        if ($additionalFacilities == ""){
            $additionalFacilities = $additionalFacilities . $_POST['audio-visual'];
        }
        else{
            $additionalFacilities = $additionalFacilities . ", " . $_POST['audio-visual'];
        }
    }
    if(isset($_POST['chairs-tables'])){
        if ($additionalFacilities == ""){
            $additionalFacilities = $additionalFacilities . $_POST['chairs-tables'];
        }
        else{
            $additionalFacilities = $additionalFacilities . ", " . $_POST['chairs-tables'];
        }
    }
    if(isset($_POST['decorations'])){
        $cost_event = $cost_event + 200;
        if ($additionalFacilities == ""){
            $additionalFacilities = $additionalFacilities . $_POST['decorations'];
        }
        else{
            $additionalFacilities = $additionalFacilities . ", " . $_POST['decorations'];
        }
    }
    if(isset($_POST['photography-videography'])){
        $cost_event = $cost_event + 500;
        if ($additionalFacilities == ""){
            $additionalFacilities = $additionalFacilities . $_POST['photography-videography'];
        }
        else{
            $additionalFacilities = $additionalFacilities . ", " . $_POST['photography-videography'];
        }
    }
    if(isset($_POST['event-staff'])){
        $cost_event = $cost_event + 500;
        if ($additionalFacilities == ""){
            $additionalFacilities = $additionalFacilities . $_POST['event-staff'];
        }
        else{
            $additionalFacilities = $additionalFacilities . ", " . $_POST['event-staff'];
        }
    }
    if(isset($_POST['projector-screen'])){
        $cost_event = $cost_event + 200;
        if ($additionalFacilities == ""){
            $additionalFacilities = $additionalFacilities . $_POST['projector-screen'];
        }
        else{
            $additionalFacilities = $additionalFacilities . ", " . $_POST['projector-screen'];
        }
    }
    if(isset($_POST['childrens-play-area'])){
        $cost_event = $cost_event + 4000;
        if ($additionalFacilities == ""){
            $additionalFacilities = $additionalFacilities . $_POST['childrens-play-area'];
        }
        else{
            $additionalFacilities = $additionalFacilities . ", " . $_POST['childrens-play-area'];
        }
    }
    if(isset($_POST['party-supplies'])){
        $cost_event = $cost_event + 1000;
        if ($additionalFacilities == ""){
            $additionalFacilities = $additionalFacilities . $_POST['party-supplies'];
        }
        else{
            $additionalFacilities = $additionalFacilities . ", " . $_POST['party-supplies'];
        }
    }
    if($event_food == 'yes'){
        $cost_event = $cost_event + (1000 * intval($event_no_people));
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
    $dbname = "dbms_project";
    mysqli_select_db($conn , $dbname);
    $table_name = "EventBooking";
    $insert_query = 
    "INSERT INTO $table_name (Name_event, Type, StartTime, EndTime, Date_event, Facilities, event_space, Attendees, FoodCatering, Requests, cost_event, house_no) VALUES
    ('$event_name', '$event_type', '$event_start_time', '$event_End_time', '$event_date',  '$additionalFacilities' , '$event_space', '$event_no_people', '$event_food', '$specialreq', '$cost_event', '$house_no')";
    mysqli_query($conn, $insert_query) or die(mysqli_error($conn)); 

    $alert = 
        "<script type='text/javascript'>
        alert('Event Added');
        window.location.href='event.php';
        </script>";
    echo $alert;

}
?>

