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

 <body class="bg-dark">
   <?php include "../basic/admin-header.php" ?>
   <?php include "../basic/sidebar.php" ?>
   <div class="service-list">
     <a href="./crud/service_create.php">
     <button class="btn btn-primary add my-4 mx-5">Add Service</button></a>
     <table class="table table-hover table-dark text-center">
       <thead>
         <tr>
           <th scope="col">Service id</th>
           <th scope="col">Service name</th>
           <th scope="col">Price</th>
           <th scope="col">Action</th>
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
             <td> <a href='./crud/service_update.php?updateid=$service_id'><button type='submit' class='btn btn-info'>Update</button></a>
             <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#servicedelete'>delete</button>
             </td> 
           </tr>
             ";
           }
         }
         ?>
       </tbody>
     </table>
   </div>
   <div class="modal fade" id="servicedelete" tabindex="-1" aria-labelledby="servicedeletelabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="servicedeletelabel">Delete User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <h5>Do you want to delete this service?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <?php echo"
        <a href ='./crud/service_delete.php?deleteid=$service_id'><button class='btn btn-danger'>delete</button></a>
        "?>
      </div>
    </div>
  </div>
</div>
 </body>
 <style>
   .service-list {
    margin-left: 10rem;
    width: 68rem !important;
    padding: 16px;
  }
  .service-list .add {
    width: 8rem;
  }
 </style>
 </html>