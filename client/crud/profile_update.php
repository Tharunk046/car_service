<?php
$connection = mysqli_connect('localhost', 'root','', 'service_appointment') or die("failed") . mysqli_connect_error();
$id = $_GET['useredit'];
$sql = "SELECT * FROM `users` WHERE `id`= '$id'";
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_assoc($result);
$username = $row['username'];
$number = $row['number'];
$email = $row['email'];

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $sql = "UPDATE `users` SET `username` = '$username', `number`= '$number',`email`='$email' WHERE `id` = '$id'";
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
</head>
  <body class="bg-light"> 
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
          <button class="btn btn-success my-4" name="submit"type="submit">Update profile</button>
          <?php echo"
          <a href='../client-profile.php?profile=$username'>
          <button class='btn btn-danger ml-2' name='cancel'type='button'>Cancel</button>
          </a>
          " ?>
      </form>
  </body>
</html>
