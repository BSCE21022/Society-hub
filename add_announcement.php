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
            $("#header").load("header_manag.php"); 
            });
            $(function(){
                $("#nav_bar").load("nav_bar_management.php"); 
                });
        </script> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Montserrat:wght@200;500&family=Poppins:wght@300;800&family=Roboto:wght@300&display=swap');
        </style>
        <style>
            *{
                font-family: poppins;
            }
            body{
                background-color: #fdf6e6;
                color: #396e51;
                margin: 0;
                padding: 0;
            }
            .second{
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 20px;
                margin-left: 150px;
                margin-right: 100px;
                margin-top: 30px;
            }
            .long_button{
                width: 100%;
                height: auto;
                padding: 5px;
                background-color: #396e51;
                border: none;
                border-radius: 5px;
                font-size: large;
                font-weight: bold;
                color: #fdf6e6;
                letter-spacing: 4px;
            }
            .long_button:hover{
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
                color: #e7e2d2;
                cursor: pointer;
            }
            .announcement_container{
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
            .announcements{
                padding-left: 30px;
            }
        </style>
        <div id="header"></div>
    </head>
    <body>
        <div class="second animate__animated animate__fadeInUp">
            <a href="del_announce.php"><button type="button" class="long_button">Delete&nbsp; Announcement</button></a>
            <a href="add_announce.php"><button type="button" class="long_button">Add&nbsp; Announcement</button></a>
        </div>
        <div class="announcement_container animate__animated animate__fadeInUp" >
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
            <br/>
        </div>
        <br/><br/><br/><br/>
        <div id="nav_bar"></div>
    </body>
</html> 
