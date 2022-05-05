<?php
    $connection = mysqli_connect('localhost', 'root', '', 'service_appointment') or die("connection failed") . mysqli_connect_error();
    if(isset($_GET['profile'])){
      $username = $_GET['profile'];
      $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
      $query = mysqli_query($connection,$sql);
      $profile = mysqli_fetch_assoc($query);
      $id = $profile['id'];
      $number = $profile['number'];
      $email = $profile['email'];
      $address = $profile['address'];
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
    <link rel="stylesheet" href="./styles/client-profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </head>
  <body>
  <?php include "../basic/client-header.php" ?>
  <?php include "../basic/client-sidebar.php" ?>
  <script>
    document.getElementById("profile").style.color = "red";
    document.getElementById("profile").style.fontWeight="600";
    </script>
  <div class="profile">
  <div class="profile_heading">
            <h3>Profile</h3>
   </div>
    <div class="user-details ml-3  p-3">
      <?php echo "
      <h2>User Details</h2>
      <p>User id : $id</p>
      <p>Username : $username</p>
      <p>Phone number : $number</p>
      <p>Email : $email</p>
      <p>Address : $address</p>
      <a href='./crud/profile_update.php?useredit=$id'>
      <button class='btn btn-success mt-3' type='submit' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>Edit profile</button>
      </a>
     "?>
    </div>
  </div>
  </body>
</html>
