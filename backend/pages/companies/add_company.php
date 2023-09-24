<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $license = $_POST['license'];
    $license_expire_date = $_POST['license_expire_date'];
    $tax = $_POST['tax'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $quantity = $_POST['quantity'];
    $foreign_country = $_POST['foreign_country'];
    $time = $_POST['time'];
    $extra_info = $_POST['extra_info'];
    $ceo_name = $_POST['ceo_name'];
    $ceo_fname = $_POST['ceo_fname'];
    $ceo_lname = $_POST['ceo_lname'];
    $dep_name = $_POST['dep_name'];
    $dep_fname = $_POST['dep_fname'];
    $def_lname = $_POST['def_lname'];
    $ceo_email = $_POST['ceo_email'];
    $ceo_phone = $_POST['ceo_phone'];
    $dep_email = $_POST['dep_email'];
    $dep_phone = $_POST['dep_phone'];

    $oil = isset($_POST['oil']) ? $_POST['oil'] : 'none';
    $gas = isset($_POST['gas']) ? $_POST['gas'] : 'none';
    $condensate = isset($_POST['condensate']) ? $_POST['condensate'] : '';

    $oil_type = $oil . ' ' . $gas . ' ' . $condensate;

    $stamp = $_FILES['stamp']['name'];
    $ceo_sign = $_FILES['ceo_sign']['name'];
    $dep_sign = $_FILES['dep_sign']['name'];
    $ceo_tazkira = $_FILES['ceo_tazkira']['name'];
    $dep_tazkira = $_FILES['dep_tazkira']['name'];


    $check_query = "Select * from companies where email = '$email' or name = '$name' or license = '$license' or ceo_email= '$ceo_email' or dep_email = '$dep_email' ";
    $result = mysqli_query($con, $check_query);

    if ($result && mysqli_num_rows($result) > 0) {
    $message = 'لطفا خپل ایمیلونه، د جواز نمبر او د شرکت نوم په دقیقه توګه ولیکئ';
    echo "<SCRIPT> alert('$message')
    window.location.replace('./../add_company.php');
        </SCRIPT>";

    } else {
    $query = "INSERT INTO companies(name, license, license_expire_date, tax, address, email, number, oil_type, quantity, foreign_country, stamp, time, extra_info, ceo_name, ceo_fname, ceo_lname, dep_name, dep_fname, def_lname, ceo_email, ceo_phone, dep_email, dep_phone, ceo_sign, dep_sign, ceo_tazkira, dep_tazkira) VALUES ( '$name' , '$license', '$license_expire_date', '$tax', '$address', '$email', '$number', '$oil_type', '$quantity', '$foreign_country', '$stamp', '$time', '$extra_info', '$ceo_name', '$ceo_fname', '$ceo_lname', '$dep_name', '$dep_fname', '$def_lname', '$ceo_email', '$ceo_phone', '$dep_email', '$dep_phone', '$ceo_sign', '$dep_sign', '$ceo_tazkira', '$dep_tazkira' )";

    $result = mysqli_query($con, $query);
    // if (!$result) {
    //     $error = mysqli_error($con);
    //     $message =  "MySQL Error: " . $error;
    //     echo "<SCRIPT> alert('$message')
    //     window.location.replace('./../add_company.php');
    //         </SCRIPT>";
    // } else {
        $message = 'شرکت ثبت شو';
        echo "<SCRIPT> alert('$message')
        window.location.replace('./../add_company.php');
            </SCRIPT>";
    // }

    }
} else {
}
