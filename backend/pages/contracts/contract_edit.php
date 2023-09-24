<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $query = "SELECT * FROM contracts WHERE id = $id";
    $result = mysqli_query($con, $query);
    $pre_data = mysqli_fetch_row($result);
    
    $company = $_POST['company'] ? $_POST['company'] : $pre_data[1];
    $company_foreign = $_POST['company_foreign'] ? $_POST['company_foreign'] : $pre_data[2];
    $source_country = $_POST['source_country'];
    $analyz = $_POST['analyz'];
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
    $contract_scan_copy = $_FILES['contract_scan_copy']['name'] ? $_FILES['contract_scan_copy']['name'] : $pre_data[14];

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

    $query = "UPDATE contracts SET company = '$company', company_foreign = '$company_foreign', source_country = '$source_country', analyz = '$analyz', quantity = '$quantity', place = '$place', path = '$path', transport = '$transport', loading = '$loading', contract_valid_date = '$contract_valid_date', price_per_ton = '$price_per_ton', contract_start_date = '$contract_start_date', loading_date = '$loading_date', extra_info = '$extra_info', contract_scan_copy= '$contract_scan_copy' WHERE id = $id";

    $result = mysqli_query($con, $query);
    $var = $pre_data[0];
    header('location: ./../contract_details.php?id='.$var);

    if ($result) {
        $message = 'شرکت تغیر شو';
        echo "<SCRIPT> alert('$message')
            window.location.replace('./../contract_details.php?id='.$var);
                </SCRIPT>";
    } else {

        $message = 'لطفا فورم په دقیقه توګه ډک کړئ';
        echo "<SCRIPT> alert('$message')
        window.location.replace('./../contract_details.php?id='.$var);
        </SCRIPT>";
    }
} else {

}
