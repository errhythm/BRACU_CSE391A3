<?php
require_once '../db/dbConnect.php';
    if(isset($_GET['id'])){
        session_start();
        $id = $_GET['id'];
        $query = "DELETE FROM cars WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if($result){
            $_SESSION['cardelete'] = '1';
            header('Location: ../user/cars.php');
        }
        else{
            $_SESSION['cardeletefailed'] = '1';
            header('Location: ../user/cars.php');
        }
    }
?>
