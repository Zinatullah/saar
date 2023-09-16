<?php

$dbhost = "localhost";
$dbuser = "admin";
$dbpass = "admin";
$dbname = "saar";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
	die("failed to connect!");
} else {
	$con->query("SET NAMES 'utf8'");
	$con->query("SET CHARACTER SET utf8");
}
