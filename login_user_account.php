<?php
session_start();
if(isset($_POST['house_no']) && isset($_POST['pass'])){
    $housenumber = $_POST['house_no'];
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
            // echo $housenumber;
            // echo "<br/>";
            // echo $pass;
            $query_check = 
            "select Pass from $table_name 
            where HouseNum = '$housenumber'";
            $data_pass = mysqli_query($conn, $query_check) or die(mysqli_error($conn));
            $row_pass = mysqli_fetch_array($data_pass);
            if($row_pass['Pass'] == $pass){
                $_SESSION['house_no'] = $housenumber; // Store the username in the session variable
                header('Location: dashboard.php'); // Redirect to the dashboard
                exit();
            }
            else{
                $alert = 
            "<script type='text/javascript'>
            alert('Error: Incorrect Password!');
            window.location.href='login_user.php';
            </script>";
            echo $alert;
            }
        }
    }
    else{
        $alert = 
            "<script type='text/javascript'>
            alert('Error: Account does not exist!');
            window.location.href='login_user.php';
            </script>";
            echo $alert;
    }
}
?>