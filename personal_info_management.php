<?php
session_start(); 
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Society Hub Personal Info</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Montserrat:wght@200;500&family=Poppins:wght@300;800&family=Roboto:wght@300&display=swap');
    </style>
    <style>
    * {
        font-family: poppins;
    }

    body {
        background-color: #fdf6e6;
        color: #396e51;
        margin: 0;
        padding: 0;
    }
    </style>
    <style>
    .outer_box {
        display: grid;
        grid-template-columns: 1fr;
        align-items: center;
        justify-items: center;
        margin-left: 150px;
        margin-right: 100px;
        margin-top: 50px;

    }

    .profile-card {
        display: flex;
        background-color: #f3e2c4;
        flex-direction: column;
        align-items: center;
        width: 500px;
        border-radius: 10px;
        padding: 30px;
        border: 1px solid #ffffff40;
    }

    .image .profile-pic {
        height: 95px;
        border-radius: 50%;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.4);
    }

    .data {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: -10px;
    }

    .data h2 {
        font-size: 18px;
        font-weight: 600;
    }

    span {
        font-size: 15px;
        margin-top: -10px;
    }

    .row {
        display: flex;
        align-items: center;
        margin-top: 10px;
        justify-content: space-between;
    }

    .row .info {
        text-align: center;
        padding: 0 20px;
    }

    .buttons {
        display: flex;
        align-items: center;
        margin-top: 20px;
    }

    .buttons .btn {
        color: #f3e2c4;
        text-decoration: none;
        margin: 0 15px;
        padding: 5px 25px;
        border-radius: 5px;
        font-size: 18px;
        white-space: nowrap;
        background-color: #396e51;
        width: 175px;
        text-align: center;
        font-weight: 600;
    }

    .buttons .btn:hover {
        box-shadow: inset 0 5px 20px rgba(0, 0, 0, 0.4);
    }

    h4 {
        margin-top: 5px;
        display: inline;
    }
    </style>
    <div id="header"></div>
</head>

<body>
    <div class="outer_box">
        <div class="profile-card animate__animated animate__fadeInUp">
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $conn = mysqli_connect($servername, $username, $password);
                $dbname = "dbms_project";
                mysqli_select_db($conn , $dbname); 
            $table_name = "Management";
            $select_query = 
            "SELECT * FROM $table_name
            WHERE Username = '$user'";
            $data = mysqli_query($conn, $select_query) or die(mysqli_error($conn));
            $row = mysqli_fetch_array($data);
            ?>
            <div class="data">
                <h2>
                    <?php
                    echo $row["FirstName"] . " " . $row["LastName"];
                    ?>
                </h2>
                <span>Management</span>
            </div>
            <div class="row">
                <div class="info">
                    <br />
                    <h4>Designation</h4><br />
                    <span>
                        <?php
                    echo $row["Designation"]
                    ?>
                    </span>
                </div>
                <div class="info">
                    <br />
                    <h4>Phone</h4><br />
                    <span>
                        <?php
                    echo $row["Phone"]
                    ?>
                    </span>
                </div>
                <div class="info">
                    <br />
                    <h4>Password</h4><br />
                    <span>
                        <?php
                    echo $row["Pass"]
                    ?>
                    </span>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="info">
                    <h4>Gender</h4><br />
                    <span>
                        <?php
                        $gen = $row["Gender"];
                        if($gen == 'm'){
                            echo "Male";
                        }
                        else if ($gen == 'f'){
                            echo "Female";
                        }
                        ?>
                    </span>
                </div>
                <div class="info">
                    <h4>Date Of Birth</h4><br />
                    <span>
                        <?php
                    echo $row["DOB"]
                    ?>
                    </span>
                </div>
            </div>
            <br />
            <div class="buttons">
                <a href="edit_info_manag.php" class="btn">Edit</a>
                <a href="login_management.php" class="btn">Logout</a>
            </div>
        </div>
    </div>
    <br /><br /><br /><br />
    <div id="nav_bar"></div>
</body>

</html>