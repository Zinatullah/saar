<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

include("./db/connection.php");
include("./db/functions.php");


$id = $_POST['id'];

$query3 = "SELECT * FROM auth_users where id = $id ";
$result = mysqli_query($con, $query3);
$data = mysqli_fetch_row($result);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $user_type = $_POST['user_type'];

    echo $pwd;

    $hashed_password = password_hash($pwd, PASSWORD_DEFAULT);


    if ($pwd == $data[4]) {
        $query = "UPDATE auth_users SET name = '$name' ,lastname = '$lastname' ,email = '$email' ,user_type = '$user_type' where id = '$id'";
        mysqli_query($con, $query);
        $message = 'کاروونکی ثبت شو';
        echo "<SCRIPT> alert('$message')
                window.location.replace('all_users.php');
                    </SCRIPT>";
    } else {
        $query1 = "UPDATE auth_users SET name = '$name' ,lastname = '$lastname' ,email = '$email' ,pwd = '$hashed_password' ,user_type = '$user_type' where id = $id";
        mysqli_query($con, $query1);
        $message = 'کاروونکی ثبت شو';
        echo "<SCRIPT> alert('$message')
                window.location.replace('all_users.php');
        //             </SCRIPT>";
    }
}
