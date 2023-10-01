<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

include("./db/connection.php");
include("./db/functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $user_type = $_POST['user_type'];
    $hashed_password = password_hash($pwd, PASSWORD_DEFAULT);
    $query = "INSERT INTO auth_users(name, lastname, email, pwd, user_type) VALUES  ('$name', '$lastname', '$email', '$hashed_password', '$user_type')";

    if (!empty($name) && !empty($pwd)) {
        $check_query = "Select * from auth_users where email = '$email'";
        $result = mysqli_query($con, $check_query);

        if ($result && mysqli_num_rows($result) > 0) {

            $message = 'دا ایمیل آدرس شتون لري';
            echo "<SCRIPT> alert('$message')
            window.location.replace('signUp.php');
                </SCRIPT>";
        } else {
            mysqli_query($con, $query);
            $message = 'کارمند ثبت شو';
            echo "<SCRIPT> alert('$message')
            window.location.replace('all_users.php');
                </SCRIPT>";
        }
        die;
    }
}
