<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");

if (isset($_POST['service_tax'])) {
    $service_tax = $_POST['service_tax'];

    echo $service_tax;

    $query = "INSERT INTO service_tax ( rate ) VALUES ($service_tax)";
    $result = mysqli_query($con, $query);
    if ($result) {

        header('location: ./../long_term_importance.php');
        
        
        // $message = 'شرکت ثبت شو';
        // echo "<SCRIPT> alert('$message')
        // window.location.replace('./../daily_importance.php');
            // </SCRIPT>";
    } else {
        $errorMessage = mysqli_error($con);
        echo "Query error: " . $errorMessage;
    }
}
