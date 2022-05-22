<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./styles/create.css">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </head>
  <body>
  <?php include "../basic/header.php"?>
    <div class="create-page">
    <h2>Create new account </h2>
    <br>
    <form action="./create-validate.php" method="POST">
      <div class="input">
        <label for="name" class="form-label">user name:</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Enter your name">
        <p id="usererror" class="error text-danger"></p>
      </div>
      <div class="input">
        <label for="number" class="form-label">number:</label>
      <input type="text" class="form-control" name="number" maxlength="10" minlength="10" id="number" placeholder="Enter your number">
        <p id="numerror"  class="error text-danger"></p>
      </div>
      <div class="input">
        <label for="email" class="form-label">email:</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
        <p id="emailerror"  class="error text-danger"></p>
      </div>
      <div class="input">
        <label for="address" class="form-label">address:</label>
        <input type="text" class="form-control" name="address" id="address" placeholder="Enter your address">
        <p id="addresserror"  class="error text-danger"></p>
      </div>
      <div class="input">
        <label for="password" class="form-label">password:</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
        <p id="passerror"  class="error text-danger"></p>
      </div>
      <div class="input">
        <label for="confirm_password" class="form-label">confirm password:</label>
        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Re-enter your password">
        <p id="repasserror"  class="error text-danger"></p>
      </div>
        <button type="submit" name="submit"class="btn btn-primary" onclick="return val()" id="submit">Submit</button>
    </form>
    </div>
    <br><br><br>
    <?php include "../basic/footer.php" ?>
</body>
<style>
   .navbar{
     position: absolute;
   }
   .create-page{
     margin-top: 8rem;
   }
   .footer{
     position: relative;
     margin-top: 8rem !important;
   }
 </style>
</html>
<script>
function val(){
var username = document.getElementById('username').value;
var number = document.getElementById('number').value;
var email = document.getElementById('email').value;
var address = document.getElementById('address').value;
var password = document.getElementById('password').value;
var address = document.getElementById('address').value;
var password = document.getElementById('password').value;
var confirm_password = document.getElementById('confirm_password').value;
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(!username){
    document.getElementById("usererror").innerHTML = "username is empty ! enter a username";
    return false;    // in failure case
} 
else if(!number){
  document.getElementById("numerror").innerHTML = "phone number is empty! enter a phone number";
    return false;  
}     
else if (!email){
  document.getElementById("emailerror").innerHTML = " email is empty ! enter a correct email id";
  return false;  
}
else if( ! email.match(mailformat)){
  document.getElementById("emailerror").innerHTML = "invalid email id! enter a correct email id";
  return false;  
}
else if( !address){
  document.getElementById("addresserror").innerHTML = " address is empty ! enter a address";
  return false;  
}
else if( !password){
  document.getElementById("passerror").innerHTML = " password is empty ! enter a address";
  return false;  
}
else if( !confirm_password){
  document.getElementById("repasserror").innerHTML = " password is empty ! enter a address";
  return false;  
}
else if( password != confirm_password  )
{
  document.getElementById("repasserror").innerHTML = " password does not match! enter a correct password";
  return false;  
}
else{
return true;   
} // in success case
}
</script>

