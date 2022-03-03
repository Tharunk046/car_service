<?php session_start();?>
<?php
$connection = mysqli_connect('localhost', 'root', '', 'service_appointment') or die("connection failed") . mysqli_connect_error();
$sql1 = "SELECT * FROM `users`";
if ($result1 = mysqli_query($connection, $sql1)) {
    $usercount = mysqli_num_rows($result1);
}
$sql2 = "SELECT * FROM `service_list`";
if ($result2 = mysqli_query($connection, $sql2)) {
    $servicecount = mysqli_num_rows($result2);
}
$sql3 = "SELECT * FROM `booking`";
if ($result3 = mysqli_query($connection, $sql3)) {
    $bookingcount = mysqli_num_rows($result3);
}
$sql4 = "SELECT * FROM `feedback`";
if ($result4 = mysqli_query($connection, $sql4)) {
    $feedbackcount = mysqli_num_rows($result4);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="./styles/admin-panel.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" integrity="sha384-3B6NwesSXE7YJlcLI9RpRqGf2p/EgVH8BgoKTaUrmKNDkHPStTQ3EyoYjCGXaOTS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- Bootstrap JavaScript Libraries -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
   <?php include "../basic/admin-header.php"?>  
   <?php include "../basic/sidebar.php"?>
   <div class="dashboard">
   <p class="welcome"><?php echo "welcome " . $_SESSION['sess_user']; ?></p>
   <p class="welcome">Dashboard</p>
   <br>
   <a href="./admin-user.php">
    <div class="box user">
    <p>
        users : <br>
        <?php echo $usercount; ?>
    </p>
    </div>
   </a>
   <a href="./admin-service.php">
    <div class="box service">
    <p>
       services : <br>
        <?php echo $servicecount; ?>
    </p>
    </div>
   </a>
   <a href="./admin-booking.php">
    <div class="box booking">
    <p>
        Bookings : <br>
        <?php echo $bookingcount; ?>
    </p>
    </div>
   </a>
   <a href="./admin-feedback.php">
    <div class="box feedback">
    <p>
        feedbacks : <br>
        <?php echo $feedbackcount; ?>
    </p>
    </div>
    </a>
</div>
</body>
</html>