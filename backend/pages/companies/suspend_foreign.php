<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");

if (isset($_POST['id'])) {


    $id = $_POST['id'];

        $query = "UPDATE `companies_foreing` SET `suspend`= 1   WHERE id = $id";
    $result = mysqli_query($con, $query);

    $var = $id;
    header('location: ./../company_suspend_foreign.php');

    
}

if (isset($_POST['id_unsuspend'])) {


    $id = $_POST['id_unsuspend'];

    $query = "UPDATE `companies_foreing` SET `suspend`= 0   WHERE id = $id";
    $result = mysqli_query($con, $query);

    $var = $id;
    header('location: ./../company_suspend_foreign.php');
}
