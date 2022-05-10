<?php
$connection = mysqli_connect('localhost', 'root','', 'service_appointment') or die("failed") . mysqli_connect_error();
$id = $_GET['useredit'];
$sql = "SELECT * FROM `users` WHERE `id`= '$id'";
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_assoc($result);
$username = $row['username'];
$number = $row['number'];
$email = $row['email'];
$address = $row['address'];

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $sql = "UPDATE `users` SET `username` = '$username', `number`= '$number',`email`='$email',`address`='$address' WHERE `id` = '$id'";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        header("location: ../client-profile.php?profile=$username");
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
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript">
     function checkUpdate(){
    return confirm('Are you sure you want to update this profile?');
    }
    </script>
  </head>
  <body class="bg-light">
  <nav class="navbar navbar-expand-lg sticky-top container-fluid">
    <div class="navbar-brand">
      <a href="../client/client-profile.php"><i class="fas fa-tools"></i> <span>Auto</span> Logic</a>
    </div>
    <div class="navbar-nav" style="margin-left: auto;">
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle nav-user"id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown">
          <?php session_start(); echo $_SESSION['sess_user']; ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../client/client-logout.php">Logout</a></li>
          </ul>
    </li>
    </div>
  </nav>
  <div class="sidebar">
          <ul>
            <?php echo "
              <li><a href='../client-profile.php?profile=$username' id='profile'>Profile</a></li>
              <li><a href='../client-service.php?profile=$username'>Services</a></li>
              <li><a href='../client-booking.php?profile=$username'>Appointment</a></li>
              <li><a href='href='../client-feedback.php?profile=$username''>Feedback</a></li>
              "
              ?>
          </ul>
      </div>  
    <form action=" " method="POST">
      <p>Update profile : </p>
          <label for="username" class="form-label"> User name: </label>
          <input type="text" name="username" id="username" class="form-control" value="<?php echo $username ?>">
          <br>
          <label for="number" class="form-label"> Phone number: </label>
          <input type="text" name="number" id="number" class="form-control" value="<?php echo $number ?>">
          <br>
          <label for="email" class="form-label"> Email: </label>
          <input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>">
          <br>
          <label for="address" class="form-label">Address:</label>
          <br>
          <input type="text" name="address" class="form-control" id="address" value="<?php echo $address ?>">
          <br>
          <button class="btn btn-success my-4" onclick="checkUpdate()" name="submit"type="submit">Update profile</button>
          <?php echo"
          <a href='../client-profile.php?profile=$username'>
          <button class='btn btn-danger ml-2' name='cancel'type='button'>Cancel</button>
          </a>
          " ?>
      </form>
      <script>
    document.getElementById("profile").style.color = "red";
    document.getElementById("profile").style.fontWeight="600";
    </script>
  </body>
  <style>
.navbar{
        background: #072F4F;
}
.navbar-brand a{
    margin-left: 20px;
    font-weight: 500 !important;
    font-family: 'Libre Bodoni', serif; 
    font-size: 32px !important;

}
.navbar a {
  color:white;
  text-decoration: none;
  margin-left: 20px;
  font-size: 28px;
  
}
span{
    color: #B4CE1D;
}
.navbar-brand a:hover{
  color: white;
}
.navbar-nav{
  margin-right: 40px;
}
.dropdown-menu{
  border: none !important;
  background:none !important;
  text-align: center !important;
  margin-left: -5px !important;
}
.dropdown-menu .dropdown-item{
  border: none !important;
  background:none !important;
  text-align: center !important;
  margin-left: -5px !important;
  font-size: 24px;
}
.dropdown-menu:hover{
  border: none !important;
  background: none !important;
  width:10px;
  text-align: center;
  margin-right: 40px;
  border-bottom:2px solid red !important;
  border-radius: 0;
  height: fit-content;
}
.dropdown-menu a {
  color: black;
  font-size: 20px;
  font-weight: 500;
}
.nav-user{
  text-transform: capitalize;
}
.nav-user:hover{
  color: white !important;
}
.sidebar{
          position:fixed;
          width: 10rem;
          height: 100%;
          background-color:#DCDCDC;
      }
      .sidebar li {
          list-style-type: none;
          margin-top: 2.5rem;
          font-size: 22px;
          margin-left: -0.8rem;
      }
      .sidebar li a{
          text-decoration: none;
          color: black;
          text-transform: capitalize;
      }
      form{
          margin-left: 13rem;
          margin-top:2rem;
          color: black;
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
