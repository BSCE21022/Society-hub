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
                width: 255px;
                left: -215px;
                top: 290px;
            }   
            .waterDelivery {
                width: 340px;
                left: -300px;
                top: 360px;
            }
            .directory {
                width: 220px;
                left: -180px;
                top: 430px;
            }
            .announcement{
                width: 250px;
                left: -210px;
                top: 500px;
            }
            .myAccount {
                width: 170px;
                left: -130px;
                top: 570px;
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
            <a href="dashboard_management.php" class="dashboard">
                Dashboard
                <img class="icon" src="home1.png">
            </a>
            <a href="see_complains.php" class="Complain">
                View Complains
                <img class="icon" src="complain1.png">
            </a>
            <a href="seeEvents.php" class="event">
                View Event Bookings
                <img class="icon" src="event1.png">
            </a>
            <a href="see_water_delivery.php" class="waterDelivery">
                Veiw Water Delivery Bookings
                <img class="icon" src="water1.png" width="40px">
            </a>
            <a href="use_directory_mang.php" class="directory">
                Society Directory
                <img class="icon" src="directory1.png">
            </a>
            <a href="add_announcement.php" class="announcement">
                Add Announcement
                <img class="icon" src="announce1.png">
            </a>
            <a href="personal_info_management.php" class="myAccount">
                My Account
                <img class="icon" src="profile1.png">
            </a>
        </div>
    </body>
</html>