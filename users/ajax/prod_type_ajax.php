<?php 
include('../classes/admin_class.php');
$show_product=new admin;
$products=$show_product->show_product_by_type($_POST['prod_type']);
?>
<option value="">Select Product Model</option>
<?php
foreach ($products as $product) {
?>
<option value="<?php echo $product['pmid']; ?>"><?php echo $product['name']; ?></option>
<?php
}

?>

