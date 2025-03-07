<?php 
session_start();
if (isset($_SESSION['user'])){
			
}else{
	?>
	<script type="text/javascript">
		
			window.open('../login.php','_self');
		
	</script>
	<?php


}








 ?>