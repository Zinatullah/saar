<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../../db/connection.php");
include("./../../../db/functions.php");

$query = "SELECT * FROM `companies` ";
$result = mysqli_query($con, $query);


