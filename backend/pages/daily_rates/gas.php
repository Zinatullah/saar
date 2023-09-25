<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");


if (isset($_POST['gas_rate'])) {
    $gas_rate = $_POST['gas_rate'];

    $query = "INSERT INTO rate_gas ( rate ) VALUES ($gas_rate)";
    $result = mysqli_query($con, $query);
    if ($result) {

        header('location: ./../daily_importance.php');
        // $message = 'شرکت ثبت شو';
        // echo "<SCRIPT> alert('$message')
        // window.location.replace('./../daily_importance.php');
        //     </SCRIPT>";

    } else {
        $errorMessage = mysqli_error($con);
        echo "Query error: " . $errorMessage;
    }
}
