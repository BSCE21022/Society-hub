<?php
if(isset($_POST['house'])){
    $housenumber = $_POST['house'];
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
            $deletequery = 
            "DELETE FROM $table_name WHERE HouseNum = '$housenumber'";
            mysqli_query($conn, $deletequery) or die(mysqli_error($conn)); 
            $alert = 
                "<script type='text/javascript'>
                alert('Error: Account Removed!');
                window.location.href='remove_user.php';
                </script>";
                echo $alert;
        }
    }
    else{
        $alert = 
            "<script type='text/javascript'>
            alert('Error: Account does not exist!');
            window.location.href='remove_user.php';
            </script>";
            echo $alert;
    }
}
?>