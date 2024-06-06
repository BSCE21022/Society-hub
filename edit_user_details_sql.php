<?php
if(isset($_POST['first']) && isset($_POST['last']) && isset($_POST['gender']) && isset($_POST['house']) && isset($_POST['dob']) && isset($_POST['family_mem']) && isset($_POST['phone']) && isset($_POST['pass'])){
    $firstname = $_POST['first'];
    $lastname = $_POST['last'];
    $gender = $_POST['gender'];
    $housenumber = $_POST['house'];
    $dob = $_POST['dob'];
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
    $query = 
            "select HouseNum from $table_name 
            where HouseNum = '$housenumber'";
    $data = mysqli_query($conn, $query) or die(mysqli_error($conn)); 
    $row = mysqli_fetch_array($data);
    if($row != NULL){
        if($row['HouseNum'] == $housenumber){
            $update_query = 
            "UPDATE $table_name 
            SET FirstName = '$firstname', LastName = '$lastname', Gender = '$gender', DOB = '$dob', family_mem = '$family_mem', Phone = '$phone', Pass = '$pass'
            WHERE HouseNum = '$housenumber'";
            mysqli_query($conn, $update_query) or die(mysqli_error($conn)); 

            $alert = 
            "<script type='text/javascript'>
            alert('Details Updated');
            window.location.href='edit_user_details.php';
            </script>";
            echo $alert;
        }
    }
    else{
        $alert = 
            "<script type='text/javascript'>
            alert('Error: User Does not exist');
            window.location.href='edit_user_details.php';
            </script>";
            echo $alert;
    }
}
?>