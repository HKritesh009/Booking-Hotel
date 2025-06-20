<?php 

session_start();
session_destroy();

header(header:'Location: http://localhost/booking-hotel/index.php');

?>