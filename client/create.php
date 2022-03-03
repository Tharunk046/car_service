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
    <div class="create-page">
    <h2>Create new account </h2>
    <form action="./create-validate.php" method="POST">
        <label for="name">user name:</label>
        <br>
        <input type="text" name="username" id="username" placeholder="enter your name" required>
        <br>
        <label for="number">number:</label>
        <br>
        <input type="text" name="number" id="number" placeholder="enter your number" required>
        <br>
        <label for="email">email:</label>
        <br>
        <input type="email" name="email" id="email" placeholder="enter your email" required>
        <br>
        <label for="password">password:</label>
        <br>
        <input type="password" name="password" id="password" placeholder="enter your password" maxlength="8" onchange='check_pass()'; required>
        <span class="text-danger">maximum length - 8 characters</span>
        <br>
        <label for="confirm_password">confirm password:</label>
        <br>
        <input type="password" name="confirm_password" id="confirm_password" maxlength="8" placeholder="re-enter your password" onchange='check_pass()'; required>
        <span class="text-danger">maximum length - 8 characters</span>
        <button type="submit" name="submit"class="btn btn-primary" id="submit" disabled>Submit</button>
    </form>
    <p class="redirect">Already have an account?<a href="./login.php"> login </a></p>
    </div>
    <br><br><br>
    <?php include "../basic/footer.php" ?>
</body>
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