<?php
    require_once '../db/dbConnect.php';
    if(isset($_POST['signup'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm-password'];
        $email = $_POST['email'];
        // check if username is already taken
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            echo '<script>alert("Username already taken")</script>';
        }
        else{
            // check if email is already taken
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                echo '<script>alert("Email already taken")</script>';
            }
            else{
                if($password == $confirm_password){
                    $password = md5($password);
                    $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
                    $result = mysqli_query($conn, $query);
                    if($result){
                        echo '<script>alert("Signup successful")</script>';
                    }else{
                        echo '<script>alert("Signup failed")</script>';
                    }
                }else{
                    echo '<script>alert("Password does not match")</script>';
                }              
        }
    }}
    else{
        echo '<script>alert("Signup failed")</script>';
    }
    // goto login page
    header('location: ../login.php');
?>
