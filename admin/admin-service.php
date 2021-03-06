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
   <script language="JavaScript" type="text/javascript">
   function checkDelete(){
    return confirm('Are you sure you want to delete?');
}
</script>
 </head>
 <body class="bg-light">
   <?php include "../basic/admin-header.php" ?>
   <?php include "../basic/sidebar.php" ?>
   <script>
    document.getElementById("services").style.color = "blue";
    document.getElementById("services").style.fontWeight="600";
    </script>
   <div class="service_heading">
            <h4>Services</h4>
   </div>
   <div class="service-list">
     <a href="./crud/service_create.php">
     <button class="btn btn-primary add my-2 mx-5">Add Service</button></a>
     <table class="table table-hover table-light text-center">
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
             <a onclick='return checkDelete()' href ='./crud/service_delete.php?deleteid=$service_id'><button class='btn btn-danger'>delete</button></a>
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
   .service-list {
    margin-left: 10rem;
    width: 68rem !important;
    padding: 16px;
  }
  .service-list .add {
    width: 8rem;
  }
  .service_heading{
        margin-top: 1rem;
        margin-left:11rem;
        width: 66rem !important;
        border-bottom: 5px solid gray;
    }
 </style>
 </html>