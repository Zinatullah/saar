<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");


if (isset($_POST['dolar_rate'])) {
    $dolar_rate = $_POST['dolar_rate'];

    $query = "INSERT INTO rate_dolar ( rate ) VALUES ($dolar_rate)";
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
