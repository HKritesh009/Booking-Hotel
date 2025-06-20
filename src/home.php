<?php
session_start();
// page redirect
$usermail="";
$usermail=$_SESSION['usermail'];
if($usermail == true){
}
else{
  header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/index.css">
    <?php require("./include/links.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./js/swiper.js" defer></script>
    <title>HK Stays-Home</title>
</head>

<body class="bg-light">
    <!-- Header -->
    <?php require("./include/header.php"); ?>

    <!-- Carousel -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiperC">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="./images/carousel/1.png" alt="" class="w-100 d-block"
                        style="width:1475px; height: 453px;">
                </div>
                <div class="swiper-slide">
                    <img src="./images/carousel/IMG_19210.png" alt="" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="./images/carousel/IMG_19387.png" alt="" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="./images/carousel/IMG_41144.png" alt="" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="./images/carousel/IMG_83213.png" alt="" class="w-100 d-block">
                </div>

            </div>
        </div>
    </div>

    <!-- Check Availability Form -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-18 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form action="">
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-4">
                            <label class="form-label" style="width:100px font-weight: 500;">Location</label><i class="bi bi-geo-alt-fill "></i>
                           <input type="text" class="form-control shadow-none" placeholder= "location" style="width:220px">
                            
                        </div>
                        <div class="col-lg-3 mb-4">
                            <label class="form-label" style="font-weight:500; ">Check-In</label>
                            <input type="date" class="form-control shadow-none" style="width:220px">
                        </div>
                        <div class="col-lg-3 mb-4">
                            <label class="form-label" style="font-weight: 500;">Check-Out</label>
                            <input type="date" class="form-control shadow-none" style="width:220px">
                        </div>

                        <div class="col-lg-2 mb-4">
                            <label class="form-label" type="number" style="font-weight: 500;">Members</label>
                            <select class="form-select shadow-none" style="width:180px">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class=" col-lg-1 mb-4">
                            <button type="submit" class="btn text-white shadow-none custom-bg"
                                style="background-color: rgb(15, 129, 199);">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Our Rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold new-font">Hand-picked nearby hotels for you</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="./images/rooms/1.jpg" class="card-img-top" alt="Room Picture" style="height:262px">
                    <div class="card-body">
                        <h5>Mahakal Lodge</h5>
                        <h6 class="mb-4">$12-$25 Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Free
                                Cancelattion</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">No prepayment needed –
                                pay at the property</span>

                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Unlimited Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Smart
                                Television</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Room Heater</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">AC</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Free lunch</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">travelling
                                facilities</span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">5 Adults</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">4 Childrens</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="rating mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="rdtl/room1.php" class="btn btn-sm text-white custom-bg shadow-none"  style="background-color: rgb(15, 129, 199);">Book Now</a>
                            <a href="rdtl/room1.php" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="./images/rooms/12234.jpg" class="card-img-top" alt="Room Picture">
                    <div class="card-body">
                        <h5>Novotel</h5>
                        <h6 class="mb-4">$15-30 Per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Free
                                cancellation</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base"> No prepayment needed
                                – pay at the property</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Unlimited Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Dineer + Lunch
                                included</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Room Heater</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">AC</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">pets allowed</span>
                        </div>

                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">4 Adults</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">4 Childrens</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="rating mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="rdtl/room2.php" class="btn btn-sm text-white custom-bg shadow-none" style="background-color: rgb(15, 129, 199);">Book Now</a>
                            <a href="rdtl/room2.php" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto; background-cover:contain">
                    <img src="./images/rooms/122334.jpg" class="card-img-top " alt="Room Picture" style="height:262px">
                    <div class="card-body">
                        <h5>Vivanta Pune</h5>
                        <h6 class="mb-4">$20-50 Per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">95% fee refund at
                                Cancelattion</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">No prepayment needed –
                                pay at the property</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Unlimited Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Smart
                                Television</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Room Heater</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Breakfast +Lunch
                                +Dinner</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Pets Alllowed</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Satvik Food </span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">5 Adults</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">4 Childrens</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="rating mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="rdtl/room3.php" class="btn btn-sm text-white custom-bg shadow-none" style="background-color: rgb(15, 129, 199);">Book Now</a>
                            <a href="rdtl/room3.php" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-2 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>

    <!-- Our Facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold new-font">Our Facilities</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow my-3 py-4">
                <img src="./images/facilities/internet.svg" alt="wifi" width="80px">
                <h5 class="mt-3">Unlimited Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow my-3 py-4">
                <img src="./images/facilities/massage.svg" alt="wifi" width="80px">
                <h5 class="mt-3">Massage Center</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow my-3 py-4">
                <img src="./images/facilities/ac.svg" alt="wifi" width="80px">
                <h5 class="mt-3">AC</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow my-3 py-4">
                <img src="./images/facilities/heater.svg" alt="wifi" width="80px">
                <h5 class="mt-3">Room Heater</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow my-3 py-4">
                <img src="./images/facilities/tv.svg" alt="wifi" width="80px">
                <h5 class="mt-3">Smart Television</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-2 fw-bold shadow-none">More
                    Facilities >>></a>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold new-font">Testimonials</h2>
    <div class="container mt-5">
        <div class="swiper swiperT">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="./images/facilities/massage.svg" alt="" width="30px">
                        <h6 class="m-0 ms-2">Shahrukh khan</h6>
                    </div>
                    <p>I love how easy and efficient this website is. The search options are comprehensive, and I was
                        able to book a fantastic hotel in minutes. The prices were also great compared to other
                        platforms. Will definitely use it again for my next trip!</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="fa-solid fa-location-dot" style="color: #2697cf;"></i>
                    </div>
                </div>


                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="./images/facilities/massage.svg" alt="" width="30px">
                        <h6 class="m-0 ms-2">Ms.Gauri Bhelonde</h6>
                    </div>
                    <p>I had such a smooth experience using this hotel booking website! The search filters were super
                        helpful, and I found the perfect place to stay at a great price. I especially loved how quickly
                        I could compare different hotels and read honest reviews from other travelers. Booking was a
                        breeze, and everything went perfectly once I arrived. I’ll definitely use this site for all my
                        future trips!</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="./images/facilities/massage.svg" alt="" width="30px">
                        <h6 class="m-0 ms-2">Dwayen Johnson</h6>
                    </div>
                    <p>I had an amazing experience using this hotel booking website. The interface is super
                        user-friendly, and I was able to find the perfect hotel at a great price in no time. The variety
                        of options and filters made it easy to compare and choose the right one. Highly recommend!</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="./images/facilities/massage.svg" alt="" width="30px">
                        <h6 class="m-0 ms-2">Mike tyson</h6>
                    </div>
                    <p>This site is a game-changer! I’ve used many hotel booking platforms, but this one stands out with
                        its seamless booking process and unbeatable deals. Plus, the customer support was excellent when
                        I had a small query. Definitely my go-to for all future travels!</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="" class="btn btn-sm btn-outline-dark rounded-2 fw-bold shadow-none">Know More >>></a>
        </div>
    </div>

    <!-- Reach Us -->

   <!--  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold new-font">Reach Us</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px" src="<?php echo $contact_r['iframe']; ?>" style="border:0;"
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call Us</h5>
                    <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> + 628123456789
                    </a>
                    <br>

                    <a href="#" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> + 628123456789
                    </a>

                    <h5 class="mt-4">Email Address</h5>
                    <a href="#" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> rizkynhg@gmail.com
                    </a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow Us</h5>

                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter me-1"></i> Twitter
                        </span>
                    </a>

                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i> Facebook
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i> Instagram
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Footer -->
    <?php require("./include/footer.php"); ?>
</body>

</html>