<?php
session_start(); 
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Edit Profile</title>
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
        form {
            background-color: #f3e2c4;
            border-radius: 15px;
            width: 650px;
            padding: 25px;
            margin-top: 20px;
            position: relative;
            left: 25%;
        }
        input {
            font-family: poppins;
            border: none;
            border-radius: 5px;
            margin-bottom: -2px; 
            padding: 0 10px;
            height: 35px;
            font-size: 15px;
            width: 290px;
        }
        input:focus {
            border: 1.5px solid #113946;
        }
        .name {
            display: inline-block;
        }
        input[type="name"], input[type="text"] {
            display: block;
            margin: 2px 0 0 10px; 
            padding-right: 5px;
        }
        label {
            position: relative;
            font-family: poppins;
            color: #113946;
            font-size: 15px;
            pointer-events: none;
            left: 20px;
            top: -28px;
            transition: 0.2s all;
            text-transform: uppercase;
        }
        input:focus ~label, input:valid ~label {
            top: -49px;
            left: 15px;
            background: #fff;
            padding: 0 5px;
            font-size: 10px;
            color: #113946;
        }
        .line1 {
            font-size: 15px;
            margin: -30px 0 0 15px;
            color: #113946;
        }

        input.wide-input {
            width: 610px;
        }
        input[type="checkbox"] {
            width: 15px;
            height: 15px;
        }
        .name label[for="gender"] {
            color: #113946;
        }
        .name input[type="text"],
        .name input[type="password"] {
            display: block;
            margin: -10px 0 0 10px;
            padding-right: 5px;
        }
        .name input[type="text"] {
            display: block;
            margin: -10px 0 0 10px; 
            padding-right: 5px;
        }
        .name label[for="resident"] {
            color: #113946;
        }
        select.wide-input {
            outline: none;
            border: 1px solid #9c9c9c;
            border-radius: 5px;
            padding: 0 10px;
            height: 38px;
            font-size: 15px;
            width: 430px;
            text-transform: uppercase;
            margin-left: 10px;
            border: none;
        }
        select.wide-input:focus {
            border: 1.5px solid #113946;
        }     
        input[type="radio"]{
            width: 18px;

        } 
        .radio_input {
            margin-top: -20px; 
        }    
        .show_pa{
            font-size: small;
            display: inline;
            
        }
    </style>
    <script>
        function ShowPass() {
            var x = document.getElementById("password");
            if (x.type == "password") {
                x.type = "text";
            } 
            else {
                x.type = "password";
            }
        }
    </script> 
    <div id="header"></div>
</head>
<body>
    <form class=" animate__animated animate__fadeInUp" name="edit_manag" id="edit_manag" action="edit_manag.php" method="post">
        <div class="name">
            <input type="text" name="phone" id="phone" required class="wide-input"  style="margin-top: 10px;">
            <label>Phone Number</label>
        </div>
        <div class="name">
            <input type="password" id="password" name="pass" required class="wide-input" style="margin-left: 10px;">
            <label>Password</label>
        </div>
        &nbsp;&nbsp;&nbsp;
        <input type="checkbox" class="show" onclick="ShowPass()">
        <div class="show_pa">Show password</div><br/> <br/>
        <div class="name">
            <input type="submit" value="Edit Account"
                   style="background-color: #396e51; width: 635px; color: white; border: none; margin-left: 10px; cursor: pointer;">
        </div>
        <br/>
    </form>
    <br/><br/>
<div id="nav_bar"></div>
</body>
</html>
