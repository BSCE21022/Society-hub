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
            $alert = 
            "<script type='text/javascript'>
            alert('Error: Account already exists!');
            window.location.href='add_new_user.php';
            </script>";
            echo $alert;
        }
    }
    else{
        $insert_query = 
        "INSERT INTO $table_name (HouseNum, FirstName, LastName, Gender, DOB, family_mem, Phone, Pass) 
        VALUES ('$housenumber', '$firstname', '$lastname', '$gender', '$dob', '$family_mem', '$phone', '$pass' )";
        mysqli_query($conn, $insert_query) or die(mysqli_error($conn)); 
        $alert = 
            "<script type='text/javascript'>
            alert('Account Created');
            window.location.href='add_new_user.php';
            </script>";
            echo $alert;
    }
}
?>


