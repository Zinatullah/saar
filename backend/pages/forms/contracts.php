<?php

header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");

if (isset($_GET['contract_id'])) {
    $id = $_GET['contract_id'];
    $sql = "SELECT * FROM `contracts` WHERE id = '$id'";
    // echo $sql;
    $result = mysqli_query($con, $sql);
    $data = array();
    if ($result->num_rows > 0) {
        // Loop through each row and add it to the data array
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    header('Content-Type: application/json');
    echo json_encode($data);
}

if (isset($_GET['contract_quantity'])) {
    $id = $_GET['contract_quantity'];
    // echo $id;

    $contract_id = explode(':', $id);
    $contract_id = $contract_id[0];
    
    $contract_query = "SELECT * FROM `contracts` where id = '$contract_id'";
    $contract_result = mysqli_query($con, $contract_query);
    $contract_data = $contract_result->fetch_assoc();
    $total_contract_quantity = $contract_data['quantity'];

    
    $sql = "SELECT sum(bandar_price) as bandar_price FROM `daily_form` WHERE contract = '$id'";
    $result = mysqli_query($con, $sql);

    $daily_quantity = $result->fetch_assoc();
    $total_daily_quantity = $daily_quantity['bandar_price'];

    // echo $total_contract_quantity. '<br>'. $total_daily_quantity;

    $final = $total_contract_quantity - $total_daily_quantity;
    $final_json = json_encode(["quantity" => $final]);



    // $daily_quantity = $result->fetch_assoc();
    // print_r($daily_quantity['quantity']);

    // $data = array();
    // array_push($data, $final);

    // if ($result->num_rows > 0) {
    //     while ($row = $result->fetch_assoc()) {
    //         echo "CHECK";
    //         echo $row;
    //         $data[] = $row;
    //     }
    // }
    header('Content-Type: application/json');
    echo $final_json;
}
