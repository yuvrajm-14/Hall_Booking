<?php 
// session_start();
include('dbcon.php');


class owner extends connection
{

// All about login started	
	public function login($username,$password){
		$password=md5($password);
		$stmt = $this->connect()->prepare("SELECT * FROM `hall` WHERE BINARY `owner_username`= ? AND BINARY `owner_password`= ? ");
		$stmt->bind_param("ss", $username, $password);
		$stmt->execute();
		$r=$stmt->get_result(); 
		if ($r->num_rows == 1 ) {
			$data = $r->fetch_assoc();
			$_SESSION['owner']=$data['id'];
			?>
	   		<script type="text/javascript">
	   			window.open('owner_dashboard.php','_self');
	   		</script>
	   		<?php
		}else{
	        ?>
	   		<script type="text/javascript">
	   			 alertify.alert('Username / Password Invalid');
	   		</script>
	   		<?php
	    }
		
	}

// All about login end	

// All about Hall started

	public function show_all_hall(){
		$stmt = $this->connect()->prepare("SELECT * FROM `hall");
		$stmt->execute();
		$r=$stmt->get_result(); 
		while ($row = $r->fetch_assoc()) {
			$data[]=$row;
		}
		if (empty($data)) {
				$data="";
		}else{
			return $data;
		}
	}

		
	public function show_single_hall($id){
		$stmt = $this->connect()->prepare(" SELECT * FROM `hall` WHERE `id`= ?");
		$stmt->bind_param("s", $id);
		$stmt->execute();
		$r=$stmt->get_result(); 
		$row = $r->fetch_assoc();
			$data=$row;
		
		if (empty($data)){
				$data="";
		}else{
			return $data;
		}
	}
	public function delete_hall($id){
		$stmt = $this->connect()->prepare("DELETE FROM `hall` WHERE `hall`.`id` = ? ");
		$stmt->bind_param("i",$id);
		$execute = $stmt->execute();
	
		if ($execute==TRUE) {
		?>
		<script type="text/javascript">
			alert('Hall deleted sucessfully');
			window.open('admin_show_hall.php','_self');
		</script>

		<?php
		}
			
	}
// All about Hall end



// All about Staff started

	public function show_all_staff_type(){
		$stmt = $this->connect()->prepare("SELECT * FROM `staff_type`");
		$stmt->execute();
		$r=$stmt->get_result(); 
		while ($row = $r->fetch_assoc()) {
			$data[]=$row;
		}
		if (empty($data)) {
				$data="";
		}else{
			return $data;
		}
	}

	public function add_staff($name,$hall_id,$mobile,$type,$address,$joining_date){
		$stmt = $this->connect()->prepare("INSERT INTO `staff` (`name`, `hall_id`, `mobile`, `type`, `address`, `joining_date`) VALUES (?,?,?,?,?,?)");
		$stmt->bind_param("ssssss",$name,$hall_id,$mobile,$type,$address,$joining_date);
		$execute = $stmt->execute();
			if ($execute==TRUE) {
			?>
			<script type="text/javascript">
				alert('Staff inserted sucessfully');
				// window.open('admin_add_product.php','_self');
			</script>

			<?php
			}
			
	}

	public function show_all_staff($id){
		$stmt = $this->connect()->prepare("SELECT * FROM `staff` WHERE `hall_id`= ?");
		$stmt->bind_param("i", $id);
		$stmt->execute();
		$r=$stmt->get_result(); 
		while ($row = $r->fetch_assoc()) {
			$data[]=$row;
		}
		if (empty($data)) {
				$data="";
		}else{
			return $data;
		}
	}

	public function show_five_staff($id){
		$stmt = $this->connect()->prepare("SELECT * FROM `staff` WHERE `hall_id`='$id'  ORDER BY `id` DESC LIMIT 5");
		$stmt->execute();
		$r=$stmt->get_result(); 
		while ($row = $r->fetch_assoc()) {
			$data[]=$row;
		}
		if (empty($data)) {
				$data="";
		}else{
			return $data;
		}
	}

	public function show_single_staff($id){
		$stmt = $this->connect()->prepare(" SELECT * FROM `staff` WHERE `id`= ?");
		$stmt->bind_param("s", $id);
		$stmt->execute();
		$r=$stmt->get_result(); 
		$row = $r->fetch_assoc();
			$data=$row;
		
		if (empty($data)){
				$data="";
		}else{
			return $data;
		}
	}

	
	public function edit_staff($name,$mobile,$type,$address,$joining_date,$id){
		$stmt = $this->connect()->prepare("UPDATE `staff` SET `name` = ?, `mobile` = ?, `type` = ?, `address` = ?, `joining_date` = ? WHERE `staff`.`id` = ?");
		$stmt->bind_param("sisssi",$name,$mobile,$type,$address,$joining_date,$id);
		$execute = $stmt->execute();
			if ($execute==TRUE) {
			?>
			<script type="text/javascript">
				alert('Staff updated sucessfully');
				// window.open('admin_add_product.php','_self');
			</script>

			<?php
			}
			
	}

	public function total_staff_count($hall){
		$stmt = $this->connect()->prepare("SELECT * FROM `staff` WHERE `hall_id` = ? ");
		$stmt->bind_param("s", $hall);
		$stmt->execute();
		$r=$stmt->get_result(); 
		return $r->num_rows;		
	}


	public function delete_staff($id){
		$stmt = $this->connect()->prepare("DELETE FROM `staff` WHERE `staff`.`id` = ? ");
		$stmt->bind_param("i",$id);
		$execute = $stmt->execute();
	
		if ($execute==TRUE) {
		?>
		<script type="text/javascript">
			alert('Staff deleted sucessfully');
			window.open('owner_dashboard.php','_self');
		</script>

		<?php
		}
			
	}


// All about staff end


// All about booking start

	public function show_all_booking($id){
		$stmt = $this->connect()->prepare("SELECT * FROM `booking` WHERE `hall`= ?");
		$stmt->bind_param("i", $id);
		$stmt->execute();
		$r=$stmt->get_result(); 
		while ($row = $r->fetch_assoc()) {
			$data[]=$row;
		}
		if (empty($data)) {
				$data="";
		}else{
			return $data;
		}
	}

	public function show_single_booking($id){
		$stmt = $this->connect()->prepare("SELECT * FROM `booking` WHERE `id`= ?");
		$stmt->bind_param("i", $id);
		$stmt->execute();
		$r=$stmt->get_result(); 
		$row = $r->fetch_assoc();
		$data=$row;
		
		if (empty($data)) {
				$data="";
		}else{
			return $data;
		}
	}

	public function edit_booking_info($status,$paid_amount,$more_details,$id,$hall){
		$stmt = $this->connect()->prepare("UPDATE `booking` SET `status` = ? , `paid_amount` = ? , `more_details` = ? WHERE `booking`.`id` = ? ");
		$stmt->bind_param("ssss", $status,$paid_amount,$more_details,$id);
		$execute = $stmt->execute();
			if ($execute==TRUE) {
			?>
			<script type="text/javascript">
				alert('Booking updated sucessfully');
				window.open('owner_view_booking.php?id=<?php echo $hall; ?>','_self');
			</script>

			<?php
			}
			
	}


	public function month_booking_count($month,$year,$hall){
		$stmt = $this->connect()->prepare("SELECT * FROM `booking` WHERE MONTH(`date`) = ? AND YEAR(`date`) = ? AND `hall`= ?");
		$stmt->bind_param("sss", $month,$year,$hall);
		$stmt->execute();
		$r=$stmt->get_result(); 
		return $r->num_rows;		
	}


	public function total_earning($id){
		$stmt = $this->connect()->prepare("SELECT SUM(paid_amount) AS total FROM `booking` WHERE `hall` = '$id' ");
		$stmt->execute();
		$r=$stmt->get_result(); 
		$row = $r->fetch_assoc();
			$data=$row;
		if (empty($data)) {
				$data="";
		}else{
			return $data;
		}		
	}


	public function show_five_booking($id){
		$stmt = $this->connect()->prepare("SELECT * FROM `booking` WHERE `hall`='$id'  ORDER BY `date` DESC LIMIT 5");
		$stmt->execute();
		$r=$stmt->get_result(); 
		while ($row = $r->fetch_assoc()) {
			$data[]=$row;
		}
		if (empty($data)) {
				$data="";
		}else{
			return $data;
		}
	}






// All about booking end

// All about user start


	public function show_single_user($id){
		$stmt = $this->connect()->prepare("SELECT * FROM `user` WHERE `id`= ?");
		$stmt->bind_param("i", $id);
		$stmt->execute();
		$r=$stmt->get_result(); 
		$row = $r->fetch_assoc();
		$data=$row;
		
		if (empty($data)) {
				$data="";
		}else{
			return $data;
		}
	}

// All about user end

	



}











 ?>