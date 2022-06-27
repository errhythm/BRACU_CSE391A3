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
    <?php
        include 'components/menu.php';
    ?>
    <div class="mechanic-title">
        <h1>Book a Mechanic Now!</h1>
    </div>
    <div class="section_container">
        <!-- Create a form to create appointment with the mechanics with the cars from database. A mechanic can not take more than 4 appointments a day. --> 
        <div class="form-container">
            <form action="booking.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="mechanic">Mechanic</label>
                        <select id="mechanic" name="mechanic" class="form-control">
                            <?php
                                $query = "SELECT * FROM mechanics";
                                $result = mysqli_query($conn, $query);
                                while($row = mysqli_fetch_assoc($result)){
                                    echo '<option value="'.$row['mechanic_id'].'">'.$row['mechanic_name'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="car">Car</label>
                        <select id="car" name="car" class="form-control">
                            <?php
                                session_start();
                                $id = $_SESSION['id'];
                                $query = "SELECT * FROM cars WHERE id = $id";
                                $result = mysqli_query($conn, $query);
                                while($row = mysqli_fetch_assoc($result)){
                                    echo '<option value="'.$row['id'].'">'.$row['car_license'].'</option>';
                                }
                                if(mysqli_num_rows($result) == 0){
                                    echo '<option value="">No car added</option>';
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    <div class="form-group">
                        <label for="time">Time</label>
                        <input type="time" class="form-control" id="time" name="time">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    

    <div class="spacing"></div>
    <script src="script.js"></script> 
    <script src="https://kit.fontawesome.com/692c2638c1.js" crossorigin="anonymous"></script>  
    </body>
</html>