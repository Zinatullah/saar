<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");

if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $interior_country = $_POST['interior_country'];
    $contract = $_POST['contract'];
    $country = $_POST['country'];
    $type = $_POST['type'];
    $mark = $_POST['mark'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $custom_price = $_POST['custom_price'];
    $dolar_price = $_POST['dolar_price'];
    $oil_rate = $_POST['oil_rate'];
    $gas_rate = $_POST['gas_rate'];
    $fifteen_days = $_POST['fifteen_days'];
    $bandar_price = $_POST['bandar_price'];
    $custom = $_POST['custom'];
    $transit = $_POST['transit'];
    $tax = $_POST['tax'];
    $fees = $_POST['fees'];
    $transport_price = $_POST['transport_price'];
    $service_fees = $_POST['service_fees'];
    $material_price = $_POST['material_price'];
    $afs_price = $_POST['afs_price'];
    $dol_price = $_POST['dol_price'];

    echo $id .'<br>';
    


    $query = "UPDATE daily_form SET interior_country= '$interior_country' ,contract= '$contract' ,country= '$country' ,type= '$type' ,mark= '$mark' ,quantity= '$quantity' ,price= '$price' ,custom_price= '$custom_price' ,dolar_price= '$dolar_price' ,oil_rate= '$oil_rate' ,gas_rate= '$gas_rate' ,fifteen_days= '$fifteen_days' ,bandar_price= '$bandar_price' ,custom= '$custom' ,transit= '$transit' ,tax= '$tax' ,fees= '$fees' ,transport_price= '$transport_price' ,service_fees= '$service_fees' ,material_price= '$material_price' ,afs_price= '$afs_price' ,dol_price= '$dol_price' where id = $id";

    $result = mysqli_query($con, $query);

    if ($result) {
        header('location: ./../daily_form_details.php?id=' . $id);
    } else {

        $error = mysqli_error($con);
        echo $error;
        echo "Query error: " . $$message = 'فورمه په دقیقه توګه ډکه کړئ';
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
