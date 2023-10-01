<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");

if (isset($_POST['remove'])) {
    $id = $_POST['remove'];

    $query = "DELETE FROM `daily_form` WHERE id = $id";
    $result = mysqli_query($con, $query);

    if ($result) {
        header("location: ./../daily_form_all.php");
    } else {

        $message = 'مشکل رمنځته شوئ';
        echo "<SCRIPT> alert('$message')
            window.location.replace('./../daily_form_all.php');
                </SCRIPT>";
    }
}
