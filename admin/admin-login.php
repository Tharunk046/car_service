<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['admin-login'])) {
    $connection = mysqli_connect('localhost', 'root', '', 'service_appointment') or die("connection failed") . mysqli_connect_error();
    $admin_username = $_POST['admin_username'];
    $admin_password = $_POST['admin_password'];
    $sql = "SELECT * FROM `admin_access` WHERE `admin_username` = '$admin_username' AND `admin_password` = '$admin_password'";
    $result = mysqli_query($connection,$sql);
    $count = mysqli_num_rows($result);
    if($count > 0)
    {
        session_start();  
        $_SESSION['sess_user']=$admin_username;  
        header( "location: admin-panel.php");
    }
    else{
        header("location: admin-login.php");
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
    <link rel="stylesheet" href="./styles/admin-login.css">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" integrity="sha384-3B6NwesSXE7YJlcLI9RpRqGf2p/EgVH8BgoKTaUrmKNDkHPStTQ3EyoYjCGXaOTS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- Bootstrap JavaScript Libraries -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   </head>
  <body>
  <nav class="navbar navbar-dark bg-light navbar-expand-lg sticky-top container-fluid">
    <div class="navbar-brand">
      <a href="#"><i class="fas fa-tools"></i> <span>Auto</span> Logic</a>
    </div>
   </nav>
      <div class="login-box"> 
      <h2><i class="fa-solid fa-user-shield"></i> Admin Login</h2>
      <form action=" " method="POST">
        <label for="admin_username" class="form-label">Admin Username :</label>
        <br>
        <input type="text" class="form-control" id="admin_username" name="admin_username">
        <br>
        <label for="admin_password"  class="form-label">Admin Password :</label>
        <br>
        <input type="password" name="admin_password" id="admin_password" class="form-control">
        <br>
        <button type="submit" name="admin-login" class="btn btn-success">Login</button>
      </form>
  </div>
  </body>
</html>