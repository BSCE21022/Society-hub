<!DOCTYPE html>
<html>
<head>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>   
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Montserrat:wght@200;500&family=Poppins:wght@300;800&family=Roboto:wght@300&display=swap');

        *{
            font-family: poppins;
        }
        body{
            background-color: #113946;
        }
        .right{
            color: #b8d8e3;
            font-size: larger;
            font-weight: 10px;
            margin-right: 110px;
        }
        .sortypes{
            width: 45px;
            height: 45px;
            border: none;
            border-radius: 45px;
            padding-left: 10px;
            background-color: #b8d8e3;
        }
        .Event_heading{
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
        td.msgTail2 img{
            width: 10px;
            height: 10px;
            background-color: white;
            border-radius: 50%;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.4);
        }
        .Delivery_container{
            background-color: #d7ceb2; 
            max-width: 600px;
            max-height: 300px;
            width: 500px;
            border-radius: 25px;
            padding: 5px 5px 1px 30px;
            margin-bottom: 10%;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.715);
        }
        p.email{
            font-size: 11px;
            font: weight 1px;  
            color: #456c78;  
        }
        #detail{
            margin-bottom: 2px;
        }
        .details{
            text-decoration: none;
            margin-right: 25px;
            color: #113946;
        }
    
    </style>    
    <div id="header"></div>
</head>
<body>
    <div>
        <div>
            <div align="right" class="right">
                <label style="margin-right: 10px;">Sort by</label>
                <select name="sort_type" class="sortypes"> 
                    <option value="" > </option>
                    <option value="date" >Date</option>
                    <option value="Urgency" >Event type </option>
                    <option value="No. OF Bottles" >Duration</option>
                    <option value="Delivery Frequency" >No.Attendies</option>
                </select>
                
        </div>
        <div name="Complains" class="leftshift animate__animated animate__fadeInUp">
            <table align="center">
                <tr class="table_entry">
                    <td class="userimg">
                        <img src="profile.png" alt="profile pic" height="70px" width="70px">
                    </td>
                    <td class="msgTail1">
                        <img >
                    </td>
                    <td class="msgTail2">
                        <img >
                    </td>
                    <td>
                        <a href="delivery_details.php" class="details">
                            <div class="Delivery_container">
                                <p ><b>Zainab Bashir</b></p>
                                <div style="display: flex; justify-content: space-between;" >
                                    <p class="Delivery_description">
                                        Date:11-11-2023
                                        <br>
                                        Number Of Bottles: 5
                                    </p>
                                </div>
                            </div> 
                        </a>   
                    </td>
                </tr>
                <tr class="table_entry">
                    <td class="userimg">
                        <img src="profile.png" alt="profile pic" height="70px" width="70px">
                    </td>
                    <td class="msgTail1">
                        <img >
                    </td>
                    <td class="msgTail2">
                        <img >
                    </td>
                    <td>
                    <a href="delivery_details.php" class="details">
                            <div class="Delivery_container">
                                <p ><b>Nimra Maqbool</b></p>
                                <div style="display: flex; justify-content: space-between;" >
                                    <p class="Delivery_description">
                                        Date:12-11-2023
                                        <br>
                                        Number Of Bottles: 9
                                    </p>
                                </div>
                            </div> 
                        </a>  
                    </td>
                </tr>
                
                <tr class="table_entry" >
                    <td  class="userimg">
                            <img src="profile.png" alt="profile pic" height="70px" width="70px">
                    </td>
                    <td class="msgTail1">
                        <img src="" alt="">
                    </td>
                    <td class="msgTail2">
                        <img src="" alt="">
                    </td>
                    <td> 
                    <a href="delivery_details.php" class="details">
                            <div class="Delivery_container">
                                <p ><b>Saud Sohail</b></p>
                                <div style="display: flex; justify-content: space-between;" >
                                    <p class="Delivery_description">
                                        Date:17-11-2023
                                        <br>
                                        Number Of Bottles: 11
                                    </p>
                                </div>
                            </div> 
                        </a>  
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div id="nav_bar"></div>
</body>
</html> 
