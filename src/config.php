<?php
$server = "127.0.0.1";
$username = "root";
$password = "";
$database = "booking-hotel";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
// else{
//     echo "<script>alert('connection successfully.')</script>";
// }
?>