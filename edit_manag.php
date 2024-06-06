<?php
session_start(); 
$user = $_SESSION['user'];

if (isset($_POST['phone']) && isset($_POST['pass'])) {
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
    $dbname = "dbms_project";
    mysqli_select_db($conn , $dbname);
    $table_name = "Management";

    $update_query = "UPDATE $table_name 
                     SET phone = '$phone', pass = '$pass' 
                     WHERE Username = '$user'";
    
    if (mysqli_query($conn, $update_query)) {
        echo '<script>alert("Record updated successfully");</script>';
        echo '<script>window.location.href = "personal_info_management.php";</script>';
        exit;  
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
