<?php

header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");


if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $query = "SELECT * FROM companies_foreing WHERE id = $id";
    $result = mysqli_query($con, $query);
    $data = mysqli_fetch_row($result);

    $name = $_POST['name'] ? $_POST['name'] : $data[1];
    $ceo = $_POST['ceo'] ? $_POST['ceo'] : $data[2];
    $ceo_phone = $_POST['ceo_phone'] ? $_POST['ceo_phone'] : $data[3];
    $dep = $_POST['dep'] ? $_POST['dep'] : $data[4];
    $dep_phone = $_POST['dep_phone'] ? $_POST['dep_phone'] : $data[5];
    $address = $_POST['address'] ? $_POST['address'] : $data[6];
    $phone = $_POST['phone'] ? $_POST['phone'] : $data[7];
    $email = $_POST['email'] ? $_POST['email'] : $data[8];
    $license = $_POST['license'] ? $_POST['license'] : $data[9];
    $license_date = $_POST['license_date'] ? $_POST['license_date'] : $data[10];
    $country = $_POST['country'] ? $_POST['country'] : $data[11];
    $license_copy = $_FILES['license_copy']['name'] ? $_FILES['license_copy']['name'] : $data[12];

    $query = "UPDATE companies_foreing SET name = '$name' , ceo  = '$ceo' , ceo_phone = '$ceo_phone', dep = '$dep', dep_phone = '$dep_phone', address = '$address', phone = '$phone', email = '$email', license = '$license', license_date = '$license_date', country = '$country', license_copy = '$license_copy' WHERE id = '$id'";

    $result = mysqli_query($con, $query);
    $var = $data[0];

    header('location: ./../company_foreign_details.php?id='.$var);

    

}
