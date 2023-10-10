<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");

// $date = date('Y-m-d 00:00:01');

// Get the current date
$currentDate = new DateTime();

// Find the first day (Monday) of the current week
$firstDayOfWeek = clone $currentDate;
$firstDayOfWeek->modify('previous week')->modify('Saturday');

// Get the dates of all the days in the current week
$weekDays = array();
for ($i = 0; $i < 7; $i++) {
  $weekDays[] = $firstDayOfWeek->format('Y-m-d');
  $firstDayOfWeek->modify('+1 day');
}
$date = $weekDays[0] . ' 00:00:01';

// $query = "SELECT interior_country, country, mark, port, bandar_price FROM `daily_form` where timestamp >= '$date'";
$query = "SELECT port, sum(bandar_price) as total FROM `daily_form` where timestamp >= '$date' GROUP by port";

$result = mysqli_query($con, $query);
$data = mysqli_fetch_all($result);



// echo $date;

$sql = "SELECT port, sum(bandar_price) as total FROM `daily_form` where timestamp >= '$date' GROUP by port";

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
