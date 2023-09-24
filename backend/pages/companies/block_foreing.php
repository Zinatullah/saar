<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");

if (isset($_POST['id'])) {


    $id = $_POST['id'];

    $query = "UPDATE `companies_foreing` SET `block`= 1   WHERE id = $id";
    $result = mysqli_query($con, $query);

    if (!$result) {
        $error = mysqli_error($con);
        $message =  "MySQL Error: " . $error;
        echo "<SCRIPT> alert('$message')
        window.location.replace('./../add_company.php');
            </SCRIPT>";
    }

    $var = $id;
    header('location: ./../company_block_foreign.php');

    
}

if (isset($_POST['id_unblock'])) {


    $id = $_POST['id_unblock'];

    $query = "UPDATE `companies_foreing` SET `block`= 0   WHERE id = $id";
    $result = mysqli_query($con, $query);

    if (!$result) {
        $error = mysqli_error($con);
        $message =  "MySQL Error: " . $error;
        // echo "<SCRIPT> alert('$message')
        // window.location.replace('./../add_company.php');
        //     </SCRIPT>";
    }

    $var = $id;
    header('location: ./../company_block_foreign.php');
}
