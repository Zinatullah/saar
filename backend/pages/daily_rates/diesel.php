<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");

echo "SUccss";

if (isset($_POST['diesel_rate'])) {
    $diesel_rate = $_POST['diesel_rate'];

    echo $diesel_rate;

    $query = "INSERT INTO rate_diesel ( rate ) VALUES ($diesel_rate)";
    $result = mysqli_query($con, $query);
    if ($result) {

        header('location: ./../daily_importance.php');
        
        
        // $message = 'شرکت ثبت شو';
        // echo "<SCRIPT> alert('$message')
        // window.location.replace('./../daily_importance.php');
            // </SCRIPT>";
    } else {
        $errorMessage = mysqli_error($con);
        echo "Query error: " . $errorMessage;
    }
}
