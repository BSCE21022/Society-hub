<?php
if(isset($_POST['CD']) && isset($_POST['BottlesNo']) && isset($_POST['Requests']) ){
    $CD = $_POST['CD'];
    $BottlesNo = $_POST['BottlesNo'];
    $Requests = $_POST['Requests'];
    $house_no = $_POST['house_no'];
    $cost = intval(200 * intval($BottlesNo));
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
    $dbname = "dbms_project";
    mysqli_select_db($conn , $dbname);
    $table_name = "WaterDelivery";

    $insert_query = 
    "INSERT INTO $table_name (CD, BottlesNo, Requests, cost, house_no) 
    VALUES ('$CD', '$BottlesNo', '$Requests', '$cost' , '$house_no')";

    mysqli_query($conn, $insert_query) or die(mysqli_error($conn));

    $alert = "<script type='text/javascript'>
                alert('Delivery Added');
                window.location.href='delivery_water_form.php';
            </script>";
    echo $alert;
}
?>


