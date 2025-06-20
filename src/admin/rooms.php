<?php
    include ("../config.php");
    require("./include/essentials.php");
    require("./include/database.php");
    adminLogin();
    if(isset($_GET['del'])){
        $filter_data = filteration($_GET);

            $query = "DELETE FROM `rms` WHERE `id`=?";
            $values = [$filter_data['del']];
            if(delete($query, $values, "i")){
                alert("success", "Hotel Deleted!");
            }else{
                
            }
        }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require("../include/links.php"); ?>
    <script src="./js/script.js" defer></script>
    <title>Hotels</title>
</head>

<!-- Saving wensite from form resublission when refersing the page -->

<script>  if( window.history.replaceState ){
    window.history.replaceState(null,null,window.location.herf);
}
</script>


<body class="bg-white">
    <?php require("./include/header.php"); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Hotels</h3>
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="text-end mb-4">
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-room">
                                <i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>
                        <div class="table-responsive-lg" style="height: 450px; overflow-y: scroll;">
                            <table class="table table-hover border text-center">
                                <thead>
                                    <tr class="bg-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">location</th>
                                        <th scope="col">description</th>
                                        <th scope="col">price</th>
                                        <th scope="col">email</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="room-data">
                                    <?php
                                        $query = "SELECT * FROM `rms` ORDER BY `id` DESC";
                                        $data = mysqli_query($conn, $query);
                                       
                                        while($row = mysqli_fetch_assoc($data)){
                                            $del="<a href='?del=$row[id]' class='btn btn-sm btn-danger mt-2 rounded-pill'>Delete</a>";
                                            echo<<<query
                                                    <tr  >
                                                        <td>$row[id]</td>
                                                        <td>$row[name]</td>
                                                        <td>$row[location]</td>
                                                        <td>$row[description]</td>
                                                        <td>$row[price]</td>
                                                        <td>$row[email]</td>
                                                        <td>$del</td>
                                                    </tr>
                                            query;
                                        }
                                    ?>
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php       
                if (isset($_POST['r_submit'])) {
                    $name = $_POST['name'];
                    $loc = $_POST['location'];
                    $des = $_POST['description'];
                    $price = $_POST['price'];
                    $email = $_POST['email'];

                    if($name == "" || $email == "" || $loc == "" || $des =="" || $price =="" || $email ==""){
                        echo "<script>swal({
                            title: 'Fill the proper details',
                            icon: 'error',
                        });
                        </script>";
                    }
                    else{
                        
                                $sql ="INSERT INTO rms (name,location,description,price,email) VALUES ('$name', '$loc', '$des','$price','$email')";
                                $result = mysqli_query($conn, $sql);
                             if($result) {
                                    $_SESSION['adminmail']=$email;
                                    $name = "";
                                    $loc = "";
                                    $des = "";
                                    $price = "";
                                    $email = "";
                                    header(header:'Location: http://localhost/admin/rooms.php');
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
 <!-- add room modal-->
    <div class="modal fade" id="add-room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="" id="add-room-form" autocomplete="off" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Rooms</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Room Name</label>
                                <input type="text" name="name" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Room location</label>
                                <input type="text" min="1" name="location" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Room description</label>
                                <textarea class="form-control shadow-none" name="description" rows="5" style="resize: none;" required></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Room Price</label>
                                <input type="number" min="1" name="price" class="form-control shadow-none" required>
                            </div>
                            
                            
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Manager_Email</label>
                                <input type="email" min="1" name="email" class="form-control shadow-none" required>
                            </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="r_submit" class="auth_btn mt-3btn text-white custom-bg mt-3">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



