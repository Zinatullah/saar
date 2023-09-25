<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");

if (isset($_POST['submit'])) {

    $company = $_POST['company'];
    $company_foreign = $_POST['company_foreign'];
    $source_country = $_POST['source_country'];
    $analyz = $_POST['analyz'];
    $mark = $_POST['mark'];
    $type = $_POST['type'];
    $quantity = $_POST['quantity'];
    $place = $_POST['place'];
    $path = $_POST['path'];
    $transport = $_POST['transport'];
    $loading = $_POST['loading'];
    $contract_valid_date = $_POST['contract_valid_date'];
    $price_per_ton = $_POST['price_per_ton'];
    $contract_start_date = $_POST['contract_start_date'];
    $loading_date = $_POST['loading_date'];
    $extra_info = $_POST['extra_info'];
    $contract_scan_copy = $_FILES['contract_scan_copy']['name'];

    echo $loading_date;

    // {  
    // $company;
    // echo $company . '<br />';
    // $company_foreign;
    // echo $company_foreign . '<br />';
    // $source_country;
    // echo $source_country . '<br />';
    // $analyz;
    // echo $analyz . '<br />';
    // $quantity;
    // echo $quantity . '<br />';
    // $place;
    // echo $place . '<br />';
    // $path;
    // echo $path . '<br />';
    // $transport;
    // echo $transport . '<br />';
    // $loading;
    // echo $loading . '<br />';
    // $contract_valid_date;
    // echo $contract_valid_date . '<br />';
    // $price_per_ton;
    // echo $price_per_ton . '<br />';
    // $contract_start_date;
    // echo $contract_start_date . '<br />';
    // $loading_date;
    // echo $loading_date . '<br />';
    // $extra_info;
    // echo $extra_info . '<br />';
    // $contract_scan_copy;
    // echo $contract_scan_copy . '<br />';
    // }

    $query = "INSERT INTO contracts(company, company_foreign, source_country, analyz, quantity, place, path, transport, loading, contract_valid_date, price_per_ton, contract_start_date, loading_date, extra_info, contract_scan_copy, mark, type) VALUES ('$company' , '$company_foreign' , '$source_country' , '$analyz' , '$quantity' , '$place' , '$path' , '$transport' , '$loading' , '$contract_valid_date' , '$price_per_ton' , '$contract_start_date' , '$loading_date' , '$extra_info' , '$contract_scan_copy', '$mark', '$type') ";


    $result = mysqli_query($con, $query);

    if ($result) {
        // Query was successful
        echo "Query executed successfully.";
    } else {
        // Query failed
        echo "Query failed: " . $con->error;
    }
    

    // echo $result;

    if ($result) {
        $message = 'شرکت ثبت شو';
        echo "<SCRIPT> alert('$message')
            window.location.replace('./../contract.php');
                </SCRIPT>";
    } else {

        $message = 'لطفا خپل ایمیلونه، د جواز نمبر او د شرکت نوم په دقیقه توګه ولیکئ';
        echo "<SCRIPT> alert('$message')
        window.location.replace('./../contract.php');
        </SCRIPT>";
    }
} else {
}
