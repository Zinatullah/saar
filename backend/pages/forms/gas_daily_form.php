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
    $custom_price = $_POST['custom_price'];
    $bandar_price = $_POST['bandar_price'];
    $custom = $_POST['custom'];
    $transit = $_POST['transit'];
    $tax = $_POST['tax'];
    $fees = $_POST['fees'];
    $transport_price = $_POST['transport_price'];
    $fifteen_days = $_POST['fifteen_days'];
    $dolar_price = $_POST['dolar_price'];
    $service_fees = $_POST['service_fees'];
    $material_price = $_POST['material_price'];
    $afs_price = $_POST['afs_price'];
    $dol_price = $_POST['dol_price'];

    $query = "INSERT INTO gas_daily_form( interior_country, contract, country, type, mark, quantity, price, custom_price, bandar_price, custom, transit, tax, fees, transport_price, fifteen_days, dolar_price, service_fees, material_price, afs_price, dol_price) VALUES ( '$interior_country' , '$contract' , '$country' , '$type' , '$mark' , '$quantity' , '$price' , '$custom_price' , '$bandar_price' , '$custom' , '$transit' , '$tax' , '$fees' , '$transport_price' , '$fifteen_days' , '$dolar_price' , '$service_fees' , '$material_price' , '$afs_price' , '$dol_price' )";

    $result = mysqli_query($con, $query);

    if ($result) {
        $message = 'شرکت ثبت شو';
        echo "<SCRIPT> alert('$message')
            window.location.replace('./../gas_daily_form.php');
                </SCRIPT>";
    } else {
        $message = 'فورمه په دقیقه توګه ډکه کړئ';
        echo "<SCRIPT> alert('$message')
        window.location.replace('./../contract.php');
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
