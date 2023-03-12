<?php
session_start();
include("config.php");
include("firebaseRDB.php");
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$repeatpassword = $_POST['repassword'];
if ($email == "") {
    echo "Email is required";
} else if ($username == "") {
    echo "Username is required";
} else if ($password == "") {
    echo "Password is required";
} else if ($repeatpassword == "") {
    echo "Repeat password is required";
} else {
    $rdb = new firebaseRDB($databaseURL);
    $retrieve = $rdb->retrieve("/user", "username", "EQUAL", $username);
    $data = json_decode($retrieve, 1);
    if (count($data) > 0) {
        echo "Username already in use";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $insert = $rdb->insert("/user", array(
            'email' => $email,
            'username' => $username,
            'password' => $hashed_password , 
            'permission' => 0 ,
        )
        );
        $data = json_decode($insert, true);
        if ($data['name']) {
            $_SESSION['success'] = "Register Success!! You can Login.";
            header("location: login.php");
        } else {
            echo "Error creating user account";
        }
    }
}
?>