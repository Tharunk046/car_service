<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_POST['submit']))){
    $connection = mysqli_connect('localhost','root','','service_appointment') or die ("failed").mysqli_connect_error();
    if(isset($_POST['service_name']) && isset($_POST['service_id']) && isset($_POST['price']))
    {
        $service_name = $_POST['service_name'];
        $service_id = $_POST['service_id'];
        $price = $_POST['price'];
    }
    $sql = "INSERT INTO `service_list` (`service_name`,`service_id`,`price`) VALUES ('$service_name','$service_id','$price')";
    $result = mysqli_query($connection,$sql);
    if ($result) {
        header("location: ../admin-service.php");
    } else {
        echo "failed";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body class="bg-dark">
  <nav class="navbar  navbar-expand-lg sticky-top container-fluid">
    <div class="navbar-brand">
      <a href="../admin/admin-panel.php"><i class="fas fa-tools"></i> <span>Auto</span> Logic</a>
    </div>
    <div class="navbar-nav" style="margin-left: auto;">
      <a href="../admin-logout.php" style="margin-right:40px;">Logout</a>
    </div>
  </nav>
  <div class="sidebar">
          <ul>
              <li><a href="../admin-panel.php">Dashboard</a></li>
              <li><a href="../admin-user.php">users</a></li>
              <li><a href="../admin-service.php">services</a></li>
              <li><a href="../admin-booking.php">bookings</a></li>
              <li><a href="../admin-feedback.php">Feedbacks</a></li>
          </ul>
    </div>
    <form action=" " method="POST" class ="text-white">
      <p>Create new service : </p>
          <label for="service_name" class="form-label"> Service name : </label>
          <input type="text" name="service_name" id="service_name" class="form-control">
          <br>
          <label for="service_id" class="form-label"> Service id : </label>
          <input type="text" name="service_id" id="service_id" class="form-control">
          <br>
          <label for="price" class="form-label"> Price: </label>
          <input type="text" name="price" id="price" class="form-control">
          <button class="btn btn-success my-4" name="submit"type="submit">Add service</button>
          <a href="../admin-service.php">
          <button class="btn btn-danger" name="cancel"type="button">Cancel</button>
          </a>
      </form>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
  <style>
.navbar{
    background-color: #1b1b1b !important;
}
.navbar a {
  color: white;
  text-decoration: none;
  margin-left: 20px;
  font-size: 24px;
}
.sidebar{
          position:fixed;
          width: 10rem;
          height: 100%;
          background-color:#1f1f1f;
      }
      .sidebar li {
          list-style-type: none;
          margin-top: 2.5rem;
          font-size: 22px;
      }
      .sidebar li a{
          text-decoration: none;
          color: white;
          text-transform: capitalize;
      }
      form{
          margin-top: 3rem;
          margin-left: 12rem;
      }
      form p{
          font-size: 24px;
      }
      .form-control{
          width: 25rem;
      }
      .form-label{
          font-size: 18px;
      }
  </style>
</html>