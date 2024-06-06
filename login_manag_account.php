<?php
session_start();
if(isset($_POST['username']) && isset($_POST['pass'])){
    $user = $_POST['username'];
    $pass = $_POST['pass'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
    $dbname = "dbms_project";
    mysqli_select_db($conn , $dbname);
    $table_name = "Management";
    $query = 
            "select Username from $table_name 
            where Username = '$user'";
    $data = mysqli_query($conn, $query) or die(mysqli_error($conn)); 
    $row = mysqli_fetch_array($data);
    if($row != NULL){
        if($row['Username'] == $user){
            // echo $user;
            // echo "<br/>";
            // echo $pass;

            $query_check = 
            "select Pass from $table_name 
            where Username = '$user'";
            $data_pass = mysqli_query($conn, $query_check) or die(mysqli_error($conn));
            $row_pass = mysqli_fetch_array($data_pass);
            if($row_pass['Pass'] == $pass){
                $_SESSION['user'] = $user; // Store the username in the session variable
                header('Location: dashboard_management.php'); // Redirect to the dashboard
                exit();
            }
            else{
                $alert = 
            "<script type='text/javascript'>
            alert('Error: Incorrect Password!');
            window.location.href='login_management.php';
            </script>";
            echo $alert;
            }
        }
    }
    else{
        $alert = 
            "<script type='text/javascript'>
            alert('Error: Account does not exist!');
            window.location.href='login_management.php';
            </script>";
            echo $alert;
    }
}
?>