<?php 
session_start();
if (isset($_SESSION['owner'])){
			
}else{
	?>
	<script type="text/javascript">
		
			window.open('owner_login.php','_self');
		
	</script>
	<?php


}








 ?>