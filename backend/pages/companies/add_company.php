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


    $stamp = $_FILES['stamp'];
    $ceo_sign = $_FILES['ceo_sign'];
    $dep_sign = $_FILES['dep_sign'];
    $ceo_tazkira = $_FILES['ceo_tazkira'];
    $dep_tazkira = $_FILES['dep_tazkira'];

    // print_r($stamp['tmp_name']);
    $filename = $stamp['name'];
    $filename = $ceo_sign['name'];
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    $stamp_name_ext = pathinfo($stamp['name'], PATHINFO_EXTENSION);
    $ceo_sign_name_ext = pathinfo($ceo_sign['name'], PATHINFO_EXTENSION);
    $ceo_tazkira_name_ext = pathinfo($ceo_tazkira['name'], PATHINFO_EXTENSION);
    $dep_sign_name_ext = pathinfo($dep_sign['name'], PATHINFO_EXTENSION);
    $dep_tazkira_name_ext = pathinfo($dep_tazkira['name'], PATHINFO_EXTENSION);

    $min = 1; // Minimum value
    $max = 100000000000000000; // Maximum value

    $randomNumber = rand($min, $max);
    // echo $randomNumber;

    // echo $stamp_name_ext. ' stamp ';
    // echo '<br>'. ' ';
    // echo $ceo_sign_name_ext.  ' ceo ';
    // echo '<br>'. ' ';
    // echo $ceo_tazkira_name_ext. ' ceo ';
    // echo '<br>'. ' ';
    // echo $dep_sign_name_ext. ' dep ';
    // echo '<br>'. ' ';
    // echo $dep_tazkira_name_ext. ' dep ';
    // echo '<br> ';

    $stamp_name = 'stamp_' . $randomNumber . '.' . $stamp_name_ext;
    // echo $stamp_name . '<br>';
    $ceo_sign_name = 'ceo_sign_' . $randomNumber . '.' . $ceo_sign_name_ext;
    // echo $ceo_sign_name . '<br>';
    $ceo_tazkira_name = 'ceo_tazkira_' . $randomNumber . '.' . $ceo_tazkira_name_ext;
    // echo $ceo_tazkira_name . '<br>';
    $dep_sign_name = 'dep_sign_' . $randomNumber . '.' . $dep_sign_name_ext;
    // echo $dep_sign_name . '<br>';
    $dep_tazkira_name = 'dep_tazkira_' . $randomNumber . '.' . $dep_tazkira_name_ext;
    // echo $dep_tazkira_name . '<br>';



    function upload_file($file_to_upload, $target_file)
    {
        $targetDirectory = 'uploads/domestic/';
        $targetFile = $targetDirectory . $file_to_upload;

        if (move_uploaded_file($target_file, $targetFile)) {
            // echo 'File uploaded successfully.';
        }
    }

    upload_file($stamp_name, $stamp['tmp_name']);
    upload_file($ceo_sign_name, $ceo_sign['tmp_name']);
    upload_file($ceo_tazkira_name, $ceo_tazkira['tmp_name']);
    upload_file($dep_sign_name, $dep_sign['tmp_name']);
    upload_file($dep_tazkira_name, $dep_tazkira['tmp_name']);

    $check_query = "Select * from companies where email = '$email' or name = '$name' or license = '$license' or ceo_email= '$ceo_email' or dep_email = '$dep_email' ";
    $result = mysqli_query($con, $check_query);

    if ($result && mysqli_num_rows($result) > 0) {
        $message = 'لطفا خپل ایمیلونه، د جواز نمبر او د شرکت نوم په دقیقه توګه ولیکئ';
        echo "<SCRIPT> alert('$message')
    window.location.replace('./../add_company.php');
        </SCRIPT>";
    } else {
        $query = "INSERT INTO companies(name, license, license_expire_date, tax, address, email, number, oil_type, quantity, foreign_country, stamp, time, extra_info, ceo_name, ceo_fname, ceo_lname, dep_name, dep_fname, def_lname, ceo_email, ceo_phone, dep_email, dep_phone, ceo_sign, dep_sign, ceo_tazkira, dep_tazkira) VALUES ( '$name' , '$license', '$license_expire_date', '$tax', '$address', '$email', '$number', '$oil_type', '$quantity', '$foreign_country', '$stamp_name', '$time', '$extra_info', '$ceo_name', '$ceo_fname', '$ceo_lname', '$dep_name', '$dep_fname', '$def_lname', '$ceo_email', '$ceo_phone', '$dep_email', '$dep_phone', '$ceo_sign_name', '$dep_sign_name', '$ceo_tazkira_name', '$dep_tazkira_name' )";

        $result = mysqli_query($con, $query);
        if (!$result) {
            $error = mysqli_error($con);
            $message =  "MySQL Error: " . $error;
            echo "<SCRIPT> alert('$message')
            window.location.replace('./../add_company.php');
                </SCRIPT>";
        } else {
        $message = 'شرکت ثبت شو';
        echo "<SCRIPT> alert('$message')
        window.location.replace('./../add_company.php');
            </SCRIPT>";
        }

    }
} else {
}
