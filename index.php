<!doctype html>
<html lang="en">
<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./landing/landing.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--font-awesome icon cdn-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <!-- Optional JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</head>
<body>
 <?php include "./basic/header.php"; ?>
  <!---->
  <video class="w-100" src="./images/autologicvid.mp4" autoplay muted loop></video>
  <!---->
  <div class="about-us row  mt-3 container-fluid ">
    <div class="col-md-6 about ">
      <h2>ABOUT US</h2>
      <p> Giving your car the service it deserves, Auto logic Service centre has an extensive service network that spans
        across more than 100 service centres in Tamilnadu, making it easily accessible for customers.
        Book a service appointment for your car at your nearest Auto logic service centre, and avail numerous benefits
        like quality service by certified and expert technicians, genuine parts and accessories, transparent evaluation
        and technology-driven solutions. With stringent sanitisation and quality checks in place, we take good care of
        your car at Auto logic Service centre. Explore our range of services like Extended warranty, Roadside assistance
        and more.
      </p>
    </div>
    <img src="./images/about.jpeg" class="col-md-6" alt="">
  </div>
  <div class="why-us row mt-3 container-fluid">
    <img class="col-md-6" src="./images/car-service.jpg"></img>
    <div class="col-md-6 why ">
      <h2>WHY CHOOSE US?</h2>
      <p>
        Booking a service appointment with Auto logic Service allows you to access a world of benefits. At every Auto
        logic Service Station, we have employed a team of highly trained and experienced technicians who follow strict
        guidelines to ensure that your vehicle receives proper service. This ensures safety as well as quality. Apart
        from this, you can rest be assured that only genuine parts and accessories will be used in your car. You can
        also use the service cost calculator to get an estimate for how much your next service will cost and post that
        book your service appointment here.
      </p>
    </div>
  </div>
  <!---->
  <div class="landing-card d-flex justify-content-evenly container mt-5">
    <div class="card p-3" style="width: 30%; text-transform:capitalize;">
      <div class="row">
        <div class="col-lg-4 col-md-12"><img src="./images/icon1.jpg" alt="" class="img-fluid mt-4"></div>
        <div class="col-lg-8  col-md-12">
          <h3>Book Appointment</h3>
          <p>Book your service appointmenet through our website.</p>
        </div>
      </div>
    </div>
    <div class="card p-3" style="width: 30%; text-transform:capitalize;">
      <div class="row">
        <div class="col-lg-4  col-md-12"><img src="./images/icon2.png" alt="" class="img-fluid mt-4"></div>
        <div class="col-lg-8  col-md-12">
          <h3>Save your <br> Time</h3>
          <p>pickup and drop facility is available and free for our clients.</p>
        </div>
      </div>
    </div>
    <div class="card p-3" style="width: 30%; text-transform:capitalize;">
      <div class="row">
        <div class="col-lg-4  col-md-12"><img src="./images/icon3.png" alt="" class="img-fluid mt-4"></div>
        <div class="col-lg-8  col-md-12">
          <h3>Save your Money</h3>
          <p>affordable service cost and exiciting packages available.</p>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="login text-center">
   <!-- <h2>To Book an appointment please <a href="./basic/login.php">LOGIN</a></h2> -->
   <h3>For Appointment Booking,Services Provided and Price Details Please  
   <a href="./client/login.php" style="text-decoration: none;">LOGIN</a>
   </h3>
  </div>
  <br>
  <!--brands--->
  <div class="brand container">
    <h1> Car Brands We Service </h1>
    <div class="d-flex justify-content-md-around">
      <div class="card">
        <img src="./images/ford-logo.png" alt="">
        <h3>ford</h3>
      </div>
      <div class="card">
        <img src="./images/nissan-logo.png" alt="">
        <h3>nissan</h3>
      </div>
      <div class="card">
        <img src="./images/skoda-logo.png" alt="">
        <h3>skoda</h3>
      </div>
      <div class="card">
        <img src="./images/suzuki-logo.png" alt="">
        <h3>suzuki</h3>
      </div>
      <div class="card">
        <img src="./images/tata-logo.png" alt="">
        <h3>tata</h3>
      </div>
      <div class="card">
        <img src="./images/toyota-logo.png" alt="">
        <h3>toyota</h3>
      </div>
      <div class="card">
        <img src="./images/volkswagen-logo.png" alt="">
        <h3>volkswagen</h3>
      </div>
      <div class="card">
        <img src="./images/honda-logo.png" alt="">
        <h3>honda</h3>
      </div>
    </div>
  </div>
  <br>
</body>
 <?php include "./basic/footer.php"; ?>
</html>
