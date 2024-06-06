<!DOCTYPE html>
<html>
    <head>
        <style>
            .mySidenav a {
                position:absolute;
                transition: 0.3s;
                padding: 15px;
                height: 30px;
                text-decoration: none;
                font-size: 18px;
                font-weight: bold;
                color: #fdf6e6;
                border-radius: 0 5px 5px 0;
                background-color: #396e51;
    
            }
            .mySidenav a:hover {
                left: 0;
            } 
            .dashboard{
                width: 160px;
                left: -120px;
                top: 150px;
            }  
            .Complain {
                width: 210px;
                left: -170px;
                top: 220px;
            }   
            .event {
                width: 160px;
                left: -120px;
                top: 290px;
            }   
            .waterDelivery {
                width: 290px;
                left: -250px;
                top: 360px;
            }
            .directory {
                width: 220px;
                left: -180px;
                top: 430px;
            }
            .myAccount {
                width: 170px;
                left: -130px;
                top: 500px;
            }
            .icon{
                height: 35px;
                float: right;
                padding-right: 4px;
            }
        </style>
    </head>
    <body>
        <div class="mySidenav">
            <a href="dashboard.php" class="dashboard">
                Dashboard
                <img class="icon" src="home1.png">
            </a>
            <a href="complain.php" class="Complain">
                Complain Board
                <img class="icon" src="complain1.png">
            </a>
            <a href="event.php" class="event">
                Book Event
                <img class="icon" src="event1.png">
            </a>
            <a href="delivery_water_form.php" class="waterDelivery">
                Water Delivery Booking
                <img class="icon" src="water1.png" width="40px">
            </a>
            <a href="user_directory.php" class="directory">
                Society Directory
                <img class="icon" src="directory1.png">
            </a>
            <a href="personal_info.php" class="myAccount">
                My Account
                <img class="icon" src="profile1.png">
            </a>
        </div>
    </body>
</html>