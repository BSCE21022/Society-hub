<?php
session_start(); 
$house_no = $_SESSION['house_no'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Water Delivery Form</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script>
    $(function() {
        $("#header").load("header.php");
    });
    $(function() {
        $("#nav_bar").load("nav_bar_user.php");
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
        color: #bad7de;
        margin: 0;
        padding: 0;
    }

    h3 {
        text-decoration: underline;
        text-align: center;
        font-size: larger;
    }

    .deleivery_box {
        background-color: #f3e2c4;
        color: #396e51;
        width: 700px;
        margin-top: 40px;
        padding: 30px;
        border-radius: 10px;
        margin-left: 300px;
    }

    .input_box2 {
        width: 690px;
        height: 35px;
        border: none;
        border-radius: 7px;
        padding-left: 10px;
    }

    .top {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        margin-bottom: 20px;
    }

    .special_request {
        border-radius: 7px;
        border: none;
        width: 680px;
        height: 120px;
        padding-left: 20px;
        padding-top: 10px;
        margin-bottom: -10px;
    }

    .input_button {
        width: 690px;
        height: 37px;
        margin: 5px;
        border: none;
        border-radius: 7px;
        background-color: #396e51;
        color: #f3e2c4;
        font-size: 15px;
        font-weight: bold;
        letter-spacing: 2px;
    }

    .input_button:hover {
        box-shadow: 0px 0px 3px 2px #c8cdcf;
        cursor: pointer;
    }
    </style>
    <div id="header"></div>
</head>

<body>
    <div class="deleivery_box animate__animated animate__fadeInUp">
        <form id="water_delivery" name="water_delivery" method="post" action="water_delivery_sql.php">
            <div>
                Date:
                <br />
                <input type="date" name="CD" class="input_box2" required>
            </div>
            <br />
            <div>
                Number of Bottles:
                <br />
                <input type="text" name="BottlesNo" class="input_box2" placeholder="Enter number of bottles" required>
            </div>
            <br />
            Special Requests:
            <br />
            <textarea name="Requests" class="special_request" required></textarea><br />
            <br />
            <input type="hidden" name="house_no" value="<?php echo htmlspecialchars($house_no); ?>">
            <input type="reset" name="reset" value="Reset" class="input_button"><br />
            <input type="submit" name="submit" value="Submit" class="input_button">
        </form>
    </div>
    <div>
        <br /><br />
    </div>
    <div id="nav_bar"></div>
</body>

</html>