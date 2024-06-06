<?php
$security_code_account = "My SocietyHub";
if(isset($_POST['first']) && isset($_POST['last']) && isset($_POST['gender']) && isset($_POST['user']) && isset($_POST['dob']) && isset($_POST['phone']) && isset($_POST['designation']) && isset($_POST['sec_code']) && isset($_POST['pass'])){
    $firstname = $_POST['first'];
    $lastname = $_POST['last'];
    $gender = $_POST['gender'];
    $user = $_POST['user'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $Designation = $_POST['designation'];
    $sec_code = $_POST['sec_code'];
    $pass = $_POST['pass'];
    if($sec_code != $security_code_account){
        $alert = 
            "<script type='text/javascript'>
            alert('Error: Invalid security code!');
            window.location.href='Create_account_management.php';
            </script>";
        echo $alert;
    }
    else{
        $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = mysqli_connect($servername, $username, $password);
        $dbname = "dbms_project";
        mysqli_select_db($conn , $dbname);
        $table_name = "Management";
        $query = 
                "select Username from $table_name 
                where username = '$user'";
        $data = mysqli_query($conn, $query) or die(mysqli_error($conn)); 
        $row = mysqli_fetch_array($data);
        if($row != NULL){
            if($row['Username'] == $user){
                $alert = 
                "<script type='text/javascript'>
                alert('Error: username already exists!');
                window.location.href='Create_account_management.php';
                </script>";
                echo $alert;
            }
        }
        else{
            $insert_query = 
            "INSERT INTO $table_name (FirstName, LastName, Gender, DOB, Phone, Pass, Designation, Username) 
            VALUES ('$firstname', '$lastname', '$gender', '$dob', '$phone', '$pass', '$Designation', '$user')";
            mysqli_query($conn, $insert_query) or die(mysqli_error($conn)); 
            $alert = 
                "<script type='text/javascript'>
                alert('Account Created');
                window.location.href='Create_account_management.php';
                </script>";
                echo $alert;
        }
    }
}
?>