<?php 
session_start();
if (isset($_SESSION['admin'])){
			
}else{
	?>
	<script type="text/javascript">
		
			window.open('admin_login.php','_self');
		
	</script>
	<?php


}








 ?>