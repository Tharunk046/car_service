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
   <script>
    document.getElementById("services").style.color = "red";
    document.getElementById("services").style.fontWeight="600";
    </script>
   <div class="service-list">
   <div class="service_heading">
            <h3>Services</h3>
   </div>
       <button type="button" class="btn btn-primary my-3 p-2 mx-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
       Price calculator
     </button>
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
  <input class='form-check-input' type='checkbox' onclick='priceCheck($service_id,$price)' value='$price' id='$service_id'>
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
        <p id="total" class="priceInfo"></p>
   
   <div class= "buttonDiv">
   <input type="button" class="button" value="Calculate Total" id="calcButton">
   </div>
        </div>
    </div> 
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       <?php
       echo"
       <a href='./client-booking.php?profile=$username'>
       <button class='btn btn-primary'>Book appointment</button>
       </a>
       ";
       ?>
      </div>
    </div>
  </div>
</div>
<script>
           function calcTotal()
         {
            var itemTotal = 0;
            var items = document.getElementsByTagName("input");
            //js variable items for all HTML elements w the input tag

            for (var i = 0; i < 11; i++)
            {
               if (items[i].checked)//if the item is checked
               {
                  itemTotal += (items[i].value * 1);//then item total is updated to the previous total + value of checked item. Mutplied by 1 so that JS knows that it is a num
               }

               document.getElementById("total").innerHTML = "Your total service cost is:  Rs " + itemTotal + ".00";
               //inner HTML fills in the space between the opening and closing <p> tags with the total
            }
         }

         //backwards compatibility for event listener submit button
         var calcButton = document.getElementById("calcButton"); //sButton HTML element is assign JS value of submitButton
         if (calcButton.addEventListener) //now you can add event listener
         {
            calcButton.addEventListener("click", calcTotal, false); //event is click, action is calctotal, false for bwc
         }
         else if (calcButton.attachEvent)
         {
            calcButton.attachEvent("onclick", calcTotal);   
         }

</script>
 </body>
 </html>