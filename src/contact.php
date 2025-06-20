<?php
session_start();
// page redirect
include "config.php";
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
    <?php require("./include/links.php"); ?>
    <title>HK Stays-Contact</title>
</head>

<body class="bg-light">
    <!-- Header -->
    <?php require("./include/header.php"); ?>

      <!-- Saving wensite from form resublission when refersing the page -->

<script>  if( window.history.replaceState ){
    window.history.replaceState(null,null,window.location.herf);
}
</script>

    <div class="my-5 px-4">
        <h2 class="fw-bold new-font text-center">Contact Us</h2>
        <div class="hor-line bg-dark"></div>
        <p class="text-center mt-3">Our team is available 24/7 to assist with reservations, special requests, and any questions you may have. We look forward to making your stay exceptional!</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14565.913833130498!2d77.27913336915174!3d19.112274162050536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bce29b9903d053d%3A0x2c5238a90ab55c03!2sShri%20Guru%20Gobind%20Singhji%20Institute%20of%20Engineering%20and%20Technology!5e0!3m2!1sen!2sin!4v1732104799277!5m2!1sen!2sin" width="550" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/3bsriRMNkexCKd4o9" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2" id="address">
                        <i class="bi bi-geo-alt-fill"></i> Vishnupuri(431606), Nanded - Maharastra

                    </a>
                    <h5 class="mt-4">Call Us</h5>
                    <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+919422332139 <br></br>
                        <i class="bi bi-telephone-fill"></i>+919403344194
                    </a>
                    <h5 class="mt-4">Email Address</h5>
                    <a href="#" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> Riteshdhurve988@gmail.com
                        <br></br>
                        <i class="bi bi-envelope-fill"></i> HKRitesh1126@gmail.com
                    </a>

                    <h5 class="mt-4">Follow Us</h5>

                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter me-1"></i>
                    </a>

                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>
             <?php       
                if (isset($_POST['user_q_submit'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $subject = $_POST['sub'];
                    $msg = $_POST['msg'];

                    if($name == "" || $email == "" || $msg == "" || $subject ==""){
                        echo "<script>swal({
                            title: 'Fill the proper details',
                            icon: 'error',
                        });
                        </script>";
                    }
                    else{
                        
                                $sql = "INSERT INTO user_queries (name,email,subject,message) VALUES ('$name', '$email', '$subject','$msg')";
                                $result = mysqli_query($conn, $sql);
    
                             if($result) {
                                    $_SESSION['usermail']=$email;
                                    $Username = "";
                                    $Email = "";
                                    $Password = "";
                                    $CPassword = "";
                                //header(header:'Location: http://localhost/booking-hotel/index.php');
                                } else {
                                    echo "<script>swal({
                                        title: 'Something went wrong',
                                        icon: 'error',
                                    });
                                    </script>";
                                }
                            }
                        } else {
                            echo "<script>swal({
                                title: 'Password does not matched',
                                icon: 'error',
                            });
                            </script>";
                        }
                    
                    
            ?>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                <form class="user_Q" id="usersignup" action="" method="POST">
                    <div class=" mt-3" >
                    <label for="Username"  style="font-weight: 500;">Name</label>
                        <input type="text" class="form-control mt-3"  name="name" placeholder=" ">
                        
                    </div>
                    <div class=" mt-3" >
                    <label for="Email"  style="font-weight: 500;">Email</label>
                        <input type="email" class="form-control" name="email" placeholder=" ">
                        
                    </div>
                    <div class="mt-3" >
                    <label for="Text"  style="font-weight: 500;">Subject</label>
                        <input type="text" class="form-control" name="sub" placeholder=" ">
                      
                    </div>
                    <div class=" mt-3" >
                    <label for="Text"  style="font-weight: 500;">Message</label>
                    <textarea class="form-control shadow-none" name="msg" rows="5" style="resize: none;" required></textarea>
                       
                    </div>
                    <button type="submit" name="user_q_submit" class="auth_btn mt-3btn text-white custom-bg mt-3 ">send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <?php
    // if (isset($_POST['send'])) {
    //     $filter_data = filteration($_POST);

    //     $query = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?, ?, ?, ?)";
    //     $values = [$filter_data['name'], $filter_data['email'], $filter_data['subject'], $filter_data['message']];
    //     $result = insert($query, $values, "ssss");

    //     if ($result == 1) {
    //         alert('success', 'Mail Sent Successfully');
    //     } else {
    //         alert('error', 'Message Sent Failed!');
    //     }
    // }
    ?> -->

    <!-- Footer -->
    <?php require("./include/footer.php"); ?>
</body>

</html>