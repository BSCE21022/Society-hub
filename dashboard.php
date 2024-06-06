<?php
session_start(); 
$HouseNum = $_SESSION['house_no'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Society Hub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
    <script>
    $(function() {
        $("#header").load("header.php");
    });
    $(function() {
        $("#nav_bar").load("nav_bar_user.php");
    });
    </script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Montserrat:wght@200;500&family=Poppins:wght@300;800&family=Roboto:wght@300&display=swap');
    </style>
    <style>
    * {
        font-family: poppins;
    }

    body {
        background-color: #fdf6e6;
        color: #bad7de;
        margin: 0;
        padding: 0;
    }

    .container {
        display: grid;
        grid-template-columns: 2fr 1fr;
        margin-left: 150px;
        margin-top: 30px;
        margin-right: 40px;
        gap: 20px;
    }

    .announcement_container {
        background-color: #f3e2c4;
        border-radius: 8px;
        padding: 10px 40px;
        font-size: large;
        color: #396e51;
        font-weight: 400;
    }

    .announcements {
        padding-left: 30px;
    }

    .main_img {
        width: 100%;
        margin-left: 40px;
        max-width: 250px;
        margin-top: 20px;
        height: auto;
    }


    .second {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 30px;
        font-size: 0.9em;
    }

    .boxes {
        display: grid;
        gap: 60px;
        grid-template-columns: 1fr;
        margin-left: 150px;
        margin-right: 100px;
        margin-top: 40px;
        justify-content: space-evenly;
    }

    .second_box {
        border-radius: 8px;
        background-color: rgb(57, 110, 81, .7);
        color: #faf0e6;
        padding: 12px;
        width: 90%;
        box-shadow: 0 7px 20px #e7e2d2;
        text-decoration: none;
    }

    .second_box:hover {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
        cursor: pointer;
    }

    a:link {
        text-decoration: none;
    }

    h4 {
        text-decoration: underline;
        text-align: center;
        font-size: 1em;
        margin-bottom: 10px;
    }

    .page_button {
        width: 95%;
        height: auto;
        padding: 5px;
        background-color: #f3e2c4;
        border: none;
        border-radius: 5px;
        margin-bottom: 20px;
        font-size: 1em;
        font-weight: bold;
        color: #396e51;
        margin-left: 5px;
    }

    .page_button:hover {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
        cursor: pointer;
    }

    .second_box_text {
        text-decoration: none;
        text-align: center;
    }




    @media screen and (min-width: 600px) {
        .boxes {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media screen and (min-width: 900px) {
        .boxes {
            grid-template-columns: 1fr 1fr 1fr;
        }
    }
    </style>
    <div id="header"></div>
</head>

<body>
    <div class="container">
        <div class="announcement_container animate__animated animate__fadeInUp">
            <h3>Announcements:</h3>
            <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $conn = mysqli_connect($servername, $username, $password);
                    $dbname = "dbms_project";
                    mysqli_select_db($conn , $dbname); 
                    $table_name = "Announcements";
                    $select_query = "SELECT announce_text FROM $table_name";
                    $data = mysqli_query($conn, $select_query) or die(mysqli_error($conn));

                    if (mysqli_num_rows($data) > 0) {
                        while ($row = mysqli_fetch_array($data)) {
                            echo "<p class='announcements'>";
                            echo "∎ ". $row["announce_text"];
                            echo "</p>";
                        }
                    } else {
                        echo "<p class='announcements'>";
                        echo "No new announcements";
                        echo "</p>";
                    }
                ?>
        </div>
        <div class="main_pic">
            <img class="main_img  animate__animated animate__fadeInUp" src="mainimg1.png">
        </div>
    </div>
    <div class="boxes">
        <a href="see_complai_user.php">
            <div class="second_box animate__animated animate__fadeInUp">
                <h4>Complains</h4>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $conn = mysqli_connect($servername, $username, $password);
                $dbname = "dbms_project";
                mysqli_select_db($conn , $dbname); 
                $query = "SELECT * FROM UserComplaintCount where house_no = '$HouseNum'";
                $data = mysqli_query($conn, $query) or die(mysqli_error($conn));
                $row = mysqli_fetch_array($data);
                if($row == NUll){
                    echo "<p class='second_box_text'>";
                    echo "No Filed complains</p>";
                }
                else {
                    echo "<p class='second_box_text'>";
                    echo "<b style='font-size: 20px;'>";
                    echo $row["complain_count"];
                    echo "</b> Filed complains</p>";
                }

                mysqli_close($conn);
                ?>

            </div>
        </a>
        <a href="see_event_user.php">
            <div class="second_box animate__animated animate__fadeInUp">
                <h4>Events</h4>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $conn = mysqli_connect($servername, $username, $password);
                $dbname = "dbms_project";
                mysqli_select_db($conn , $dbname); 
                $query = "SELECT * FROM UserEventCount where house_no = '$HouseNum'";
                $data = mysqli_query($conn, $query) or die(mysqli_error($conn));
                $row = mysqli_fetch_array($data);
                if($row == NUll){
                    echo "<p class='second_box_text'>";
                    echo "No Booked Events</p>";
                }
                else {
                    echo "<p class='second_box_text'>";
                    echo "<b style='font-size: 20px;'>";
                    echo $row["Event_count"];
                    echo "</b> Booked Events</p>";
                }

                mysqli_close($conn);
                ?>
            </div>
        </a>
        <a href="see_water_deliver_user.php">
            <div class="second_box animate__animated animate__fadeInUp">
                <h4>Water Delivery</h4>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $conn = mysqli_connect($servername, $username, $password);
                $dbname = "dbms_project";
                mysqli_select_db($conn , $dbname); 
                $query = "SELECT * FROM UserDeliveryCount where house_no = '$HouseNum'";
                $data = mysqli_query($conn, $query) or die(mysqli_error($conn));
                $row = mysqli_fetch_array($data);
                if($row == NUll){
                    echo "<p class='second_box_text'>";
                    echo "No Water Delivery Orders</p>";
                }
                else {
                    echo "<p class='second_box_text'>";
                    echo "<b style='font-size: 20px;'>";
                    echo $row["DeliverCount"];
                    echo "</b> Water Delivery Booking</p>";
                }
                mysqli_close($conn);
                ?>
            </div>
        </a>
    </div>
    <div class="boxes" style="margin-top: 20px;">
        <a href="complain.php"><button type="button" class="page_button">File a Complain</button></a>
        <a href="event.php"><button type="button" class="page_button">Book Event</button></a>
        <a href="delivery_water_form.php"><button type="button" class="page_button">Book Water Delivery</button></a>
    </div>
    <br /><br /><br /><br />
    <div id="nav_bar"></div>
</body>

</html>