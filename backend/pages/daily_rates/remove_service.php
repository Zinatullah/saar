<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo $id;

    $query = "DELETE FROM `rate_15_days` WHERE id = $id";
    $result = mysqli_query($con, $query);
    if ($result) {
        header('location: ./../daily_importance.php');
    } else {
        $errorMessage = mysqli_error($con);
        echo "Query error: " . $errorMessage;
    }
}
