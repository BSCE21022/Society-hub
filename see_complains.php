<!DOCTYPE html>
<html>

<head>
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

    * {
        font-family: poppins;
    }

    body {
        background-color: #fdf6e6;
        color: #396e51;
        margin: 0;
        padding: 0;
    }

    .right {
        color: #b8d8e3;
        font-size: larger;
        font-weight: 10px;
        margin-right: 110px;
    }

    .sortypes {
        width: 45px;
        height: 45px;
        border: none;
        border-radius: 45px;
        padding-left: 10px;
        background-color: #b8d8e3;
    }

    .Event_heading {
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

    td.msgTail2 img {
        width: 10px;
        height: 10px;
        background-color: white;
        border-radius: 50%;
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.4);
    }

    .event_container {
        background-color: #d7ceb2;
        max-width: 600px;
        max-height: 200px;
        width: 500px;
        border-radius: 25px;
        padding: 5px 5px 1px 30px;
        margin-bottom: 10%;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.715);
    }

    p.email {
        font-size: 11px;
        font: weight 1px;
        color: #456c78;
    }

    #detail {
        margin-bottom: 2px;
    }

    .details {
        text-decoration: none;
        margin-right: 25px;
        color: #113946;
    }

    .complains_box_all {
        display: grid;
        grid-template-columns: 1fr;
        align-items: center;
        justify-items: center;
        margin-left: 150px;
        margin-right: 100px;
        margin-top: 30px;
    }

    .complain_details_box {
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

    .item_description {
        grid-column: 2 / span 2;
    }

    .page_button {
        width: 540px;
        height: auto;
        padding: 5px;
        background-color: #396e51;
        border: none;
        border-radius: 5px;
        margin-bottom: 20px;
        font-size: 1em;
        font-weight: bold;
        color: #fdf6e6;
    }

    .page_button:hover {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
        color: #e7e2d2;
        cursor: pointer;
    }
    </style>
    <div id="header"></div>
</head>

<body>
    <div class="complains_box_all">
        <br />
        <div class="animate__animated animate__fadeInUp">
            <a href="change_Status_complain.php"><button type="button" class="page_button">Change Status</button></a>
        </div>
        <div>
            <h2>
                Pending Complains
            </h2>
        </div>
        <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $conn = mysqli_connect($servername, $username, $password);
                $dbname = "dbms_project";
                mysqli_select_db($conn , $dbname); 
            $select_query = "SELECT * FROM complain_details";
            $data = mysqli_query($conn, $select_query) or die(mysqli_error($conn));
            if (mysqli_num_rows($data) > 0) {
                while ($row = mysqli_fetch_array($data)) {
                    echo "<div class='complain_details_box animate__animated animate__fadeInUp'>";
                    echo "<div><b>House Number: </b>" . $row["house_no"] . "</div>";
                    echo "<div><b>Phone Number: </b>" . $row["phonenum"] . "</div>";
                    echo "<div><b>Category: </b>" . $row["Category"] . "</div>";
                    echo "<div><b>Area: </b>" . $row["Area"] . "</div>";
                    echo "<div><b>Complain date: </b>" . $row["CD"] . "</div>";
                    echo "<div><b>Urgency: </b>" . $row["Urgency"] . "</div>";
                    if($row["status"] == 'T'){
                        $status = "Resolved";
                    }
                    else if($row["status"] == 'F'){
                        $status = "Pending";
                    }
                    echo "<div><b>Status: </b>" . $status . "</div>";
                    echo "<div class='item_description'><b>discription: </b>" . $row["myTextArea"] . "</div>";
                    echo "</div>";
                }
            } else {
                echo "<div class='complain_details_box animate__animated animate__fadeInUp'>";
                echo "<div>" . "No Pending Complains" . "</div>";
                echo "</div>";
            }
        ?>
        <br /><br /><br /><br />
    </div>
    <div id="nav_bar"></div>
</body>

</html>