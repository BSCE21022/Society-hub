<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Society Hub Create Account Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Montserrat:wght@200;500&family=Poppins:wght@300;800&family=Roboto:wght@300&display=swap');
    </style>
  <style>
        * {
            font-family: poppins;
        }
        body {
            background-color: #fdf6e7;
            margin: 0;
            padding: 0;
        }
        form {
            margin-top: 15px;
            margin-left: 570px;
            font-family: poppins;
            border-radius: 10px;
            width: 650px;
            padding: 25px;
        }
        input {
            font-family: poppins;
            border: 1px solid #9c9c9c;
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
        .login_img{
            position: absolute;
            height: 100%;
            top: 0;
            bottom: 0;
        }
        .back_img{
            width: 40px;
        }
        .back{
            position: absolute;
            top: 2%;
            left: 33%;
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
    <header>
        <img class="login_img" src="login.png">
    </header>
    <div class="back">
            <a href="index.php">
                <img class="back_img" src="back.png">
            </a>
    </div>
</head>
<body>
    <form class=" animate__animated animate__fadeInUp" name="create_account_form" id="create_account_form" action="create_account_manag.php" method="post">
        <div class="name animate_animated animate_fadeInUp">
            <input type="name" name="first" required>
            <label>First name</label>
        </div>
        <div class="name">
            <input type="name" name="last" required>
            <label>Last name</label>
        </div>
        <div class="radio_input">
        &nbsp;&nbsp;&nbsp;
        <span style="vertical-align: middle;">Gender:</span>
        <span style="vertical-align: middle; margin-right: 10px;">
            <input type="radio" name="gender" value="f" style="vertical-align: middle; margin-right: 5px; margin-top: -2px;">Female
        </span>
        <span style="vertical-align: middle;">
            <input type="radio" name="gender" value="m" style="vertical-align: middle; margin-right: 5px; margin-top: -2px;">Male
        </span>
        </div>
        <div class="name">
            <input type="text" name="user" required class="wide-input"  style="margin-top: 10px;">
            <label>User name</label>
        </div>
        <div class="name"  style="margin-top: -10px;">
            &nbsp;&nbsp;&nbsp;
            Date of Birth:
            <input type="date" id="dob" name="dob" required class="wide-input" style="display: inline-block; margin-top: 10px; margin-bottom:15px;margin-left: 10px; width: 605px">
        </div>
        <div class="name">
            <input type="text" name="phone" id="phone" required class="wide-input"  style="margin-top: 10px;">
            <label>Phone Number</label>
        </div>
        <div class="name">
            <input type="text" id="designation" name="designation" required class="wide-input" style="margin-left: 10px;">
            <label>Designation</label>
        </div>
        <div class="name">
            <input type="text" id="sec_code" name="sec_code" required class="wide-input" style="margin-left: 10px;">
            <label>Security Code</label>
        </div>
        <div class="name">
            <input type="password" id="password" name="pass" required class="wide-input" style="margin-left: 10px;">
            <label>Password</label>
        </div>
        &nbsp;&nbsp;&nbsp;
        <input type="checkbox" class="show" onclick="ShowPass()">
        <div class="show_pa">Show password</div><br/> <br/>
        <div class="name">
            <input type="submit" value="Create Account"
                   style="background-color: #396e51; width: 635px; color: white; border: none; margin-left: 10px; cursor: pointer;">
        </div>
        <br/>
    </form>
<script>
    var familyMembersSelect = document.getElementById("family-members");
    var otherFamilyMembersInput = document.getElementById("other-family-members");
    familyMembersSelect.addEventListener("change", function () {
        if (familyMembersSelect.value === "other") {
            otherFamilyMembersInput.style.display = "inline-block";
        } else {
            otherFamilyMembersInput.style.display = "none";
        }
    });
</script>
<div id="nav_bar"></div>
</body>
</html>
