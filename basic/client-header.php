<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" integrity="sha384-3B6NwesSXE7YJlcLI9RpRqGf2p/EgVH8BgoKTaUrmKNDkHPStTQ3EyoYjCGXaOTS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script language="JavaScript" type="text/javascript">
</script>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg sticky-top container-fluid">
    <div class="navbar-brand">
      <?php echo"
      <a href='../client/client-profile.php?profile=$username'><i class='fas fa-tools'></i> Auto<span>logic</span></a>
      ";?>
    </div>
    <div class="navbar-nav" style="margin-left: auto;">
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle nav-user"id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown">
          <?php echo $_SESSION['sess_user']; ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" onclick="return confirm('Are You sure you want to logout?');" href="../client/client-logout.php">Logout</a></li>
          </ul>
    </li>
    </div>
  </nav>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
  <style>
.navbar{
        background: #072F4F;
}
.navbar-brand a{
    margin-left: 20px;
    font-weight: 500 !important;
    font-family: 'Libre Bodoni', serif; 
    font-size: 32px !important;

}.navbar a {
  color:white;
  text-decoration: none;
  margin-left: 20px;
  font-size: 28px;
  
}
span{
    color: #B4CE1D;
}
.navbar-brand a:hover{
  color: white;
}
.navbar-nav{
  margin-right: 40px;
}
.dropdown-menu{
  border: none !important;
  background:none !important;
  text-align: center !important;
  margin-left: -5px !important;
}
.dropdown-menu .dropdown-item{
  border: none !important;
  background:none !important;
  text-align: center !important;
  margin-left: -5px !important;
  font-size: 24px;
}
.dropdown-menu:hover{
  border: none !important;
  background: none !important;
  width:10px;
  text-align: center;
  margin-right: 40px;
  border-bottom:2px solid red !important;
  border-radius: 0;
  height: fit-content;
}
.dropdown-menu a {
  color: black;
  font-size: 20px;
  font-weight: 500;
}
.nav-user{
  text-transform: capitalize;
}
.nav-user:hover{
  color: white !important;
}
  </style>
</html>
