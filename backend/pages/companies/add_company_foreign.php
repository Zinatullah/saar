<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $ceo = $_POST['ceo'];
    $ceo_phone = $_POST['ceo_phone'];
    $dep = $_POST['dep'];
    $dep_phone = $_POST['dep_phone'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $license = $_POST['license'];
    $license_date = $_POST['license_date'];
    $country = $_POST['country'];
    $license_copy = $_FILES['license_copy']['name'];



    function upload_file($file_to_upload, $target_file)
    {
        $targetDirectory = 'uploads/foreign/';
        $targetFile = $targetDirectory . $file_to_upload;
        if (move_uploaded_file($target_file, $targetFile)) {
            echo 'File uploaded successfully.';
        }
    }


    $min = 1; // Minimum value
    $max = 100000000000000000; // Maximum value
    $randomNumber = rand($min, $max);

    $license_copy_name_ext = pathinfo($_FILES['license_copy']['name'], PATHINFO_EXTENSION);
    $license_copy_name = 'license_copy_' . $randomNumber . '.' . $license_copy_name_ext;

    upload_file($license_copy_name, $_FILES['license_copy']['tmp_name']);




    $check_query = "Select * from companies_foreing where email = '$email'";
    $result = mysqli_query($con, $check_query);

    if ($result && mysqli_num_rows($result) > 0) {
        $message = 'لطفا خپل ایمیلونه، د جواز نمبر او د شرکت نوم په دقیقه توګه ولیکئ';
        // echo "<SCRIPT> alert('$message')
        // window.location.replace('./../add_foreign_company.php');
        //     </SCRIPT>";
    } else {

        $query = "INSERT INTO companies_foreing(name, ceo, ceo_phone, dep, dep_phone, address, phone, email, license, license_date, country, license_copy) VALUES ('$name', '$ceo' , '$ceo_phone', '$dep', '$dep_phone' ,'$address', '$phone', '$email', '$license', '$license_date', '$country', '$license_copy')";
        // mysqli_query($con, $query);
        // $message = 'شرکت ثبت شو';
        // echo "<SCRIPT> alert('$message')
        // window.location.replace('./../add_foreign_company.php');
        //     </SCRIPT>";
    }
} else {
}
