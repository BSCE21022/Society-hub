<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Montserrat:wght@200;500&family=Poppins:wght@300;800&family=Roboto:wght@300&display=swap');
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <style>
            .header{
                font-family: poppins;
                color: #bad7de;
                font-size:30px;
                padding-left: 65px;
            }
            .profile_image{
                height: 45px;
                float: right;
                margin-right: 100px;
                margin-top: 30px;
            }
            .username{
                display: inline;
                float: right;
                margin-right: 10px;
                margin-top: 41px;
                font-size: 18px;
                text-decoration: none;
                color: #322308;
            }
            .head_img{
                width: 100%;
                height: 350px;
            }
            .top-left {
                position: absolute;
                top: 8px;
                left: 16px;
            }
            .top-right {
                position: absolute;
                top: 8px;
                right: 16px;
            }

        </style>
        <header>
            <img class="head_img" src="head.png">
        </header>
    </head>
    <body>
        <div class="header">
            <div class="top-right">
            <img class="profile_image" src="pro_head.png">
                <p class="username"><b>
                    <?php
                        session_start(); 
                        if (isset($_SESSION['house_no'])) {
                            $house_no = $_SESSION['house_no'];
                            echo $house_no;
                        }
                    ?>
                </b>
                </p>
            </div>
        </div>
    </body>
</html>


