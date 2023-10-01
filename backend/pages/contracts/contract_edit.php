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

    
    
    function upload_file($file_to_upload, $target_file)
    {
        $targetDirectory = 'uploads/';
        $targetFile = $targetDirectory . $file_to_upload;
        if (move_uploaded_file($target_file, $targetFile)) {
        }
    }


    $min = 1; // Minimum value
    $max = 100000000000000000; // Maximum value
    $randomNumber = rand($min, $max);
    
    if ($_FILES['contract_scan_copy']['name'] != '') {
        $contract_scan_copy_name_ext = pathinfo($_FILES['contract_scan_copy']['name'], PATHINFO_EXTENSION);
        $contract_scan_copy_name = 'contract_scan_copy_' . $randomNumber . '.' . $contract_scan_copy_name_ext;
        
        $query = "UPDATE `contracts` SET contract_scan_copy ='$contract_scan_copy_name' where id = $id";
        echo $query;
        mysqli_query($con, $query);

        upload_file($contract_scan_copy_name, $_FILES['contract_scan_copy']['tmp_name']);
        echo "File upload success";

        $pre_file_path = 'uploads/'.$pre_data[15];
        unlink($pre_file_path);
    }
    

    


    $query = "UPDATE contracts SET company = '$company', company_foreign = '$company_foreign', source_country = '$source_country', analyz = '$analyz', quantity = '$quantity', place = '$place', path = '$path', transport = '$transport', loading = '$loading', contract_valid_date = '$contract_valid_date', price_per_ton = '$price_per_ton', contract_start_date = '$contract_start_date', loading_date = '$loading_date', extra_info = '$extra_info' WHERE id = $id";

    $result = mysqli_query($con, $query);
    $var = $pre_data[0];
    header('location: ./../contract_details.php?id='.$var);

    if ($result) {
        $message = 'قرارداد تغیر شو';
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
