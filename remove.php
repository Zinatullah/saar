<?php 

header('Content-Type: text/html; charset=utf-8');
include("./db/connection.php");
include("./db/functions.php");

if(isset($_POST['remove'])){
    $id = $_POST['remove'];


    $query = "DELETE FROM `auth_users` WHERE id = '$id'";
    $result = mysqli_query($con, $query);


    if (!$result) {
        $error = mysqli_error($con);
        echo  $error;
    }else{
        header('location: ./all_users.php');
    }
    
}