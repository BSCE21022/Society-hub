<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Society Hub</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500&display=swap');
    </style>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            background-color: #fdf6e7;
        }
        .main {
            width: 100%;
            display: flex;
            justify-content: center;
            background-position: center;
            background-size: cover;
        }
        .profile-card {
            display: flex;
            flex-direction: column;
            max-width: 900px; /* Increased the maximum width */
            width: 100%; /* Adjusted the width */
            border-radius: 25px;
            padding: 30px;
        }

        .user-input {
            display: flex;
            flex-direction: column;
        }
        .user-input label, .user-input input {
            margin-bottom: 10px;
        }
        .buttons {
            display: none;
            align-items: center;
            margin-top: 30px;
        }
        .buttons .btn {
            color: #fff;
            text-decoration: none;
            margin: 0 20px;
            width: 790px;
            padding: 5px 40px;
            border-radius: 5px;
            font-size: 18px;
            white-space: nowrap;
            background-color: #396e51;
            position: relative;
            text-align: center;
        }

        .management .buttons .btn {
            width: 200px;
        }
        .buttons .btn::before {
            font-size: 14px;
            position: absolute;
            top: -20px;
            left: 0;
        }
        .buttons .btn:hover {
            box-shadow: inset 0 10px 30px rgba(0, 0, 0, 0.6);
        }
        .submit-btn {
            color: #fff;
            text-decoration: none;
            margin: 0 20px;
            width: 790px;
            padding: 5px 40px;
            border-radius: 5px;
            font-size: 18px;
            white-space: nowrap;
            background-color: #396e51;
            position: relative;
            text-align: center;
        }
        .inp{
            border: none;
            font-family: poppins;
            border-radius: 5px;
            margin-bottom: 10px;
            margin-left: 20px;
            padding: 0 10px;
            height: 35px;
            font-size: 15px;
            width: 790px;
            text-transform: uppercase;
            background-color: #f2e1c3;
        }
        .mhead_img{
            width: 100%;
            height: 450px;
        }
    </style>
    <header>
        <img class="mhead_img" src="mhead.png">
    </header>
</head>
<body>

    <section class="main">
        <div class="profile-card">
            <div class="user-input">
                <label for="userType">&nbsp &nbsp &nbsp Are you a Resident or Management person?</label>
                <select id="userType" name="userType"placeholder= "Type 'user' or 'management" class="inp">
                    <option value="">PLEASE SELECT</option>
                    <option value="resident">RESIDENT</option>
                    <option value="management">MANAGEMENT</option>
                </select>
                <a id="submitButton" class="submit-btn">Submit</a>
                <br/><br/><br/><br/>
            </div>
            <div class="buttons">
                <a id="loginButton" class="btn" >Login</a>
                <a id="createAccountButton" class="btn" >Create Account</a>
                <br/><br/><br/><br/>
            </div>
        </div>
    </section>

    <script>
        const userTypeInput = document.getElementById("userType");
        const submitButton = document.getElementById("submitButton");
        const loginButton = document.getElementById("loginButton");
        const createAccountButton = document.getElementById("createAccountButton");
        const buttonsContainer = document.querySelector(".buttons");
        const userInputSection = document.querySelector(".user-input");

        submitButton.addEventListener("click", function () {
            const userInput = userTypeInput.value.toLowerCase();

            if (userInput === "resident") {
                loginButton.href = "login_user.php";
                createAccountButton.style.display = "none";
            } else if (userInput === "management") {
                loginButton.href = "login_management.php";
                createAccountButton.href = "create_account_management.php";
            } else {
                alert("Invalid input. Please type 'user' or 'management'.");
                return;
            }
            userInputSection.style.display = "none";
            buttonsContainer.style.display = "flex";
        });
    </script>
</body>
</html>
