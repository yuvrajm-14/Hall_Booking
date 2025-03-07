<?php 
include('classes/owner_class.php');
$delete_hall=new owner;
$delete_hall->delete_staff($_GET['id']);




 ?>