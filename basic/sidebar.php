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
  <body>
      <div class="sidebar">
          <ul>
              <li><a href="../admin/admin-panel.php">Dashboard</a></li>
              <li><a href="../admin/admin-user.php">users</a></li>
              <li><a href="../admin/admin-service.php">services</a></li>
              <li><a href="../admin/admin-booking.php">bookings</a></li>
              <li><a href="../admin/admin-feedback.php">Feedbacks</a></li>
          </ul>
      </div>
      
  </body>
  <style>
      .sidebar{
          width: 10rem;
          height: 100% !important;
          position: fixed;
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
  </style>
</html>