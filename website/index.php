<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>WebTech</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
  rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php include "nav.php"; ?>

<!-- Carousel Starts -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img3.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Development</h5>
        <p>Quality is the complex concept. It is highly context-dependent. Just as there is no one automobile to satisfy everyone's needs</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/img2.png" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Code</h5>
        <p>Anyone can write code that a computer can understand. Good programmers write code that humans can understand.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/img1.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Network</h5>
        <p>Networking is not about just connecting people. It's about connecting people with people, people with ideas, and people with opportunities.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel Ends -->

<!-- Section 1 Starts -->
<section class="py-4">
  <div class="py-2">
    <h2 class="text-center">About Us</h2>
  </div>
  <div class="container-fluid py-5" style="background-color:whitesmoke;">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/web.jpg" class="img-fluid abdiv">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-5">WebTech</h2>
      <p class="py-2">WebTech is a professional web platform. Here we will provide you only interesting content, which you will like very much.
      We're dedicated to providing you the best of web, with a focus on dependability. We're working to turn our passion for web into a booming
      online website. We hope you enjoy our web as much as we enjoy offering them to you.Thanks For Visiting Our Site.</p>
         <a href="about.php" class="btn btn-success" style="margin-top:18px;">Check More</a>
    </div>
  </div>
  </div>
</section>
<!-- Section 1 Ends -->

<!-- Section 2 Starts -->
<section class="py-4">
  <div class="py-2">
      <h2 class="text-center">Services</h2>
    </div>
  <div class="container-fluid py-5" style="background-color:whitesmoke;">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
    <div class="card">
  <img class="card-img-top" src="images/react.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">React</h4>
    <p class="card-text">A library for building composable user interfaces.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <div class="card">
  <img class="card-img-top" src="images/node.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Node JS</h4>
    <p class="card-text">A development platform for executing JavaScript code.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <div class="card">
  <img class="card-img-top" src="images/mongo.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Mongo DB</h4>
    <p class="card-text">NoSQL database management program.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>
  </div>
  </div>
</section>
<!-- Section 2 Ends -->

<!-- Section 3 Starts -->
<section class="py-4">
  <div class="py-2">
    <h2 class="text-center">Contact Us</h2>
  </div>
  <br>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="name" class="form-control" autocomplete="off">
      </div>
    <br>
      <div class="form-group">
        <label>Email-ID</label>
        <input type="text" name="email" class="form-control" autocomplete="off">
      </div>
    <br>
    <div class="form-group">
      <label>Phone Number</label>
      <input type="text" name="phno" class="form-control" autocomplete="off">
    </div>
    <br>
    <div class="form-group">
      <label>Comments</label>
      <textarea name="msg" class="form-control"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>
</section>
<!-- Section 3 Ends -->

<footer>
<p class="p-3 bg-dark text-white text-center">WebTech Prouctions</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>
