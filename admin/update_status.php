<?php
$connection = mysqli_connect('localhost', 'root', '', 'service_appointment') or die("failed") . mysqli_connect_error();
$id = $_GET['update_status'];
if (isset($_POST['submit'])) {
    $status = $_POST['status'];
    $sql = "UPDATE `booking` SET `status` = '$status' WHERE `booking_id` = '$id'";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        header("location: ./admin-booking.php");
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
    <style>
        .status{
            width:66rem;
            margin-left: 12rem;
            margin-top: 5rem;
            background-color: #E3E7F1;
            padding: 24px;
        }
        .current{
          font-size: 28px;
          font-weight: 500;
        }
        .form-label{
          font-size: 24px;
        }
        .form-select{
          height: 3rem;
        }
    </style>
  </head>
  <body>
  <?php include "../basic/admin-header.php"?>
    <?php include "../basic/sidebar.php"?>
    <div class="status">
        <p class="current">Current Status : <?php echo $_GET['status'] ?></p>
        <form action=" " method="post">
            <label class="form-label" for="status">Update Status</label>
            <select class="form-select" name="status" aria-label="Default select example">
  <option selected>---status---</option>
  <option value="pending">pending</option>
  <option value="on progress">on progess</option>
  <option value="completed">completed</option>
            </select>
        <button class="btn btn-success my-4" name="submit"type="submit">Update status</button>
          <a href="./admin-booking.php">
        <button class="btn btn-danger ml-2" name="cancel"type="button">Cancel</button>
          </a>
        </form>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>