<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Society Hub Login user</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Montserrat:wght@200;500&family=Poppins:wght@300;800&family=Roboto:wght@300&display=swap');
    </style>
        <style>
        * {
            font-family: Poppins;
        }
        body {
            background-color: #fdf6e7;
            margin: 0;
            padding: 0;
            display: flex;
        }
        form {
            position: absolute;
            top: 50%;
            left: 66%;
            font-family: poppins;
            transform: translate(-50%, -50%);
            border-radius: 10px;
            width: 650px;
            padding: 25px;
        }

        input {
            outline: none;
            font-family: poppins;
            border: 1px solid #9c9c9c;
            border-radius: 5px;
            padding: 0 10px;
            height: 35px;
            font-size: 15px;
            width: 290px;
            text-transform: uppercase;
        }

        input:focus {
            border: 1.5px solid #113946;
        }

        .name {
            display: inline-block;
        }

        input[type="name"], input[type="text"] {
            display: block;
            margin: 10px 0 0 10px;
            padding-right: 5px;
        }

        label {
            position: relative;
            font-family: poppins;
            color: #555;
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
            color: #535878;
        }

        .line1 {
            font-size: 15px;
            margin: -30px 0 0 15px;
            color: #555;
        }

        input.wide-input {
            width: 610px; 
        }

        input[type="checkbox"] {
            width: 15px; 
            height: 15px; 
          }
        .name label[for="gender"] {
            color: #333;
        }
        .name input[type="text"],
        .name input[type="password"] {
            display: block;
            margin: 0 0 0 5px; 
            padding-right: 5px;
        }

        .name input[type="text"]
        {    display: block;
            margin: 5px 0 0 12px;
            padding-right: 5px;
        }

        .name label[for="resident"] {
            color: #333;
        }
        select.wide-input {
            outline: none;
            border: 1px solid #9c9c9c;
            border-radius: 5px;
            padding: 0 10px;
            height: 38px;
            font-size: 15px;
            width: 380px;
        }

        select.wide-input:focus {
            border: 1.5px solid #113946;
        }
        .show{
            margin-left: 0.9rem;
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
            var x = document.getElementById("pass");
            if (x.type == "password") {
                x.type = "text";
            } 
            else {
                x.type = "password";
            }
        }
    </script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
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
    <div> 
        <form class="animate_animated animate_fadeInUp" action="login_user_account.php" method="post">
        <div class="name">
          <input type="text" id="house_no" name="house_no" required class="wide-input">
          <label>House Number</label>
        </div>
        <div class="name">
          <input type="password" id="pass" name="pass" required class="wide-input" style="margin-left: 10px;"> 
          <label>Password</label>
        </div>
        <input type="checkbox" class="show" onclick="ShowPass()">
        <div class="show_pa">Show password</div><br/><br/>
        <div class="name">
            <a href="dashboard.php">
            <input type="submit" value="Login" style="background-color: #396e51; width: 635px; color: white; border: none; margin-left: 10px; cursor: pointer;">
            </a>
        </div>
      </form>
    </div>
  </body>
</html>
