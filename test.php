<?php
    session_start();
    include("config.php");
    include("firebaseRDB.php");
    
   $username ='ryu';
        $rdb = new firebaseRDB($databaseURL);
        $retrieve = $rdb->retrieve("/user", "username", "EQUAL", $username);
        $data = json_decode($retrieve, true);
        $id = array_keys($data)[0];
        $permission = $data[$id]['permission']; 
        echo $permission ;
    // $password = $_POST['password'];
    
    // if ($username == "") {
    //     $_SESSION['error'] = "Username is required";
    //     header("Location: login.php");
    // } else if ($password == "") {
    //     $_SESSION['error'] = "Password is required";
    //     header("Location: login.php");
    // } else {
    //     $rdb = new firebaseRDB($databaseURL);
    //     $retrieve = $rdb->retrieve("/user", "username", "EQUAL", $username);
    //     $data = json_decode($retrieve, true);
    //     if (empty($data)) {
    //         $_SESSION['error'] = "This username is not register";
    //         header("Location: login.php");
    //     } else {
    //         $id = array_keys($data)[0];
    //         $hash_password = $data[$id]['password']; 
    //         if (password_verify($password, $hash_password)) {
    //             $_SESSION['username'] =  $username ;
    //             header('Location: index.php');
    //         } else {
    //             $_SESSION['error'] = "Invalid Password" ; 
    //             header("Location: login.php");
    //         }
    //     }
    // }
?>