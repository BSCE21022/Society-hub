<?php
if(isset($_POST['delete_event'])){
    $number = $_POST['delete_event'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
    $dbname = "dbms_project";
    mysqli_select_db($conn , $dbname);
    $table_name = "WaterDelivery";
    $query = "SELECT ID FROM $table_name WHERE ID = '$number'";
    $data = mysqli_query($conn, $query) or die(mysqli_error($conn)); 
    $row = mysqli_fetch_array($data);
    
    if($row != NULL){
        if($row['ID'] == $number){
            $updateQuery = "UPDATE $table_name SET status = 'T' WHERE ID = '$number'";
            mysqli_query($conn, $updateQuery) or die(mysqli_error($conn)); 
            $alert = "<script type='text/javascript'>
                alert('Status Updated Successfully!');
                window.location.href='change_Status_waterdelivery.php';
                </script>";
            echo $alert;
        }
    } else {
        $alert = "<script type='text/javascript'>
            alert('Error: Invalid number');
            window.location.href='change_Status_waterdelivery.php';
            </script>";
        echo $alert;
    }
}
?>
