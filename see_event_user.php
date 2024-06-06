<?php
session_start(); 
$HouseNum = $_SESSION['house_no'];
?>
<!DOCTYPE html>
<html>
<head>
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
    </script>
    <script> 
        $(function(){
        $("#header").load("header.php"); 
        });
        $(function(){
            $("#nav_bar").load("nav_bar_user.php"); 
           });
    </script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>   
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Montserrat:wght@200;500&family=Poppins:wght@300;800&family=Roboto:wght@300&display=swap');

        *{
            font-family: poppins;
        }
        body{
            background-color: #fdf6e6;
            color: #396e51;
            margin: 0;
            padding: 0;
        }
        .right{
            color: #b8d8e3;
            font-size: larger;
            font-weight: 10px;
            margin-right: 110px;
        }
        .sortypes{
            width: 45px;
            height: 45px;
            border: none;
            border-radius: 45px;
            padding-left: 10px;
            background-color: #b8d8e3;
        }
        .Event_heading{
            text-align: center;
            color: #113946;
            font-size: larger;
            background-color: #d7ceb2;
            width: 200px;
            position: relative;
            left: 45%;
            border-radius: 15px;
        }
        td.userimg img {
            width: 70px;
            height: 70px;
            background-color: #9a9fa1;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.4);
        }
        td.msgTail1 img {
            width: 5px;
            height: 5px;
            background-color: white;
            border-radius: 50%;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.4);
        }
        td.msgTail2 img{
            width: 10px;
            height: 10px;
            background-color: white;
            border-radius: 50%;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.4);
        }
        .event_container{
            background-color: #d7ceb2; 
            max-width: 600px;
            max-height: 200px;
            width: 500px;
            border-radius: 25px;
            padding: 5px 5px 1px 30px;
            margin-bottom: 10%;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.715);
        }
        p.email{
            font-size: 11px;
            font: weight 1px;  
            color: #456c78;  
        }
        #detail{
            margin-bottom: 2px;
        }
        .details{
            text-decoration: none;
            margin-right: 25px;
            color: #113946;
        }
        .EventBooking_details_box_all {
            display: grid;
            grid-template-columns: 1fr;
            align-items: center;
            justify-items: center;
            margin-left: 150px;
            margin-right: 100px;
            margin-top: 30px;
        }
        .EventBooking_details_box{
            background-color: #f3e2c4; 
            width: 100%;
            border-radius: 5px;
            padding-left: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-right: 30px;
            margin-bottom: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            color: #396e51;
            row-gap: 15px;
            justify-content: space-evenly;
        }
        .item_description{
            grid-column: 1 / span 3;
        }
        .page_button {
            width: 540px; 
            height: auto;
            padding: 5px;
            background-color: #E2CBD2;
            border: none;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 1em;
            font-weight: bold;
            color: #3d5e68;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
        }

        .page_button:hover {
            box-shadow: 2px 2px 5px 2px #e7e2d2;
            color: #e7e2d2;
            cursor: pointer;
        }
        .item_facilities{
            grid-column: 1 / span 3;
        }
    
    </style>    
    <div id="header"></div>
</head>
<body>
    <div class="EventBooking_details_box_all">
    <div class="animate__animated animate__fadeInUp">
        <div>
            <h2>
                Your Booked Events
            </h2>
        </div>
        </div>
    <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $conn = mysqli_connect($servername, $username, $password);
                $dbname = "dbms_project";
                mysqli_select_db($conn , $dbname); 
    $table_name = "EventBooking";
    $select_query = "SELECT * FROM $table_name WHERE house_no = '$HouseNum'";
    $data = mysqli_query($conn, $select_query) or die(mysqli_error($conn));
    if (mysqli_num_rows($data) > 0) {
        while ($row = mysqli_fetch_array($data)) {
            echo "<div class='EventBooking_details_box animate__animated animate__fadeInUp'>";
            echo "<div><b>House Number: </b>" . $row["house_no"] . "</div>";
            echo "<div><b>Event Name: </b>" . $row["Name_event"] . "</div>";
            echo "<div><b>Event Type: </b>" . $row["Type"] . "</div>";
            echo "<div><b>Starting Time: </b>" . $row["StartTime"] . "</div>";
            echo "<div><b>Ending Time: </b>" . $row["EndTime"] . "</div>";
            echo "<div><b>Date: </b>" . $row["Date_event"] . "</div>";
            echo "<div><b>Event Space: </b>" . $row["event_space"] . "</div>";
            echo "<div><b>Attendees: </b>" . $row["Attendees"] . "</div>";
            echo "<div><b>Food Catering: </b>" . $row["FoodCatering"] . "</div>";
            echo "<div><b>Event Cost: </b>" . $row["cost_event"] . "</div>";
            if($row["status"] == 'T'){
                $status = "Paid";
            }
            else if($row["status"] == 'F'){
                $status = "Unpaid";
            }
            echo "<div><b>Status: </b>" . $status . "</div>";
            echo "<div class='item_facilities'><b>Facilities: </b>" . $row["Facilities"] . "</div>";
            echo "<div class='item_description'><b>Special Request: </b>" . $row["Requests"] . "</div>";
            echo "</div>";
        }
    } else {
        echo "<div class='EventBooking_details_box animate__animated animate__fadeInUp'>";
        echo "<div>" . "No Booked Events" . "</div>";
        echo "</div>";
    }
    mysqli_close($conn);
    ?>
    <br/><br/><br/><br/>
    </div>
    <div id="nav_bar"></div>
</body>
</html> 
