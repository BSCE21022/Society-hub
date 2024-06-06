<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script> 
        $(function(){
            $("#header").load("header_manag.php"); 
        });
        $(function(){
            $("#nav_bar").load("nav_bar_management.php"); 
        });
    </script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="user_directory.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Montserrat:wght@200;500&family=Poppins:wght@300;800&family=Roboto:wght@300&display=swap');
    </style>
    <style>
        *{
            font-family: poppins;
        }
        body {
            background-color: #fdf6e6;
            color: #396e51;
            margin: 0;
            padding: 0;
        }
        .directory_user{
            display: grid;
            justify-content: center;
            margin-left: 140px;
            margin-right: 150px;
        }
        
        .Directory_details_box{
            background-color: #f3e2c4; 
            width: 100%;
            border-radius: 5px;
            padding-left: 60px;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-right: 30px;
            margin-bottom: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            color: #396e51;
            row-gap: 15px;
            justify-content: space-evenly;
        }
    </style>
    <div id="header"></div>
</head>

<body>
<div class="directory_user animate__animated animate__fadeInUp">
    <br/>
        <div>
            <h3>
                Management:
            </h3>
        </div>
        <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $conn = mysqli_connect($servername, $username, $password);
                $dbname = "dbms_project";
                mysqli_select_db($conn , $dbname); 
        $select_query = "SELECT Username, CONCAT(FirstName, ' ', LastName) AS FullName, Phone, Designation FROM Management";
        $data = mysqli_query($conn, $select_query) or die(mysqli_error($conn));

        if (mysqli_num_rows($data) > 0) {
            while ($row = mysqli_fetch_array($data)) {
                echo "<div class='Directory_details_box animate__animated animate__fadeInUp'>";
                echo "<div><b>Full Name: </b>" . $row["FullName"] . "</div>";
                echo "<div><b>Phone Number: </b>" . $row["Phone"] . "</div>";
                echo "<div><b>Designation: </b>" . $row["Designation"] . "</div>";
                echo "</div>";
            }
        } else {
            echo "<div class='Directory_details_box animate__animated animate__fadeInUp'>";
            echo "<div>" . "No Account Yet" . "</div>";
            echo "</div>";
        }
        ?>
        <div>
            <h3>
                Residents:
            </h3>
        </div>
        <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $conn = mysqli_connect($servername, $username, $password);
                $dbname = "dbms_project";
                mysqli_select_db($conn , $dbname); 
        $select_query = "SELECT HouseNum, Phone FROM userDirectory";
        $data = mysqli_query($conn, $select_query) or die(mysqli_error($conn));
        if (mysqli_num_rows($data) > 0) {
            while ($row = mysqli_fetch_array($data)) {
                echo "<div class='Directory_details_box animate__animated animate__fadeInUp'>";
                echo "<div><b>House Number: </b>" . $row["HouseNum"] . "</div>";
                echo "<div><b>Phone Number: </b>" . $row["Phone"] . "</div>";
                echo "</div>";
            }
        } else {
            echo "<div class='Directory_details_box animate__animated animate__fadeInUp'>";
            echo "<div>" . "No Account Yet" . "</div>";
            echo "</div>";
        }
        ?>
        <br/><br/><br/><br/>
    </div>
    <div id="nav_bar"></div>
</body>
</html>