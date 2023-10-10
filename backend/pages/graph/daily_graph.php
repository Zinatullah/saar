<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");

$date = date('Y-m-d 00:00:01');

// echo $date;

$sql = "SELECT port, sum(bandar_price) as total FROM `daily_form` where timestamp >= '$date' GROUP by port";
// $sql = "SELECT interior_country, country, mark, port, sum(quantity), sum(afs_price), sum(`material_price`), sum(`service_fees`), sum(`transport_price`), sum(`fees`), sum(`tax`) FROM `daily_form` group by interior_country, mark, port
// ";
// echo $sql;
$result = $con->query($sql);

$data = array();

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    // Add each row of data to the array
    $data[] = $row;
  }
}

// Close the database connection
$con->close();

// Convert data to JSON format
$dataJson = json_encode($data);

// Send the JSON response
header("Content-type: application/json");
echo $dataJson;
