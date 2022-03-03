<?php
$connection = mysqli_connect('localhost', 'root', '', 'service_appointment') or die("failed") . mysqli_connect_error();
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
}
$sql = "DELETE FROM `booking` WHERE `id` ='$id'";
$result = mysqli_query($connection, $sql);
if ($result) {
    header("location: ../admin-booking.php");
} else {
    header("location:../admin-booking.php");
}