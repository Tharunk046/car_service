<?php
    $connection = mysqli_connect('localhost', 'root', '', 'service_appointment') or die("connection failed") . mysqli_connect_error();
    if(isset($_GET['profile'])){
      $username = $_GET['profile'];
      $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
      $query = mysqli_query($connection,$sql);
      $profile = mysqli_fetch_assoc($query);
      $number = $profile['number'];
      $address = $profile['address'];
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
  </head>
  <body onload="getManufacture()">
  <?php include "../basic/client-header.php" ?>
  <?php include "../basic/client-sidebar.php" ?>
  <div class="booking">
      <p class=" heading mx-3 mt-3">Service Apointment booking</p>
      <form action="" method="POST" class="form">
          <label for="username" class="form-label"> User name: </label>
          <input type="text" name="username" id="username" class="form-control" value="<?php echo $username ?>">
          <br>
          <label for="number" class="form-label"> Phone number: </label>
          <input type="text" name="number" id="number" class="form-control" value="<?php echo $number ?>">
          <br>
          <label for="address" class="form-label">Address:</label>
          <input type="text" name="address" class="form-control" id="address" value="<?php echo $address ?>">
          <br>
          <label for="date" class="form-label">date:</label>
          <input type="date" name="date" id="date" class="form-control">
          <br>
          <label for="car_manufacturer" name="car manufacturer" class="form-label">car manufacturer</label>
          <select name="manufacturer" onchange="changeModels(event)" class="form-select" id="man"></select>
          <br>
          <label for="car_model" name="car model" class="form-label">car model</label>
          <select name="model" id="model" class="form-select"></select>
        <br>
        <!-- 
            !!!!!!car model
-->
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
  <input class='form-check-input' type='checkbox' value='$service_id' id='$service_id'>
  <label class='form-check-label' for='flexCheckIndeterminate'>
    $service_name
  </label>
</div>
             "; 
           }
        }
        ?>
        <br>
        <label for="pickupdrop" class="form-label">Pick up & drop</label>
        <br>
        <input class="form-check-input" type="radio" name="pickupdrop" id="autologic">
        <label class="form-check-label" for="autologic">
        Auto logic service center
        </label>
        <br>
        <input class="form-check-input" type="radio" name="pickupdrop" id="self">
        <label class="form-check-label" for="self">
        Self
       </label>
       <br>
       <button type="submit" class="btn btn-primary my-3">Submit</button>
      </form>
  </div>
  </body>
  <script>
      const manufacturer = {
    ford : ["Ford Figo","Ford Aspire","Ford EcoSport","Ford Mustang","Ford Endeavour"],
    honda : ["Honda City","Honda Amaze","Honda Jazz","Honda WR-V","Honda Civic"],
    nissan : ["Nissan Magnite","Nissan Kicks","Nissan GT-R"],
    skoda : ["Skoda Slavia","Skoda Kushaq","Skoda Octavia","Skoda Kodiaq","Skoda Superb"],
    tata : ["Tata Nexon","Tata Altroz","Tata Punch","Tata Tiago","Tata Harrier","Tata Safari"],
    toyota : ["Toyota Glanza","Toyota Urban Cruiser","Toyota Fortuner","Toyota Belta","Toyota Innova Crysta"],
    volkswagen : ["Volkswagen Polo","Volkswagen Vento","Volkswagen Taigun","Volkswagen Virtus"],
    maruti_suzuki :["Maruti Suzuki Ertiga","Maruti Suzuki Swift","Maruti Suzuki Baleno","Maruti Suzuki Wagon R","Maruti Suzuki Dzire","Maruti Suzuki Celerio","Maruti Suzuki S-Cross"],
    
}
function changeModels(e){
    document.getElementById('model').innerHTML = ''
    manufacturer[event.target.value].forEach(element =>{
        document.getElementById('model').innerHTML += `<option value=${element}>${element}</option>`
    });
}
function getManufacture(){
    Object.keys(manufacturer).forEach(element => {
        document.getElementById('man').innerHTML += `<option value = ${element}>${element}</option>`
    });
    manufacturer["ford"].forEach(element => {
        document.getElementById('model').innerHTML += `<option value = ${element}>${element}</option>`
    });
}
  </script>

</html>
