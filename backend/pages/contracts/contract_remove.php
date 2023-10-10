<?php

header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");

if (isset($_POST['remove'])) {
    $id = $_POST['remove'];
    echo $id;
    $query = "DELETE FROM contracts WHERE id = $id";
    $result = mysqli_query($con, $query);

    if($result){
        header("Location: ./../contract_all.php");
    }else{
        header("Location: ./../contract_all.php");
    }
    
    
}
if (isset($_POST['remove1'])) {
    $id = $_POST['remove1'];
    $company = $_POST['company'];
    $query = "DELETE FROM contracts WHERE id = $id";
    $result = mysqli_query($con, $query);

    if($result){
        header("Location: ./../company_contracts_all.php?id=".$company);
    }else{
        header("Location: ./../company_contracts_all.php?id=".$company);
    }
    
    
}
