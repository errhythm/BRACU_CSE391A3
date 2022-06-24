<?php
    require_once '../db/dbConnect.php';
    if(isset($_POST['login'])){
        $username = strtolower($_POST['username']);
        $password = $_POST['password'];
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            session_start();
            $_SESSION['username'] = $username;
            header('location: ../index.php');
        }else{
            echo $password;
        }
    }
?>