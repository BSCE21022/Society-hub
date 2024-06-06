<?php
if(isset($_POST['category_complain']) && isset($_POST['area']) && isset($_POST['urgency']) && isset($_POST['cd'])){
    $house_no = $_POST['house_no'];
    $Category = $_POST['category_complain'];
    $Area = $_POST['area'];
    $text = $_POST['complain_text'];
    $Urgency = $_POST['urgency'];
    $CD = $_POST['cd'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
    $dbname = "dbms_project";
    mysqli_select_db($conn , $dbname);
    $table_name = "Complains";

    $insert_query = 
    "INSERT INTO $table_name (Category, Area, myTextArea, Urgency, CD, house_no) 
    VALUES ('$Category', '$Area', '$text', '$Urgency', '$CD', '$house_no')";
    mysqli_query($conn, $insert_query) or die(mysqli_error($conn));

    $alert = "<script type='text/javascript'>
                alert('Complain Added');
                window.location.href='Complain.php';
            </script>";
    echo $alert;
}
?>
