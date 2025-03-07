<?php 
include('classes/user_class.php');
$delete_hall=new user;
$delete_hall->delete_booking($_GET['id']);




 ?>