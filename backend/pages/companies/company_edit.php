<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];

    $query = "SELECT * FROM companies WHERE id = $id";
    $result = mysqli_query($con, $query);
    $data = mysqli_fetch_row($result);

    $name = $_POST['name'] ? $_POST['name'] : $data[1];
    $license = $_POST['license'] ? $_POST['license'] : $data[2];
    $license_expire_date = $_POST['license_expire_date'] ? $_POST['license_expire_date'] : $data[3];
    $tax = $_POST['tax'] ? $_POST['tax'] : $data[4];
    $address = $_POST['address'] ? $_POST['address'] : $data[5];
    $email = $_POST['email'] ? $_POST['email'] : $data[6];
    $number = $_POST['number'] ? $_POST['number'] : $data[7];
    $oil_type = $_POST['oil_type'] ? $_POST['oil_type'] : $data[8];
    $quantity = $_POST['quantity'] ? $_POST['quantity'] : $data[9];
    $foreign_country = $_POST['foreign_country'] ? $_POST['foreign_country'] : $data[10];
    $time = $_POST['time'] ? $_POST['time'] : $data[12];
    $extra_info = $_POST['extra_info'] ? $_POST['extra_info'] : $data[13];
    $ceo_name = $_POST['ceo_name'] ? $_POST['ceo_name'] : $data[14];
    $ceo_fname = $_POST['ceo_fname'] ? $_POST['ceo_fname'] : $data[15];
    $ceo_lname = $_POST['ceo_lname'] ? $_POST['ceo_lname'] : $data[16];
    $dep_name = $_POST['dep_name'] ? $_POST['dep_name'] : $data[17];
    $dep_fname = $_POST['dep_fname'] ? $_POST['dep_fname'] : $data[18];
    $def_lname = $_POST['def_lname'] ? $_POST['def_lname'] : $data[19];
    $ceo_email = $_POST['ceo_email'] ? $_POST['ceo_email'] : $data[20];
    $ceo_phone = $_POST['ceo_phone'] ? $_POST['ceo_phone'] : $data[21];
    $dep_email = $_POST['dep_email'] ? $_POST['dep_email'] : $data[22];
    $dep_phone = $_POST['dep_phone'] ? $_POST['dep_phone'] : $data[23];


    function upload_file($file_to_upload, $target_file)
    {
        $targetDirectory = 'uploads/domestic/';
        $targetFile = $targetDirectory . $file_to_upload;
        if (move_uploaded_file($target_file, $targetFile)) {
        }
    }


    $min = 1; // Minimum value
    $max = 100000000000000000; // Maximum value
    $randomNumber = rand($min, $max);

    if ($_FILES['stamp']['name'] != '') {
        $stamp_name_ext = pathinfo($_FILES['stamp']['name'], PATHINFO_EXTENSION);
        $stamp_name = 'stamp_' . $randomNumber . '.' . $stamp_name_ext;
        $query = "UPDATE `companies` SET stamp = '$stamp_name' where id = $id";
        mysqli_query($con, $query);

        upload_file($stamp_name, $_FILES['stamp']['tmp_name']);
        echo "File upload success";

        $pre_file_path = 'uploads/domestic/'.$data[11];
        unlink($pre_file_path);

    } else if ($_FILES['ceo_sign']['name'] != '') {
        $ceo_sign_name_ext = pathinfo($_FILES['ceo_sign']['name'], PATHINFO_EXTENSION);
        $ceo_sign_name = 'ceo_sign_' . $randomNumber . '.' . $ceo_sign_name_ext;
        $query = "UPDATE `companies` SET ceo_sign = '$ceo_sign_name' where id = $id";
        mysqli_query($con, $query);

        upload_file($ceo_sign_name, $_FILES['ceo_sign']['tmp_name']);
        echo "File upload success";
        
        $pre_file_path = 'uploads/domestic/'.$data[24];
        unlink($pre_file_path);
    } else if ($_FILES['dep_sign']['name'] != '') {
        $dep_sign_name_ext = pathinfo($_FILES['dep_sign']['name'], PATHINFO_EXTENSION);
        $dep_sign_name = 'dep_sign_' . $randomNumber . '.' . $dep_sign_name_ext;
        $query = "UPDATE `companies` SET dep_sign = '$dep_sign_name' where id = $id";
        mysqli_query($con, $query);

        upload_file($dep_sign_name, $_FILES['dep_sign']['tmp_name']);
        echo "File upload success";

        $pre_file_path = 'uploads/domestic/'.$data[25];
        unlink($pre_file_path);
    } else if ($_FILES['ceo_tazkira']['name'] != '') {
        $ceo_tazkira_name_ext = pathinfo($_FILES['ceo_tazkira']['name'], PATHINFO_EXTENSION);
        $ceo_tazkira_name = 'ceo_tazkira_' . $randomNumber . '.' . $ceo_tazkira_name_ext;
        $query = "UPDATE `companies` SET ceo_tazkira = '$ceo_tazkira_name' where id = $id";
        mysqli_query($con, $query);

        upload_file($ceo_tazkira_name, $_FILES['ceo_tazkira']['tmp_name']);
        echo "File upload success";

        $pre_file_path = 'uploads/domestic/'.$data[26];
        unlink($pre_file_path);
    } else if ($_FILES['dep_tazkira']['name'] != '') {
        $dep_tazkira_name_ext = pathinfo($_FILES['dep_tazkira']['name'], PATHINFO_EXTENSION);
        $dep_tazkira_name = 'dep_tazkira_' . $randomNumber . '.' . $dep_tazkira_name_ext;
        $query = "UPDATE `companies` SET dep_tazkira = '$dep_tazkira_name' where id = $id";
        mysqli_query($con, $query);

        upload_file($dep_tazkira_name, $_FILES['dep_tazkira']['tmp_name']);
        echo "File upload success";

        $pre_file_path = 'uploads/domestic/'.$data[27];
        unlink($pre_file_path);
    }



    $query = " UPDATE companies SET name = '$name', license = '$license', license_expire_date = '$license_expire_date', tax = '$tax', address = '$address', email = '$email', number = '$number', oil_type = '$oil_type', quantity = '$quantity', foreign_country = '$foreign_country', time =  '$time', extra_info =  '$extra_info', ceo_name =  '$ceo_name', ceo_fname =  '$ceo_fname', ceo_lname =  '$ceo_lname', dep_name =  '$dep_name', dep_fname =  '$dep_fname', def_lname =  '$def_lname', ceo_email =  '$ceo_email', ceo_phone =  '$ceo_phone', dep_email =  '$dep_email', dep_phone =  '$dep_phone' WHERE id = $id";
    mysqli_query($con, $query);
    $var = $data[0];
    header('location: ./../company_details.php?id=' . $var);
}
