<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat&family=Montserrat:wght@900&family=Tiro+Tamil&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>CSE391 Assignment 2</title>
</head>
<body>
    <?php
        include '../db/dbConnect.php';
    ?>
    <nav class="wrapper">
        <div class="logo">
            <a href="index.html">
                <img src="../img/logo.png" alt="logo">
            </a>
        </div>
        <div class="navbar">
            <ul>
                <?php
                    include '../components/menu.php';
                ?>
            </ul>
        </div>
    </nav>
    <!-- update profile info -->
    <!-- get user info from database -->
    <?php
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT * FROM users WHERE user_id = $user_id";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);
    ?>
    <div class="section_container">
        <div class="section">
            <div class="section_title">
                <h1>Update Profile</h1>
            </div>
            <div class="section_content">
                <form action="update.php" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="<?php echo $user['name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="<?php echo $user['email'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" value="<?php echo $user['phone'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" value="<?php echo $user['address'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" name="city" id="city" value="<?php echo $user['city'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" name="state" id="state" value="<?php echo $user['state'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="zip">Zip</label>
                        <input type="text" name="zip" id="zip" value="<?php echo $user['zip'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" value="<?php echo $user['password'] ?>">
                    </div>
                </form>
                <button class="btn" type="submit" name="update">Update</button>
            </div>
        </div>
    </div>

    <div class="spacing"></div>
    <script src="script.js"></script> 
    <script src="https://kit.fontawesome.com/692c2638c1.js" crossorigin="anonymous"></script>  
    </body>
</html>