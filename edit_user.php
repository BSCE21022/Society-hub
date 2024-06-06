<?php
session_start(); 
$HouseNum = $_SESSION['house_no'];

if (isset($_POST['family_mem']) && isset($_POST['phone']) && isset($_POST['pass'])) {
    $family_mem = $_POST['family_mem'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
    $dbname = "dbms_project";
    mysqli_select_db($conn , $dbname);
    $table_name = "Resident";

    $update_query = "UPDATE $table_name 
                     SET family_mem = '$family_mem', phone = '$phone', pass = '$pass' 
                     WHERE HouseNum = '$HouseNum'";
    
    if (mysqli_query($conn, $update_query)) {
        echo '<script>alert("Record updated successfully");</script>';
        echo '<script>window.location.href = "personal_info.php";</script>';
        exit;  
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
