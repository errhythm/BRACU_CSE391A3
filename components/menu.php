<nav class="wrapper">
    <div class="logo">
        <a href="/index.php">
            <img src="../img/logo.png" alt="logo">
        </a>
    </div>
    <div class="navbar">
        <ul>
        <li><a href="/index.php">Home</a></li>
        <?php
            session_start();
            if(!isset($_SESSION['username'])){
                echo '<li><a href="/login.php">Login</a></li>
                <li><a href="/signup.php">Signup</a></li>';
            }
            else{
                echo '<li><a href="/booking.php">Book</a></li>
                <li class="dropdown" id="dropdown">
                <a href="#" class="dropdown-toggle" id="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$_SESSION['username'].'<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/user/cars.php">Cars List</a></li>
                    <li><a href="/user/user_update.php">Update Profile</a></li>
                    <li><a href="/user/user_update.php">Change Password</a></li>
                    <li><a href="/logout.php">Logout</a></li>
                </ul>
                </li>';
            }
        ?>
        </ul>
    </div>
</nav>