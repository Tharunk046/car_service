<?php
    $connection = mysqli_connect('localhost', 'root', '', 'service_appointment') or die("connection failed") . mysqli_connect_error();
    if(isset($_GET['profile'])){
      $username = $_GET['profile'];
      $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
      $query = mysqli_query($connection,$sql);
      $profile = mysqli_fetch_assoc($query);
      $id = $profile['id'];
      
    }
?>
<!doctype html>
 <html lang="en">
 <head>
   <title>Title</title>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="./styles/client-service.css">
   <!-- Bootstrap CSS v5.0.2 -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!-- Bootstrap JavaScript Libraries -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 </head>

 <body class="bg-light">
   <?php include "../basic/client-header.php" ?>
   <?php include "../basic/client-sidebar.php" ?>
   <div class="service-list">
     <?php echo"
       <a href='./price-calculator.php?profile=$username'>
       <button class='btn btn-primary p-2 my-3 mx-3'>Price calculator</button> 
       </a>  "?>
     <table class="table table-hover table-light text-center">
       <thead class="table-dark">
         <tr>
           <th scope="col">Service id</th>
           <th scope="col">Service name</th>
           <th scope="col">Price</th>
         </tr>
       </thead>
       <tbody>
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
             echo "
             <tr>
             <td>$service_id</td>
             <td>$service_name</td>
             <td>$price</td>
           </tr>
             ";
           }
         }
         ?>
       </tbody>
     </table>
   </div>
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">PRICE CALCULATOR</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="calculator">
        <div class="container row">
          <div class="col-8">
        <form action=" " class="form" method="post">
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
  <input class='form-check-input' type='checkbox' value='$price' id='$service_id'>
  <label class='form-check-label' for='flexCheckIndeterminate'>
    $service_name <span> $price </span>
  </label>
</div>
             "; 
           }
        }
        ?>
        </form>
        </div>
        <div class="col-4">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat in voluptas tenetur aspernatur illo odit obcaecati amet, nostrum itaque facilis possimus a modi, accusamus dolor sed asperiores quae expedita temporibus.</p>
        </div>
    </div> 
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
 </body>
 </html>