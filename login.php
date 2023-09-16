<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

include("./db/connection.php");
include("./db/functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $message = " غلط معلومات مو داخل کړي";

    $check_query = "Select * from auth_users where email = '$email'";
    if (!empty($email) && !empty($pwd)) {
        $result = mysqli_query($con, $check_query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if (password_verify($pwd, $user_data['pwd']) && $user_data['email'] == $email) {
                    var_dump($user_data['name']);
                    $_SESSION['user_id'] = $user_data['name'];
                    header("Location: ./backend/backend.php");
                } else {
                    echo "<SCRIPT> alert('$message')
                            window.location.replace('./index.php');
                        </SCRIPT>";
                }
            }else{
                echo "<SCRIPT> alert('$message')
                        window.location.replace('./index.php');
                    </SCRIPT>";
            }
        } else {
            
            echo "<SCRIPT> alert('$message')
                    window.location.replace('./index.php');
                </SCRIPT>";

        }

        die;
    } else {
        echo ($check_query);
        echo "Please enter some valid information!";
    }
}
