<?php
if(isset($_POST['delete_announcement'])){
    $number = $_POST['delete_announcement'];

    $servername = "localhost";
    $username = "root";
    $password = "zainy";
    $conn = mysqli_connect($servername, $username, $password);
    $dbname = "Project";
    mysqli_select_db($conn , $dbname);
    $table_name = "Announcements";

    $query = 
            "select ID from $table_name 
            where ID = '$number'";
    $data = mysqli_query($conn, $query) or die(mysqli_error($conn)); 
    $row = mysqli_fetch_array($data);
    if($row != NULL){
        if($row['ID'] == $number){
            $deletequery = 
            "DELETE FROM $table_name WHERE ID = '$number'";
            mysqli_query($conn, $deletequery) or die(mysqli_error($conn)); 
            $alert = 
                "<script type='text/javascript'>
                alert('Error: Announcement Removed!');
                window.location.href='add_announcement.php';
                </script>";
            echo $alert;
        }
    }
    else{
        $alert = 
            "<script type='text/javascript'>
            alert('Error: Invalid number');
            window.location.href='del_announce.php';
            </script>";
        echo $alert;
    }
}
?>