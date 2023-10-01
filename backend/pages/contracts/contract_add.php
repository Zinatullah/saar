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

    function upload_file($file_to_upload, $target_file)
    {
        $targetDirectory = 'uploads/';
        $targetFile = $targetDirectory . $file_to_upload;
        if (move_uploaded_file($target_file, $targetFile)) {
            echo 'File uploaded successfully.';
        }
    }


    $min = 1; // Minimum value
    $max = 100000000000000000; // Maximum value
    $randomNumber = rand($min, $max);

    $contract_scan_copy_name_ext = pathinfo($_FILES['contract_scan_copy']['name'], PATHINFO_EXTENSION);
    $contract_scan_copy_name = 'contract_scan_copy_' . $randomNumber . '.' . $contract_scan_copy_name_ext;

    upload_file($contract_scan_copy_name, $_FILES['contract_scan_copy']['tmp_name']);




    $query = "INSERT INTO contracts(company, company_foreign, source_country, analyz, quantity, place, path, transport, loading, contract_valid_date, price_per_ton, contract_start_date, loading_date, extra_info, contract_scan_copy, mark, type) VALUES ('$company' , '$company_foreign' , '$source_country' , '$analyz' , '$quantity' , '$place' , '$path' , '$transport' , '$loading' , '$contract_valid_date' , '$price_per_ton' , '$contract_start_date' , '$loading_date' , '$extra_info' , '$contract_scan_copy_name', '$mark', '$type') ";


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
