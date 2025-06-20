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
    <link rel="stylesheet" href="./css/roomslider.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php require("./include/links.php"); ?>
    <title>HK stays</title>
    
</head>
<body class="bg-light">
    <!-- Header -->
    <?php require("./include/header.php"); ?>
    
    <div class="my-5 px-4">
        <h2 class="fw-bold new-font text-center">Our Rooms</h2>
        <div class="hor-line bg-dark"></div>
    </div>

    <!-- Filters -->
    <div class="container " style="display:flex-box">
        <div style="display:flex">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow" style="">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Filters</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Facilities</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Facility One</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">Facility Two</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Facility Three</label>
                                </div>
                            </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Rating</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1"> 5 Star </label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">4 Star <label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">3 Star </label>
                                </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Guests</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Adults</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label">Childrens</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="col-lg-8 col-md-8 px-4">
                <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide"> 
                        <div class="container">
                    <div class="row card mb-1 border-0 shadow" style="">
  <div class="row g-0 p-3 ">
    <div class="col-md-5 align-items-center">
      <img src="./images/rooms/1.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-5 align-items-center">
      <div class="card-body">
        <h5 class="card-title">Mahakal Lodge </h5>
        <div class="features mb-2 ">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Free Cancelattion</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">No prepayment needed – pay at the property</span>
                           
                        </div>
                          <div class="facilities mb-3 ">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Unlimited Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Smart Television</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Room Heater</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">AC</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Free lunch</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">travelling facilities</span>
                        </div>
                        <div class="guests mb-1">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">5 Adults</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">4 Childrens</span>
                        </div>
        <!--<p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
      </div>
    </div>
    <div class="col-md-2 align-items-center ">
    <h6 class="mb-4 mt-3">$12-$25 Night</h6>
    <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
    <a href="rdtl/room1.php" class="btn btn-sm text-white custom-bg shadow-none mb-2 w-100">Book Now</a>
    <a href="rdtl/room1.php" class="btn btn-sm btn-outline-dark shadow-none w-100">More Details</a>
    </div>
  </div>
</div>   
                    <div class="row card mb-1 border-0 shadow" style="">
  <div class="row g-0 p-3 ">
    <div class="col-md-5 align-items-center">
      <img src="./images/rooms/122334.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-5 align-items-center">
      <div class="card-body">
        <h5 class="card-title">Novotel</h5>
        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Free cancellation</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base"> No prepayment needed – pay at the property</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Unlimited Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Dineer + Lunch included</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Room Heater</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">AC</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">pets allowed</span>
                        </div>  
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">4 Adults</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">4 Childrens</span>
                        </div>
        <!--<p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
      </div>
    </div>
    <div class="col-md-2 align-items-center ">
    <h6 class="mb-4 mt-3">$15-$30 Night</h6>
    <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
    <a href="" class="btn btn-sm text-white custom-bg shadow-none mb-2 w-100">Book Now</a>
    <a href="" class="btn btn-sm btn-outline-dark shadow-none w-100">More Details</a>
    </div>
  </div>
</div>   
                    <div class="row card mb-1 border-0 shadow" style="">
  <div class="row g-0 p-3 ">
    <div class="col-md-5 align-items-center">
      <img src="./images/rooms/12234.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-5 align-items-center">
      <div class="card-body">
        <h5 class="card-title">Vivanta Pune</h5>
        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">95% fee refund at Cancelattion</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">No prepayment needed – pay at the property</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Unlimited Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Smart Television</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Room Heater</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Breakfast +Lunch +Dinner</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Pets Alllowed</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Satvik Food </span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">5 Adults</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">4 Childrens</span>
                        </div>
                         
        <!--<p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
      </div>
    </div>
    <div class="col-md-2 align-items-center ">
    <h6 class="mb-4 mt-3">$20-50 Night</h6>
    <span class="badge rounded-pill bg-light" >
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
    <a href="" class="btn btn-sm text-white custom-bg shadow-none mb-2 w-100">Book Now</a>
    <a href="" class="btn btn-sm btn-outline-dark shadow-none w-100">More Details</a>
    </div>
  </div>
</div>   
                    <div class="row card mb-1 border-0 shadow" style="">
  <div class="row g-0 p-3 ">
    <div class="col-md-5 align-items-center">
      <img src="./images/rooms/1244.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-5 align-items-center">
      <div class="card-body">
        <h5 class="card-title">Hotel Royal </h5>
        <div class="features mb-2 ">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Free Cancelattion</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">No prepayment needed – pay at the property</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Special Prices at Festivels</span>
                           
                        </div>
                          <div class="facilities mb-3 ">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Unlimited Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Smart Television</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">AC</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Free lunch</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">travelling facilities</span>
                        </div>
                        <div class="guests mb-1">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">6 Adults</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">4 Childrens</span>
                        </div>
        <!--<p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
      </div>
    </div>
    <div class="col-md-2 align-items-center ">
    <h6 class="mb-4 mt-3">$20-$40 Night</h6>
    <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                               
                            </span>
    <a href="" class="btn btn-sm text-white custom-bg shadow-none mb-2 w-100">Book Now</a>
    <a href="" class="btn btn-sm btn-outline-dark shadow-none w-100">More Details</a>
    </div>
  </div>
</div>   
</div>  
                </div>
                    <div class="swiper-slide">    <div class="container">
                    <div class="row card mb-1 border-0 shadow" style="">
  <div class="row g-0 p-3 ">
    <div class="col-md-5 align-items-center">
      <img src="./images/rooms/12443.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-5 align-items-center">
      <div class="card-body">
        <h5 class="card-title">NIY Stays</h5>
        <div class="features mb-2 ">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base"> Cancelation at 90% refund</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">No prepayment needed – pay at the property</span>
                           
                        </div>
                          <div class="facilities mb-3 ">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Unlimited Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Smart Television</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Room Heater</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">AC</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Free lunch</span>
                        </div>
                        <div class="guests mb-1">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">5 Adults</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">2 Childrens</span>
                        </div>
        <!--<p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
      </div>
      </div>
      <div class="col-md-2 align-items-center ">
    <h6 class="mb-4 mt-3">$20-$40 Night</h6>
    <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                               
                            </span>
    <a href="" class="btn btn-sm text-white custom-bg shadow-none mb-2 w-100">Book Now</a>
    <a href="" class="btn btn-sm btn-outline-dark shadow-none w-100">More Details</a>
    </div>
    </div>
</div>
</div>
</div>
                  </div>
                  <div class="swiper-pagination mt-1"></div>
                </div> 
</div>
              <!--  <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-4">
                            <img src="./images/rooms/1.jpg" class="img-fluid rounded" alt="Room One">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="">Simple Room Name</h5>
                            <div class="features mb-2">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">2 Rooms</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">1 Bathrooms</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">1 Balcony</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">3 Sofa</span>
                            </div>
                            <div class="facilities mb-2">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Unlimited Wifi</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Smart Television</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Room Heater</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">AC</span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">5 Adults</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">4 Childrens</span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">$149 Per Night</h6>
                            <a href="" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-4">
                            <img src="./images/rooms/1.jpg" class="img-fluid rounded" alt="Room One">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="">Simple Room Name</h5>
                            <div class="features mb-2">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">2 Rooms</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">1 Bathrooms</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">1 Balcony</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">3 Sofa</span>
                            </div>
                            <div class="facilities mb-2">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Unlimited Wifi</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Smart Television</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Room Heater</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">AC</span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">5 Adults</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">4 Childrens</span>
                            </div>
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-4">$149 Per Night</h6>
                            <a href="" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-4">
                            <img src="./images/rooms/1.jpg" class="img-fluid rounded" alt="Room One">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="">Simple Room Name</h5>
                            <div class="features mb-2">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">2 Rooms</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">1 Bathrooms</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">1 Balcony</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">3 Sofa</span>
                            </div>
                            <div class="facilities mb-2">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Unlimited Wifi</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Smart Television</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Room Heater</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">AC</span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">5 Adults</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">4 Childrens</span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">$149 Per Night</h6>
                            <a href="" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>         
   <script> 
    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
      },
    });
  </script>
    <!-- Footer -->
    <?php require("./include/footer.php"); ?>
</body>
</html>