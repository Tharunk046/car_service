<?php
$err = " ";
if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['login'])) {
    $connection = mysqli_connect('localhost', 'root', '', 'service_appointment') or die("connection failed") . mysqli_connect_error();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
    $result = mysqli_query($connection,$sql);
    $count = mysqli_num_rows($result);
    if($count > 0)
    {
        session_start();  
        $_SESSION['sess_user']=$username;  
        header( "location: client-profile.php?profile=$username");
    }
    else{
       $err = "Enter a valid username & passoword ";
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
    <link rel="stylesheet" href="./styles/login.css">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php include "../basic/header.php"?>
      <div class="login-form">
      <h2 class="text-center">LOGIN</h2>
      <br>
        <p class="err"><?php echo $err ?></p>
      <form action=" " method="POST">
          <label for="username" class="form-label">Username:</label>
          <br>
          <input type="text" name="username" id="username" class="form-input" required autofocus>
          <br>
          <label for="password" class="form-label">Password:</label>
          <br>
          <input type="password" name="password" id="password" class="form-input" required>
          <button type="submit" class="btn btn-primary" name="login" id="login">Login</button>
      </form>
      <h4 class="text-center">To create a new account <a href="./create.php">Click here</a></h4>
      </div>
      <br>
      <?php include "../basic/footer.php"?>
  </body>

 <style>
   .navbar{
     position: absolute;
   }

   .err{
     font-size: 24px;
     font-weight: 600;
     color: red;
   }
   .login-form{
     margin-top: 8rem;
   }
   .footer{
     margin-top: -3rem !important;
   }
 </style>
 </html>

 