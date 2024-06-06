<?php
$text = $_POST['announce_text'];
$user_id = $_POST['user_id'];
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
$dbname = "dbms_project";
mysqli_select_db($conn , $dbname);
$table_name = "Announcements";

$insert_query = 
"INSERT INTO $table_name (announce_text, Username) 
VALUES ('$text', '$user_id')";
mysqli_query($conn, $insert_query) or die(mysqli_error($conn)); 
$alert = 
    "<script type='text/javascript'>
    alert('Announcement Added');
    window.location.href='add_announcement.php';
    </script>";
echo $alert;
?>