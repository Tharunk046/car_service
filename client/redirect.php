
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_POST['submit']))){
    $connection = mysqli_connect('localhost','root','','service_appointment') or die ("failed").mysqli_connect_error();
        $username = $_POST['username'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $date = $_POST['date'];
        $car_manufacturer = $_POST['car_manufacturer'];
        $car_model = $_POST['car_model'];
        $car_reg_num = $_POST['car_reg_num'];
        $kilo_met_driven = $_POST['kilo_met_driven'];
        $services = implode(',', $_POST['services']);
        $pickup_drop = $_POST['pickup_drop'];
    $sql = "INSERT INTO `booking`(`username`,`number`,`email`,`address`,`date`,`car_manufacturer`, `car_model`, `car_reg_num`, `kilo_met_driven`, `services`, `pickup_drop`) VALUES ('$username','$number','$email','$address','$date','$car_manufacturer','$car_model','$car_reg_num','$kilo_met_driven','$services','$pickup_drop')";
    $result = mysqli_query($connection,$sql);
    if($result == TRUE){
        echo "<script type = \"text/javascript\">
                    alert(\"Your service appointment is successfully submitted,conformation mail has been sent\");
                    window.location = (\"mail.php?profile=$username\")
                    </script>";
    }  else {
        echo "failed";
    }
}
?>
