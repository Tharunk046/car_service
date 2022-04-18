<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <?php include "../basic/admin-header.php" ?>
    <?php include "../basic/sidebar.php" ?>
    <div class="container-fluid">
    <div class="booking_heading">
            <h4>Booking</h4>
   </div>
        <table class="table table-light table-hover text-center my-4">
            <thead>
                <tr class="bg-light">
                    <th>booking id</th>
                    <th>username</th>
                    <th>date</th>
                    <th>car model</th>
                    <th>services</th>
                    <th>status</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $connection = mysqli_connect('localhost', 'root', '', 'service_appointment') or die("failed") . mysqli_connect_error();
                $sql = ("SELECT * FROM `booking`");
                $result = mysqli_query($connection, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $booking_id = $row['booking_id'];
                        $username = $row['username'];
                        $date = $row['date'];                  
                        $car_model = $row['car_model'];
                        $services = $row['services'];
                        $status = $row['status'];
                        echo "
                <tr>
                <td>$booking_id</td>
                <td>$username</td>
                <td>$date</td>
                <td>$car_model</td>
                <td>$services</td>
                <td class='status'><p>$status</p></td>
                <td>
                <div class='dropdown'>
  <button class='btn btn-primary dropdown-toggle' type='button' id='dropdownMenuButton2' data-bs-toggle='dropdown' aria-expanded='false'>
  Action
  </button>
  <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton2'>
    <li><a class='dropdown-item' href='./booking_details.php?booking_id=$booking_id'>View</a></li>
    <li><a class='dropdown-item' href='./crud/booking_delete.php?deleteid=$booking_id'>Delete</a></li>
  </ul>
</div>
                </td>
                </tr>
             ";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
<style>
    table {
        margin-left: 10rem;
        width: 66rem !important;
        padding: 16px;
    }
    ul .dropdown-menu{
        margin-top: 10px !important;
        width:40px !important;
    }
    .status{
        font-weight: 700;
        text-transform: capitalize;
    }
    .status p{
        width: fit-content;
        border-bottom: 2px solid red;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
    } 
    .booking_heading{
        margin-top: 1rem;
        margin-left:11rem;
        width: 66rem !important;
        border-bottom: 5px solid gray;
    }
</style>
</html>
