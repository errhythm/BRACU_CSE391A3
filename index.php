<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat&family=Montserrat:wght@900&family=Tiro+Tamil&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>CSE391 Assignment 2</title>
</head>
<body>
    <!-- connect to dbconnection  -->
    <?php
        include 'db/dbConnect.php';
    ?>
    <nav class="wrapper">
        <div class="logo">
            <a href="index.php">
                <img src="img/logo.png" alt="logo">
            </a>
        </div>
        <div class="navbar">
            <ul>
                <?php
                    include 'components/menu.php';
                ?>
            </ul>
        </div>
    </nav>
    <div class="spacing"></div>
    <div id="mechanic-title">
        <h1>Hire a Mechanic for your car!</h1>
    </div>
    
    <script src="script.js"></script> 
    <script src="https://kit.fontawesome.com/692c2638c1.js" crossorigin="anonymous"></script>  
    </body>
</html>