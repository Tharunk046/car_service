<?php
$connection = mysqli_connect('localhost', 'root', '', 'service_appointment') or die("failed") . mysqli_connect_error();
$bookid = $_GET['booking_id'];
$sql = "SELECT * FROM `booking` WHERE `booking_id`= '$bookid'";
$result = mysqli_query($connection,$sql);
$book = mysqli_fetch_assoc($result);
$booking_id = $book['booking_id'];
$username = $book['username'];
$number = $book['number'];
$address = $book['address'];
$date = $book['date']; 
$car_manufacturer = $book['car_manufacturer'];                 
$car_model = $book['car_model'];
$kilo_met_driven = $book['kilo_met_driven'];
$services = $book['services'];
$pickup_drop = $book['pickup_drop'];
$status = $book['status'];
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="./styles/booking_details.css">
    <link rel="stylesheet" href="./styles/booking-details.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </head>
  <body class="bg-light">
  <?php include "../basic/admin-header.php" ?>
  <?php include "../basic/sidebar.php" ?>
  <div class="booking-details">
    <h4 class="text-center">Booking details</h4>
    <div class="details row container mt-5">
      <div class="col-6 set1">
        <p>Booking id : <?php echo $booking_id;?></p>
        <p>Username : <?php echo $username;?></p>
        <p>Number : <?php echo $number;?></p>
        <p>Address : <?php echo $address; ?></p>
        <p>Date : <?php echo $date; ?></p>
      </div>
      <div class="col-6 set2">
        <p>Car manufacturer : <?php echo $car_manufacturer; ?></p>
        <p>Car model : <?php echo $car_model; ?></p>
        <p>Kilo meters driven : <?php echo $kilo_met_driven; ?></p>
        <p>Services : <?php echo $services; ?></p>
        <p>pickup and drop : <?php echo $pickup_drop; ?></p>
        <p>Status : <?php echo $status; ?> </p>
      </div>
    </div>
    <div class="action">
    <form>
  <input type = "button" class="btn btn-primary" value = "Print" onclick = "window.print()" />
  <button type="button" class="btn btn-success">####</button>
    </form>   
    </div>
  </div>
  <script>
  </script>
  </body>
</html>