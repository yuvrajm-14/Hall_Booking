<?php 
include('../classes/admin_class.php');
$show_product=new admin;
$products=$show_product->show_single_product($_POST['prod_model_id']);
echo $products['price'];

?>

