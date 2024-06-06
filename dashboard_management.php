<?php
session_start(); 
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Society Hub</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
    <script>
    $(function() {
        $("#header").load("header_manag.php");
    });
    $(function() {
        $("#nav_bar").load("nav_bar_management.php");
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
    }

    .long_button {
        width: 100%;
        height: 40px;
        background-color: #f3e2c4;
        border: none;
        border-radius: 5px;
        font-size: 1em;
        font-weight: bold;
        color: #396e51;
        letter-spacing: 4px;

    }

    .long_button:hover {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
        cursor: pointer;
    }

    .second_box {
        border-radius: 8px;
        background-color: rgb(57,110,81,.7);
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
        width: 100%;
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

    .second_box_text {
        text-decoration: none;
        text-align: center;
    }

    .announcement_container {
        background-color: #f3e2c4;
        border-radius: 8px;
        padding: 10px 40px;
        margin-left: 150px;
        margin-right: 100px;
        margin-top: 30px;
        font-size: large;
        color: #396e51;
        font-weight: 400;
    }

    .announcements {
        padding-left: 30px;
    }

    .long_button3 {
        width: 100%;
        height: 40px;
        background-color: #396e51;
        border: none;
        border-radius: 5px;
        font-size: 0.9em;
        font-weight: bold;
        color: #f3e2c4;
        letter-spacing: 4px;
    }

    .long_button3:hover {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
        cursor: pointer;
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

    .dashboard_buttons {
        display: grid;
        grid-template-columns: 1fr 1fr;
        margin-left: 150px;
        margin-right: 100px;
        gap: 10px;
        margin-top: 30px;
    }
    .dashboard_buttons2{
        display: grid;
        grid-template-columns: 1fr;
        margin-left: 150px;
        margin-right: 100px;
        gap: 10px;
        margin-top: 5px;
    }
    </style>

    <div id="header"></div>
</head>

<body>
    <div class="boxes">
        <a href="see_complains.php">
            <div class="second_box animate__animated animate__fadeInUp">
                <h4>Pending Complains</h4>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $conn = mysqli_connect($servername, $username, $password);
                $dbname = "dbms_project";
                mysqli_select_db($conn , $dbname);        
                $query = "SELECT * FROM count_complains";
                $data = mysqli_query($conn, $query) or die(mysqli_error($conn));
                while ($row = mysqli_fetch_array($data)) {
                    echo "<p class='second_box_text'>";
                    echo "<b style='font-size: 20px;'>";
                    echo $row["total_complains"];
                    echo "</b> pending complains</p>";
                }
                ?>
            </div>
        </a>
        <a href="seeEvents.php">
            <div class="second_box animate__animated animate__fadeInUp">
                <h4>Event Bookings</h4>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $conn = mysqli_connect($servername, $username, $password);
                $dbname = "dbms_project";
                mysqli_select_db($conn , $dbname); 
                $query = "SELECT * FROM count_events";
                $data = mysqli_query($conn, $query) or die(mysqli_error($conn));
                while ($row = mysqli_fetch_array($data)) {
                    echo "<p class='second_box_text'>";
                    echo "<b style='font-size: 20px;'>";
                    echo $row["comming_events"];
                    echo "</b> pending Events</p>";
                }
                ?>
            </div>
        </a>
        <a href="see_water_delivery.php">
            <div class="second_box animate__animated animate__fadeInUp">
                <h4>Water Delivery Orders</h4>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $conn = mysqli_connect($servername, $username, $password);
                $dbname = "dbms_project";
                mysqli_select_db($conn , $dbname); 
                $query = "SELECT * FROM count_water_delivery";
                $data = mysqli_query($conn, $query) or die(mysqli_error($conn));
                while ($row = mysqli_fetch_array($data)) {
                    echo "<p class='second_box_text'>";
                    echo "<b style='font-size: 20px;'>";
                    echo $row["pending_orders"];
                    echo "</b> pending delivery orders</p>";
                }
                ?>
            </div>
        </a>
    </div>
    <div class="dashboard_buttons">
        <div class="animate__animated animate__fadeInUp">
            <a href="add_new_user.php"><button type="button" class="long_button">Add&nbsp; New&nbsp; User</button></a>
        </div>
        <div class="animate__animated animate__fadeInUp">
            <a href="remove_user.php"><button type="button" class="long_button">Delete&nbsp; User</button></a>
        </div>
    </div>
    <div class="dashboard_buttons2">
        <div class="animate__animated animate__fadeInUp">
            <a href="edit_user_details.php"><button type="button" class="long_button">Edit&nbsp; User&nbsp; Details</button></a>
        </div>
    </div>
    <div class="announcement_container animate__animated animate__fadeInUp">
        <h3>Ongoing Announcements:</h3>
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
        <br />
        <div class="second animate__animated animate__fadeInUp">
            <a href="del_announce.php"><button type="button" class="long_button3">Delete&nbsp; Announcement</button></a>
            <a href="add_announce.php"><button type="button" class="long_button3">Add&nbsp; Announcement</button></a>
        </div>
    </div>
    <br /><br />
    <div id="nav_bar"></div>
</body>

</html>