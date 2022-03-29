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
    <form action="./create-validate.php" method="POST">
        <label for="name" class="form-label">user name:</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Enter your name" required>
        <label for="number" class="form-label">number:</label>
        <input type="text" class="form-control" name="number" id="number" placeholder="Enter your number" required>
        <label for="email" class="form-label">email:</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
        <label for="address" class="form-label">address:</label>
        <input type="text" class="form-control" name="address" id="address" placeholder="Enter your address" required>
        <label for="password" class="form-label">password:</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" maxlength="8" onchange='check_pass()'; required>
        <span class="text-danger">maximum length - 8 characters</span>'
        <br>
        <label for="confirm_password" class="form-label">confirm password:</label>
        <input type="password" class="form-control" name="confirm_password" id="confirm_password" maxlength="8" placeholder="Re-enter your password" onchange='check_pass()'; required>
        <span class="text-danger">maximum length - 8 characters</span>
        <button type="submit" name="submit"class="btn btn-primary" id="submit" disabled>Submit</button>
    </form>
    </div>
    <br><br><br><br>
    <?php include "../basic/footer.php" ?>
</body>
<style>
   .navbar{
     position: absolute;
   }
   .create-page{
     margin-top: 8rem;
   }
 </style>
</html>
<script>
    function check_pass() {
    if (document.getElementById('password').value ==
            document.getElementById('confirm_password').value) {
        document.getElementById('submit').disabled = false;
    } else {
        document.getElementById('submit').disabled = true;
    }
}
</script>