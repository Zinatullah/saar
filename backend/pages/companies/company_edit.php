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
    // echo $name;
    // echo "<br/>";
    $license = $_POST['license'] ? $_POST['license'] : $data[2];
    // echo $license;
    // echo "<br/>";
    $license_expire_date = $_POST['license_expire_date'] ? $_POST['license_expire_date'] : $data[3];
    // echo $license_expire_date;
    // echo "<br/>";
    $tax = $_POST['tax'] ? $_POST['tax'] : $data[4];
    // echo $tax;
    // echo "<br/>";
    $address = $_POST['address'] ? $_POST['address'] : $data[5];
    // echo $address;
    // echo "<br/>";
    $email = $_POST['email'] ? $_POST['email'] : $data[6];
    // echo $email;
    // echo "<br/>";
    $number = $_POST['number'] ? $_POST['number'] : $data[7];
    // echo $number;
    // echo "<br/>";
    $oil_type = $_POST['oil_type'] ? $_POST['oil_type'] : $data[8];
    // echo $oil_type;
    // echo "<br/>";
    $quantity = $_POST['quantity'] ? $_POST['quantity'] : $data[9];
    // echo $quantity;
    // echo "<br/>";
    $foreign_country = $_POST['foreign_country'] ? $_POST['foreign_country'] : $data[10];
    // echo $foreign_country;
    // echo "<br/>";
    $time = $_POST['time'] ? $_POST['time'] : $data[12];
    // echo $time;
    // echo "<br/>";
    $extra_info = $_POST['extra_info'] ? $_POST['extra_info'] : $data[13];
    // echo $extra_info;
    // echo "<br/>";
    $ceo_name = $_POST['ceo_name'] ? $_POST['ceo_name'] : $data[14];
    // echo $ceo_name;
    // echo "<br/>";
    $ceo_fname = $_POST['ceo_fname'] ? $_POST['ceo_fname'] : $data[15];
    // echo $ceo_fname;
    // echo "<br/>";
    $ceo_lname = $_POST['ceo_lname'] ? $_POST['ceo_lname'] : $data[16];
    // echo $ceo_lname;
    // echo "<br/>";
    $dep_name = $_POST['dep_name'] ? $_POST['dep_name'] : $data[17];
    // echo $dep_name;
    // echo "<br/>";
    $dep_fname = $_POST['dep_fname'] ? $_POST['dep_fname'] : $data[18];
    // echo $dep_fname;
    // echo "<br/>";
    $def_lname = $_POST['def_lname'] ? $_POST['def_lname'] : $data[19];
    // echo $def_lname;
    // echo "<br/>";
    $ceo_email = $_POST['ceo_email'] ? $_POST['ceo_email'] : $data[20];
    // echo $ceo_email;
    // echo "<br/>";
    $ceo_phone = $_POST['ceo_phone'] ? $_POST['ceo_phone'] : $data[21];
    // echo $ceo_phone;
    // echo "<br/>";
    $dep_email = $_POST['dep_email'] ? $_POST['dep_email'] : $data[22];
    // echo $dep_email;
    // echo "<br/>";
    $dep_phone = $_POST['dep_phone'] ? $_POST['dep_phone'] : $data[23];
    // echo $dep_phone;
    // echo "<br/>";

    $stamp = $_FILES['stamp'] ? $_FILES['stamp']['name'] : $data[11];
    echo $stamp;
    // echo "<br/>";
    $ceo_sign = $_FILES['ceo_sign'] ? $_FILES['ceo_sign']['name'] : $data[24];
    // echo $ceo_sign;
    // echo "<br/>";
    $dep_sign = $_FILES['dep_sign'] ? $_FILES['dep_sign']['name'] : $data[25];
    // echo $dep_sign;
    // echo "<br/>";
    $ceo_tazkira = $_FILES['ceo_tazkira'] ? $_FILES['ceo_tazkira']['name'] : $data[26];
    // echo $ceo_tazkira;
    // echo "<br/>";
    $dep_tazkira = $_FILES['dep_tazkira'] ? $_FILES['dep_tazkira']['name'] : $data[27];
    // echo $data[27];
    // echo $dep_tazkira;
    // echo "<br/>";

    $query = " UPDATE companies SET name = '$name', license = '$license', license_expire_date = '$license_expire_date', tax = '$tax', address = '$address', email = '$email', number = '$number', oil_type = '$oil_type', quantity = '$quantity', foreign_country = '$foreign_country', stamp = '$stamp', time =  '$time', extra_info =  '$extra_info', ceo_name =  '$ceo_name', ceo_fname =  '$ceo_fname', ceo_lname =  '$ceo_lname', dep_name =  '$dep_name', dep_fname =  '$dep_fname', def_lname =  '$def_lname', ceo_email =  '$ceo_email', ceo_phone =  '$ceo_phone', dep_email =  '$dep_email', dep_phone =  '$dep_phone', ceo_sign = '$ceo_sign', dep_sign = '$dep_sign', ceo_tazkira = $ceo_tazkira, dep_tazkira = $dep_tazkira WHERE id = $id";

    // mysqli_query($con, $query);

    // echo $query;

    // 
    $var = $data[0];
    // header('location: ./../company_details.php?id='.$var);
    // 
}
