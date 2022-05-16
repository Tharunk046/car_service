<?php
$connection = mysqli_connect('localhost', 'root', '', 'service_appointment') or die("connection failed") . mysqli_connect_error();
if(isset($_GET['profile'])){
  $username = $_GET['profile'];
  $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
  $query = mysqli_query($connection,$sql);
  $profile = mysqli_fetch_assoc($query);
  $email = $profile['email'];
}
require_once('SMTP.php');
require_once('PHPMailer.php');
require_once('Exception.php');

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;

$mail=new PHPMailer(true); // Passing `true` enables exceptions

try {
    //settings
    $mail->SMTPDebug=2; // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true; // Enable SMTP authentication
    $mail->Username='autologic046@gmail.com'; // SMTP username
    $mail->Password='Autologic@46@';// SMTP password
    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->setFrom('autologic046@gmail.com', 'Autologic');

    //recipient
    $mail->addAddress($email,$username);     // Add a recipient

    //content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject='Order Conformation';
    $mail->Body='Hi '.$username.',Your Appointment has been booked successfully';
    $mail->AltBody='This is the body in plain text for non-HTML mail clients';

    $mail->send();

    header("location: client-profile.php?profile=$username");
} 
catch(Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: '.$mail->ErrorInfo;
}

?>