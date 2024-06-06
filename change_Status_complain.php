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
            .box{
                background-color: #396e51;
                color: #fdf6e6;
                width: 700px;
                margin-top: 70px;
                padding: 30px;
                border-radius: 5px;
                margin-left: 300px;
            }
            .announcement_container{
                background-color: #f3e2c4;
                border-radius: 10px;
                padding: 10px 40px;
                margin-left: 150px;
                margin-right: 100px;
                margin-top: 30px;
                font-size: 1em;
                color:  #396e51;
                font-weight: 400;
            }
            .announcements{
                padding-left: 30px;
            }
            .head{
                font-size: 1em;
                font-weight: bolder;

            }
            .input_box{
                width: 240px;
                height: 35px;
                border: none;
                border-radius: 5px;
                padding-left: 10px;
                margin-left: 20px;
                margin-right: 15px;
            }
            .input_button{
                width: 110px;
                height: 37px;
                margin: 5px;
                border: none;
                border-radius: 5px;
                background-color: #fdf6e6;
                color: #396e51;
                font-size: 1em;
                font-weight: bold;
                letter-spacing: 2px;
            }
            .input_button:hover{
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
                color: #e7e2d2;
                cursor: pointer;
            }
            .complain_details_box{
            width: 100%;
            border-radius: 5px;
            padding: 5px 5px 1px 30px;
            margin-bottom: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            color: #113946;
            row-gap: 5px;
            }
            .item_description{
            grid-column: 1 / span 2;
            }
        </style>
        <div id="header"></div>
    </head>
    <body>
        <div class="box animate__animated animate__fadeInUp">
            <form name="delete_complain" id="delete_complain" action="update_complain_sql.php" method="post">
                <label class="head">Enter Complain Number: </label>
                <input class="input_box" type="number" id="delete_complain" name="delete_complain" required>
                <input type="submit" name="submit" value="Submit" class="input_button">
            </form>
        </div>
        <div class="announcement_container animate__animated animate__fadeInUp" >
            <h3>Pending Complains:</h3>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $conn = mysqli_connect($servername, $username, $password);
                $dbname = "dbms_project";
                mysqli_select_db($conn , $dbname); 
                $table_name = "Complains";
                $select_query = 
                    "SELECT ID, myTextArea, CD, house_no 
                    FROM $table_name
                    WHERE status = 'F'";
                $data = mysqli_query($conn, $select_query) or die(mysqli_error($conn));
                if (mysqli_num_rows($data) > 0) {
                    while ($row = mysqli_fetch_array($data)) {
                        echo "<p class='announcements'>";
                        echo "<b>";
                        echo $row["ID"] . ": <br/>";
                        echo "</b>";
                        echo "<div class='complain_details_box'>";
                        echo "<div>House Number: &nbsp;&nbsp" . $row["house_no"] . "</div>";
                        echo "<div>Date: &nbsp;&nbsp" . $row["CD"] . "</div>";
                        echo "<div class='item_description'>Discription: &nbsp;&nbsp" . $row["myTextArea"] . "</div>";
                        echo "</div>";
                        echo "</p>";
                        echo "<hr/>";
                    }
                } else {
                    echo "<p class='announcements'>";
                    echo "No Pending Complains";
                    echo "</p>";
                }
            ?>  
            <br/>
        </div>
        <br/><br/>
        <div id="nav_bar"></div>
    </body>
</html> 
