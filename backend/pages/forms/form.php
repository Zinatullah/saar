<?php

header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `contracts` WHERE company = '$id'";
    $result = mysqli_query($con, $sql);

    $data = array();

    if ($result->num_rows > 0) {
        // Loop through each row and add it to the data array
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }


    header('Content-Type: application/json');
    echo json_encode($data);
}

if(isset($_GET[''])){
    
}