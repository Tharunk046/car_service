<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['submit'])) {
    $connection = mysqli_connect('localhost', 'root', '', 'service_appointment') or die("connection failed") . mysqli_connect_error();
    if (isset($_POST['username']) && isset($_POST['number']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        
    }
    $sql = "INSERT INTO `users`(`username`,`number`,`email`,`address`,`password`) VALUES ('$username','$number','$email','$address','$password')";
    $query = mysqli_query($connection, $sql);
    if ($query) {
        echo "<h2>your account has been successfully created</h2>";
    } else {
        echo "failed";
    }
}
?>
<h3>click here to go back to  <a href="./login.php" style="text-decoration:none;">Login</a></h3>
</body>
</html>
