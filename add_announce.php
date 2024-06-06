<?php
session_start(); 
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Montserrat:wght@200;500&family=Poppins:wght@300;800&family=Roboto:wght@300&display=swap');
        html {
            font-size: 16px; 
        }
        * {
            font-family: Poppins, sans-serif;
        }
        body {
            background-color: #fdf6e6;
            color: #396e51;
            margin: 0;
            padding: 0;
        }
        .box {
            background-color: #f3e2c4;
            color: #396e51;
            width: 43.75rem; 
            margin-top: 4.375rem; 
            padding: 1.875rem;
            border-radius: 0.625rem; 
            margin-left: 18.75rem; 
        }
        .discription {
            border-radius: 0.4375rem; 
            border: none;
            width: 40.9375rem; 
            height: 7.5rem;
            padding-left: 1.25rem; 
            padding-right: 1.25rem; 
            padding-top: 0.625rem; 
            margin-bottom: 1.25rem; 
            margin-top: 0.5rem; 
        }
        .head {
            font-size: 1.875rem; 
            font-weight: bolder;
        }
        .input_button {
            width: 100%; 
            height: 2.3125rem; 
            margin: 0.3125rem;
            border: none;
            border-radius: 0.4375rem; 
            background-color: #396e51;
            color: #f3e2c4;
            font-size: 0.9375rem; 
            font-weight: bold;
            letter-spacing: 0.125rem; 
        }
        .input_button:hover {
            box-shadow: 0 0 0.1875rem 0.125rem #c8cdcf; 
            color: #113946;
            background-color: #3d5e68;
            cursor: pointer;
        }
        label[for="largeText"] {
            font-weight: light;
            color: #113946;
        }
        .button_box{
            padding-right: 10px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }
    </style>
    <div id="header"></div>
</head>
<body>
    <div class="box animate__animated animate__fadeInUp">
        <form name="announcement_add" id="announcement_add" action="add_announce_sql.php" method="post">
            <label class="head">Announcement:</label><br/><br/>
            <label for="largeText">Enter:</label>
            <textarea name="announce_text" class="discription" required></textarea><br/>
            <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($user); ?>">
            <div class="button_box">
                <input type="reset" name="reset" value="Reset" class="input_button">
                <input type="submit" name="submit" value="Submit" class="input_button">
            </div>
        </form>
    </div>
    <br/><br/><br/><br/>
    <div id="nav_bar"></div>
</body>
</html>