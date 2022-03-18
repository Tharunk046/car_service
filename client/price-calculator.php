<?php
    $connection = mysqli_connect('localhost', 'root', '', 'service_appointment') or die("connection failed") . mysqli_connect_error();
    if(isset($_GET['profile'])){
      $username = $_GET['profile'];
      $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
      $query = mysqli_query($connection,$sql);
      $profile = mysqli_fetch_assoc($query);
      $id = $profile['id'];
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./styles/price-calculator.css">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
  <?php include "../basic/client-header.php" ?>
  <div class="sidebar">
          <ul>
              <?php echo "
              <li><a href='../client/client-profile.php?profile=$username'>Profile</a></li>
              <li><a href='../client/client-service.php?profile=$username'>Services</a></li>
              <li><a href='#'>Appointment</a></li>
              <li><a href='#'>Feedback</a></li>
              "
              ?>
          </ul>
    </div> 
    <div class="calculator">
        <div class="container">
        <form action=" " class="form" method="post">
        <?php
         $connection = mysqli_connect('localhost','root','','service_appointment') or die ("failed").mysqli_connect_error();
         $sql = "SELECT * FROM `service_list`";
         $result = mysqli_query($connection,$sql);
         if($result)
         {
           while($row = mysqli_fetch_assoc($result)){
             $service_id = $row['service_id'];
             $service_name = $row['service_name'];
             $price = $row['price'];
             echo"
             <div class='form-check'>
  <input class='form-check-input' type='checkbox' value='$price' id='$service_id'>
  <label class='form-check-label' for='flexCheckIndeterminate'>
    $service_name <span>$price</span>
  </label>
</div>
             "; 
           }
        }
        ?>
        </form>
        </div>
    </div> 
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>