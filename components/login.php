<?php
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            $_SESSION['username'] = $username;
            header('location: index.php');
        }else{
            echo '<script>alert("Invalid username or password")</script>';
        }
    }
?>