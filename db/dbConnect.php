<?php
    $servername = "localhost";
    $username = "cse391";
    $password = "20101298";
    $dbname = "cse391";
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>