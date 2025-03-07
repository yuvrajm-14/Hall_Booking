<?php 
include('classes/admin_class.php');
$delete_hall=new admin;
$delete_hall->delete_hall($_GET['id']);




 ?>