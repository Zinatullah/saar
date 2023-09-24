<?php

header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");

if (isset($_POST['remove'])) {
    $id = $_POST['remove'];
    $query = "DELETE FROM companies WHERE id = $id";
    echo $query;
    $result = mysqli_query($con, $query);
    
    header("Location: ./../company_all.php");
    
}
