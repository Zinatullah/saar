<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");

// Retrieve data from the database
$sql = "SELECT name FROM `companies`";

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
