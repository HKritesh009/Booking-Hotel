<?php
session_start();
// page redirect
$usermail="";
$usermail=$_SESSION['usermail'];
if($usermail == true){
}else{
  header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/thumbslider.css">
    <?php require("../include/links.php"); ?>
    <title>HK Stay's</title>

</head>

<body class="bg-light">
    <!-- Header -->
    <?php require("../include/headerRDTL.php"); ?>

   <!-- <div class="my-1 px-2">
        <h2 class="fw-bold new-font text-center">Our Rooms</h2>
        <div class="hor-line bg-dark"></div>
    </div>  -->
    <div class="container py-2" style="display:flex-box">
        <div style="display:flex">
         <div class="col-lg-8 col-md-8 px-4 shadow rounded-2">
        <!-- Slider Room images -->
       <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff " class="swiper mySwiper2 rounded-3">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="../images/rooms/1.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="../images/rooms/1.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="../images/rooms/1.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="../images/rooms/1.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="../images/rooms/1.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="../images/rooms/1.jpg" />
      </div>
    </div>
    <div class="swiper-button-next "></div>
    <div class="swiper-button-prev "></div>
  </div>
  <div thumbsSlider="" class="swiper mySwiper ">
    <div class="swiper-wrapper rounded-3">
      <div class="swiper-slide">
        <img src="../images/rooms/1.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="../images/rooms/1.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="../images/rooms/1.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="../images/rooms/1.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="../images/rooms/1.jpg" />
      </div>
    </div>
  </div>
  <div class="hotelinfo">
    <div style="display:flex" class="align-items-center">
 <span><h2> Mahakal Lodge</h2> </span>
 <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                            
                        
 </div>                     
  <secondary style="font-size :.875em ; ">
    <h6 class="text-gray-600 "> Vishnupuri, Nanded | 5.54Km from Hazur saheb railway station</h6>
  </secondary>
  <span >A serene stay awaits at our plush hotel, offering a blend of luxury and comfort with top-notch amenities.

Experience the pinnacle of elegance in our beautifully designed rooms with stunning cityscape views.

Indulge in gastronomic delights at our in-house restaurants, featuring local and international cuisines.

Unwind in our state-of-the-art spa and wellness center, a perfect retreat for the senses.

Located in the heart of the city, our hotel is the ideal base for both leisure and business travelers</span>

                            <div class="features mt-4 mb-2">
                            <h6 class="mb-1 ">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Free Cancelattion</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">No prepayment needed – pay at the property</span>
                           </div>
                           <div class="facilities mb-2">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Unlimited Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Smart Television</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Room Heater</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">AC</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Free lunch</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">travelling facilities</span>
                            </div>
                            <div class="guests mb-2 " style="bottomborder: 0px 2px solid black">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">5 Adults</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">4 Childrens</span>
                            </div>
                        
</div>
                       
</div>
 

<!-- Booking Panel -->
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow" style="">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2   fw-bold" style="">Booking Details </h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filterDropdown">
                            <!-- <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Check Availability</h5>
                                <label class="form-label">Check-In</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label">Check-Out</label>
                                <input type="date" class="form-control shadow-none">
                            </div> -->
                        </div>
                       
                        <div class=" row Container border bg-light rounded mb-4 align-items-center" style="display:flex-box;">
                        <label class="form-label  fw-bold" style="font-weight:500; ">Check-In</label>
                        <div class="col-6" style="display:flex">
                            <input type="date" class="form-control shadow-none" placeholder="check-in" style="width:160px"> 
                        </div>
                        <div class="col-6 " style="display:flex">
                        <input type="date" class="form-control shadow-none" placeholder="check-out" style="width:160px">
                        </div>
                        </div>
                       
                        <div class="align-items-center border bg-light rounded  mb-4">
                            <label class="form-label  fw-bold" type="number" style="font-weight: 500;">Reservation</label>
                            <select class="form-select shadow-none mb-1" aria-placeholder="Room" style="Auto">
                                <option value="1">1 Room</option>
                                <option value="2">2 Room</option>
                                <option value="3">3 Room</option>
                                <option value="4">4 Room</option>
                            </select>
                            <select class="form-select shadow-none mb-1" aria-placeholder="Guest" style="Auto">
                                <option value="1">1 Guest</option>
                                <option value="2">2 Guest</option>
                                <option value="3">3 Guest</option>
                                <option value="4">4 Guest</option>
                            </select>
                        </div> 
                        <div class="border bg-light rounded mb-4">
                        <label class="form-label  fw-bold " type="number" style="font-weight: 500;">Room Type</label>
                        <select class="form-select shadow-none mb-1" aria-placeholder="Guest" style="Auto">
                                <option value="2">1 King Bed </option>
                                <option value="3">2 Bed </option>
                                <option value="4">3 Bed</option>
                            </select>
                        </div>
                        <div class="rounder">
                            <h5>per day rate </h5>
                            <h6>$18</h6>
                        </div>

                        <div class="rounded ">
                        <a href="" class="btn btn-sm text-white custom-bg shadow-none" style="max-width:100% ; " >Confirm Booking</a>
                        </div>
                        </div>
                        
                    </div>
                    </nav>
            </div>
           
           
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/thumbslider.js" defer></script>
    <!-- Footer -->
    <?php require("../include/footerRDTL.php"); ?>
</body>

</html>