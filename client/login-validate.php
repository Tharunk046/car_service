<?php
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
        header("location: login.php");
    }
}
?>