<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");

if (isset($_POST['submit'])) {

    $interior_country = $_POST['interior_country'];
    $contract = $_POST['contract'];
    $country = $_POST['country'];
    $type = $_POST['type'];
    $mark = $_POST['mark'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $port = $_POST['port'];
    $custom_price = $_POST['custom_price'];
    $dolar_price = $_POST['dolar_price'];
    $oil_rate = $_POST['oil_rate'];
    $gas_rate = $_POST['gas_rate'];
    $fifteen_days = $_POST['fifteen_days'];
    $bandar_price = $_POST['bandar_price'];
    $custom = $_POST['custom'] ?  $_POST['custom'] : 0;
    $transit = $_POST['transit'] ? $_POST['transit'] : 0;
    $tax = $_POST['tax'] ? $_POST['tax'] : 0;
    $fees = $_POST['fees'] ? $_POST['fees'] : 0;
    $transport_price = $_POST['transport_price'] ? $_POST['transport_price'] : 0;
    $service_fees = $_POST['service_fees'] ? $_POST['service_fees'] : 0;
    $material_price = $_POST['material_price'];
    $afs_price = $_POST['afs_price'];
    $dol_price = $_POST['dol_price'];

    $query = "INSERT INTO daily_form (interior_country ,  contract ,  country ,  type ,  mark ,  quantity ,  price , port,  custom_price ,  dolar_price ,  oil_rate ,  gas_rate ,  fifteen_days ,  bandar_price ,  custom ,  transit ,  tax ,  fees ,  transport_price ,  service_fees ,  material_price ,  afs_price ,  dol_price ) VALUES ( '$interior_country' , '$contract' , '$country' , '$type' , '$mark' , '$quantity' , '$price', '$port' , '$custom_price', '$dolar_price', '$oil_rate', '$gas_rate', '$fifteen_days'  , '$bandar_price' , '$custom' , '$transit' , '$tax' , '$fees' , '$transport_price'  , '$service_fees' , '$material_price' , '$afs_price' , '$dol_price' )";

    $result = mysqli_query($con, $query);

    // $get_query = "SELECT remain_quantity FROM `contracts` WHERE company = '$interior_country'";
    // $get_result = mysqli_query($con, $get_query);
    // $get_data = $get_result->fetch_assoc();

    // $remain_quantity = $get_data['remain_quantity'];
    // $current_quantity = $bandar_price;

    // $final = $current_quantity + $remain_quantity;
    // echo $final;


    // $update_query = "UPDATE `contracts` SET `remain_quantity` = $final where company = '$interior_country'";
    // echo $update_query;
    // mysqli_query($con, $update_query);

    if ($result) {
        $message = 'فورمه ثبت شوه';
        echo "<SCRIPT> alert('$message')
            window.location.replace('./../daily_form.php');
                </SCRIPT>";
    } else {

        $error = mysqli_error($con);
        echo $error;
        echo "Query error: " . $$message = 'فورمه په دقیقه توګه ډکه کړئ';
        echo "<SCRIPT> alert('$message')
        window.location.replace('./../daily_form.php');
        </SCRIPT>";
    }



    // echo $interior_country . '<br>';
    // echo $contract . '<br>';
    // echo $country . '<br>';
    // echo $type . '<br>';
    // echo $mark . '<br>';
    // echo $quantity . '<br>';
    // echo $price . '<br>';
    // echo $custom_price . '<br>';
    // echo $bandar_price . '<br>';
    // echo $custom . '<br>';
    // echo $transit . '<br>';
    // echo $tax;
    // echo $fees . '<br>';
    // echo $transport_price . '<br>';
    // echo $fifteen_days . '<br>';
    // echo $dolar_price . '<br>';
    // echo $service_fees . '<br>';
    // echo $material_price . '<br>';
    // echo $afs_price . '<br>';
    // echo $dol_price . '<br>';


}
