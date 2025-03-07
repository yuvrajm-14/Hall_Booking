<?php
include('../classes/user_class.php');
$booking_check=new user;
$responce=$booking_check->booking_check($_POST['date'],$_POST['hall'],$_POST['start_time'],$_POST['end_time']);
echo $responce;

?>

