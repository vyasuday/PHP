<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel-Booking-FACILITIES</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
    <style>
      .pop:hover{
        border-top-color: var(--teal) !important;
        transform: scale(1.03);
        transition: all 0.3s;
      }
    </style>
</head>
<body class="bg-light">
<?php require('inc/header.php'); ?>
<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
  <hr>
  <div class="h-line bd-dark"></div>
  <p class="text-center mt-3">
  No matter how much hotels innovate, there are still some basic facilities that a hotel must offer to its guests, and managing these facilities is vital to the bottom line. 
  Proper hotel facilities management can optimize hotel services to provide a unique and luxurious experience for guests.
  In a way, facilities management acts as gatekeeper and guardian of the client’s brand and can either strengthen its brand value or sabotage it. 
  Nevertheless, understanding what hotel facilities services are essential and critical from a FM service perspective is the key to providing the ultimate guest experience. 
  </p>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
           <img src="images/features/wifi.svg" width="40px">
             <h5 class="m-0 ms-3">Wifi</h5>
        </div>
        <p>
        Wi-Fi is a wireless networking technology that allows devices such as computers (laptops and desktops), mobile devices (smart phones and wearables), 
        and other equipment (printers and video cameras) to interface with the Internet.
        </p>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
           <img src="images/features/teli.jpg" width="40px">
             <h5 class="m-0 ms-3">Television</h5>
        </div>
        <p>
        Modern TV cameras don't "scan" pictures this way anymore. 
        Instead, just as in camcorders and webcams, their lenses focus the scene being filmed onto.
        Television, sometimes shortened to TV, is a telecommunication medium. 
        </p>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
           <img src="images/features/ac.jpg" width="40px">
             <h5 class="m-0 ms-3">AC</h5>
        </div>
        <p>
        Car air conditioners work much the same way as home and office ones, only they're a lot smaller. The chiller part (which incorporates an expansion valve and an evaporator) is mounted behind the car's dashboard, the heat dissipater. 
        </p>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
           <img src="images/features/heater.jpg" width="40px">
             <h5 class="m-0 ms-3">Room heater</h5>
        </div>
        <p>
        Room heaters are an essential electronic appliance for those who live in the colder parts of the world and also for others who experience chilly winters.  
        Not only do heaters keep homes and rooms warm but also cosy. 
        </p>
      </div>
    </div>
  </div>
</div>


 <?php require('inc/footer.php'); ?>

</body>
</html>