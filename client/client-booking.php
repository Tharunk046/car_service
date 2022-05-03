<?php
    $connection = mysqli_connect('localhost', 'root', '', 'service_appointment') or die("connection failed") . mysqli_connect_error();
    if(isset($_GET['profile'])){
      $username = $_GET['profile'];
      $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
      $query = mysqli_query($connection,$sql);
      $profile = mysqli_fetch_assoc($query);
      $number = $profile['number'];
      $email = $profile['email'];
      $address = $profile['address'];
    }
?>
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
    if ($result) {
        header("location: ./redirect.php");
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
    <link rel="stylesheet" href="./styles/client-booking.css">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript">
     function checkBooking(){
    return confirm('please confirm to book the appointment?');
    }
    </script>
  </head>
  <body onload="getManufacture()">
  <?php include "../basic/client-header.php" ?>
  <?php include "../basic/client-sidebar.php" ?>
  <div class="booking">
      <p class=" heading mx-3 mt-3">Service Apointment booking</p>
      <form action=" " method="POST" class="form">
          <label for="username" class="form-label"> User name: </label>
          <input type="text" name="username" id="username" class="form-control" value="<?php echo $username ?>">
          <p id="usererror" class="error text-danger"></p>
          <br>
          <label for="number" class="form-label"> Phone number: </label>
          <input type="text" name="number" id="number" class="form-control" value="<?php echo $number ?>">
          <br>
          <label for="email" class="form-label"> Email: </label>
          <input type="email" name="email" id="email" class="form-control" value="<?php echo $email ?>">
          <br>
          <label for="address" class="form-label">Address:</label>
          <input type="text" name="address" class="form-control" id="address" value="<?php echo $address ?>">
          <br>
          <label for="date" class="form-label">date:</label>
          <input type="date" name="date" id="date" class="form-control">
          <br>
          <label for="car_manufacturer" name="car_manufacturer" class="form-label">car manufacturer:</label>
          <select name="car_manufacturer" onchange="changeModels(event)" class="form-select" id="man"></select>
          <br>
          <label for="car_model" name="car_model" class="form-label">car model:</label>
          <select name="car_model" id="model" class="form-select"></select>
        <br>
        <label for="car reg num" class="form-label">Car registration number</label>
        <input type="text" name="car_reg_num" id="car_reg_num" class="form-control">
        <br>
        <label for="kilo meters driven" class="form-label">Kilo meters driven</label>
        <input type="text" name="kilo_met_driven" id="kilo_met_driven" class="form-control">
        <br>
        <label for="services" class="form-label">Services</label>
        <?php
         $connection = mysqli_connect('localhost','root','','service_appointment') or die ("failed").mysqli_connect_error();
         $sql = "SELECT * FROM `service_list`";
         $result = mysqli_query($connection,$sql);
         if($result)
         {
           while($row = mysqli_fetch_assoc($result)){
             $service_id = $row['service_id'];
             $service_name = $row['service_name'];
             $price = $row['price'];
             echo"
             <div class='form-check'>
  <input class='form-check-input' name='services[]' type='checkbox' value='$service_id' id='$service_id'>
  <label class='form-check-label' for='flexCheckIndeterminate'>
    $service_name
  </label>
</div>
             "; 
           }
        }
        ?>
        <br>
        <label for="pickup_drop" class="form-label">Pick up & drop</label>
        <br>
        <input class="form-check-input" type="radio" value="Autologic service center" name="pickup_drop" id="autologic">
        <label class="form-check-label" for="autologic">
        Auto logic service center
        </label>
        <br>
        <input class="form-check-input" type="radio" value="Self" name="pickup_drop" id="self">
        <label class="form-check-label" for="self">
        Self
       </label>
       <br>
       <button type="submit" name ="submit" id="submit" onclick="checkBooking()" class="btn btn-primary my-3">Submit</button>
      </form>
  </div>
  </body>
  <script>
      const manufacturer = {
    ford : ["Ford_Figo","Ford_Aspire","Ford_EcoSport","Ford_Mustang","Ford_Endeavour"],
   honda : ["Honda_City","Honda_Amaze","Honda_Jazz","Honda_WR-V","Honda_Civic"],
    nissan : ["Nissan_Magnite","Nissan_Kicks","Nissan_GT-R"],
    skoda : ["Skoda_Slavia","Skoda_Kushaq","Skoda_Octavia","Skoda_Kodiaq","Skoda_Superb"],
    tata : ["Tata_Nexon","Tata_Altroz","Tata_Punch","Tata_Tiago","Tata_Harrier","Tata_Safari"],
    toyota : ["Toyota_Glanza","Toyota_Urban_Cruiser","Toyota_Fortuner","Toyota_Belta","Toyota_Innova Crysta"],
    volkswagen : ["VolkswagenPolo","VolkswagenVento","VolkswagenTaigun","VolkswagenVirtus"],
    maruti :["Maruti_Ertiga","Maruti_Swift","Maruti_Baleno","Maruti_Wagon_R","Maruti_Dzire","Maruti_Celerio","Maruti_S-Cross"],
    
}
function changeModels(e){
    document.getElementById('model').innerHTML = ''
    manufacturer[event.target.value].forEach(element =>{
        document.getElementById('model').innerHTML += `<option value=${element}>${element}</option>`
    });
}
function getManufacture(){
    Object.keys(manufacturer).forEach(element => {
        document.getElementById('man').innerHTML += `<option value  = ${element}>${element}</option>`
    });
    manufacturer["ford"].forEach(element => {
        document.getElementById('model').innerHTML += `<option value = ${element}>${element}</option>`
    });
}
  </script>

</html>
