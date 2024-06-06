<?php
session_start(); 
$house_no = $_SESSION['house_no'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Society Hub Book Event</title>
        <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
        </script>
        <script> 
            $(function(){
            $("#header").load("header.php"); 
            });
            $(function(){
                $("#nav_bar").load("nav_bar_user.php"); 
            });
        </script> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Montserrat:wght@200;500&family=Poppins:wght@300;800&family=Roboto:wght@300&display=swap');
        </style>
        <style>
            *{
                font-family: poppins;
            }
            body{
                background-color: #fdf6e6;
                color: #bad7de;
                margin: 0;
                padding: 0;
            }
            h3{
                text-decoration: underline; 
                text-align: center;
                font-size: larger;
            }
            .event_form{
                background-color: #f3e2c4;
                color: #396e51;
                width: 700px;
                margin-top: 40px;
                padding: 30px;
                border-radius: 10px;
                margin-left: 300px;
            }
            .first_row{
                display: grid;
                grid-template-columns: 1fr 2fr 1fr 2fr;
                margin-bottom: 15px;
            }
            .second_row{
                display: grid;
                grid-template-columns: 1fr 5fr;
                margin-bottom: 15px;
            }
            .third_row{
                display: grid;
                grid-template-columns: 1fr 1fr;
                margin-bottom: 15px;
            }
            .input_box{
                border: none;
                height: 35px;
                border-radius: 7px;
                padding-left: 15px;
                width: 200px;
                padding-right: 10px;
            }
            .input_box2{
                border: none;
                height: 35px;
                border-radius: 7px;
                padding-left: 15px;
                padding-right: 10px;
                width: 555px;
                margin-left: 75px;
            }
            .text_area{
                width: 340px;
                height: 55px;
                border: none;
                border-radius: 10px;
                margin-top: 10px;
                padding: 10px;
            }
            .input_button{
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
            .checkbox{
                margin-left: 15px; 
                margin-left: 15px;
                
            }
            .input_button:hover{
                box-shadow: 0px 0px 3px 2px #c8cdcf;
                cursor: pointer;
            }
        </style>
        <div id="header"></div>
    </head>
    <body>
        <div class="event_form complain_box animate__animated animate__fadeInUp">
            <form id="event" name="event" action="event_book_sql.php" method="post">
                <div class="first_row">
                    Event Name:
                    <input class="input_box" type="text" id="event_name" name="event_name" style="margin-right: 15px;" required>
                    Event Type:
                    <select class="input_box" id="event_type" name="event_type" style="width: 225px;" required>
                        <option value="">Please Select</option>
                        <option value="Birthday Party">Birthday Party</option>
                        <option value="Wedding Reception">Wedding Reception</option>
                        <option value="Anniversary Celebration">Anniversary Celebration</option>
                        <option value="Family Gathering">Family Gathering</option>
                        <option value="Business Gathering">Business Gathering</option>
                        <option value="Workshop Seminar">Workshop / Seminar</option>
                        <option value="Cultural Event">Cultural Event</option>
                        <option value="Sports Event">Sports Event</option>
                        <option value="School Party">School Party</option>
                        <option value="Art Exhibition">Art Exhibition</option>
                        <option value="Movie Screening">Movie Screening</option>
                        <option value="Lecture Talk">Lecture or Talk</option>
                        <option value="Baby Shower">Baby Shower</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="first_row">
                    Start Time: 
                    <input  class="input_box" type="time" name="event_start_time" id="event_start_time" style="margin-right: 15px;" required>
                    End Time: 
                    <input  class="input_box" type="time" name="event_End_time" id="event_End_time" required>
                </div>
                <div class="second_row">
                    Date: 
                    <input class="input_box2" type="date" name="event_date" id="event_date" style="margin-right: 15px;" required> 
                </div>
                <div class="third_row">
                    <div class="first_side">
                        Additional Facilities Required: <br/>
                        <input class="checkbox" style="margin-top: 12px;" type="checkbox" id="audio-visual" name="audio-visual" value="Audio-Visual Equipment">
                        <label>Audio-Visual Equipment</label><br>

                        <input class="checkbox" type="checkbox" id="chairs-tables" name="chairs-tables" value="Chairs and Tables">
                        <label>Chairs and Tables</label><br>

                        <input class="checkbox" type="checkbox" id="decorations" name="decorations" value="Decorations">
                        <label>Decorations</label><br>

                        <input class="checkbox" type="checkbox" id="photography-videography" name="photography-videography" value="Photography and Videography">
                        <label>Photography and Videography</label><br>

                        <input class="checkbox" type="checkbox" id="event-staff" name="event-staff" value="Event Staff">
                        <label>Event Staff</label><br>

                        <input class="checkbox" type="checkbox" id="projector-screen" name="projector-screen" value="Projector and Screen">
                        <label>Projector and Screen</label><br>

                        <input class="checkbox" type="checkbox" id="childrens-play-area" name="childrens-play-area" value="Children Play Area">
                        <label>Children's Play Area</label><br>

                        <input class="checkbox" type="checkbox" id="party-supplies" name="party-supplies" value="Party Supplies">
                        <label>Party Supplies</label><br>

                    </div>
                    <div class="secosnd_side">
                        <div style="margin-bottom: 15px;">
                            Event Space:  &nbsp; &nbsp;&nbsp;
                            <input class="input_box" type="text" name="event_space" id="event_space" required>
                        </div>
                        <div style="margin-bottom: 15px;">
                            No. Ateendees: &nbsp;
                            <input class="input_box" type="number" name="event_no_people" id="event_no_people" required>
                        </div>
                        <div style="margin-bottom: 15px;">
                            Food and Catering: 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="event_food" id="event_food" value="yes" required>Yes
                            &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="event_food" id="event_food" value="No" required>No
                        </div>
                        Special Requests:<br/>
                        <textarea class="text_area" name="requests" class="discription"></textarea>
                        <input type="hidden" name="house_no" value="<?php echo htmlspecialchars($house_no); ?>">
                    </div>
                </div>
                <input type="reset" name="reset" value="Reset" class="input_button"><br/>
                <input type="submit" name="submit" value="Submit" class="input_button">
            </form>
        </div>
        <br/><br/>
        <div id="nav_bar"></div>
    </body>
</html> 
