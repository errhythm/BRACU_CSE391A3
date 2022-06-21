<li><a href="index.php">Home</a></li>
<li><a href="booking.php">Book</a></li>
<?php
    session_start();
    if(!isset($_SESSION['username'])){
        echo '<li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Signup</a></li>';

    }
    else{
        echo '<li><a href="logout.php">Logout</a></li>';
    }