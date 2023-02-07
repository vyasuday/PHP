<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel-Booking-ABOUT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
    <style>
      .box{
        border-top-color: var(--teal) !important;
      }
    </style>
</head>
<body class="bg-light">
<?php require('inc/header.php'); ?>
<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">ABOUT US</h2>
  <hr>
  <div class="h-line bd-dark"></div>
  <p class="text-center mt-3">
  A great hotel website provides visitors with information about the hotel or its resort such as photos, prices, locations, and services. The key is that it does this in an attractive way, making it as easy as possible for visitors to book a room. 
  A comfortable and convenient user experience will also be a bonus that impresses website visitors.
  </p>
</div>
<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
      <h3 class="mb-3">JD-HOTEL</h3>
      <p>
      A great hotel website provides visitors with information about the hotel or its resort such as photos, prices, locations, and services. The key is that it does this in an attractive way, making it as easy as possible for visitors to book a room. 
      A comfortable and convenient user experience will also be a bonus that impresses website visitors.        
      </p>
    </div>
    <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
      <img src="images/about/about.jpg" class="w-100">
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/hotel.jpg" width="70px">
        <h4 class="mt-3">
          100+ ROOMS
        </h4>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/customer.jpg" width="70px">
        <h4 class="mt-3">
          200+ CUSTOMERS
        </h4>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/rating.jpg" width="70px">
        <h4 class="mt-3">
          150+ REVIEWS
        </h4>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/staff.jpg" width="70px">
        <h4 class="mt-3">
          200+ STAFFS
        </h4>
      </div>
    </div>
  </div>
</div>

<h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
<div class="container px-4">
 <div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/about/team.jpg" class="w-100">
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/about/team2.jpg" class="w-100">
    </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>
 <?php require('inc/footer.php'); ?>
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


<script>
  var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
    },
  });
</script>

</body>
</html>