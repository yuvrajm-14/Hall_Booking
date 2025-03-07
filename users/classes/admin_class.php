<?php 
// session_start();
include('dbcon.php');


class admin extends connection
{

// All about login started	
	public function login($username,$password){
		$password=md5($password);
		$stmt = $this->connect()->prepare("SELECT * FROM `admin_login` WHERE BINARY `username`= ? AND BINARY `password`=? ");
		$stmt->bind_param("ss", $username, $password);
		$stmt->execute();
		$r=$stmt->get_result(); 
		if ($r->num_rows == 1 ) {
			$data = $r->fetch_assoc();
			$_SESSION['admin']=$data['aid'];
			?>
	   		<script type="text/javascript">
	   			window.open('admin_dashboard.php','_self');
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
		$stmt = $this->connect()->prepare("SELECT * FROM `hall`");
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


	public function hall_count(){
		$stmt = $this->connect()->prepare("SELECT * FROM `hall`");
		$stmt->execute();
		$r=$stmt->get_result(); 
		return $r->num_rows;		
	}

// All about Hall end

// All about booking start

	public function show_all_booking(){
		$stmt = $this->connect()->prepare("SELECT * FROM `booking`");
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


	public function month_booking_count($month,$year){
		$stmt = $this->connect()->prepare("SELECT * FROM `booking` WHERE MONTH(`date`) = ? AND YEAR(`date`) = ?");
		$stmt->bind_param("ss", $month, $year);
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


	public function show_five_booking(){
		$stmt = $this->connect()->prepare("SELECT * FROM `booking`  ORDER BY `date` DESC LIMIT 5");
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

	public function user_count(){
		$stmt = $this->connect()->prepare("SELECT * FROM `user`");
		$stmt->execute();
		$r=$stmt->get_result(); 
		return $r->num_rows;		
	}

// All about user end

// All about staff start


	public function staff_count(){
		$stmt = $this->connect()->prepare("SELECT * FROM `staff`");
		$stmt->execute();
		$r=$stmt->get_result(); 
		return $r->num_rows;		
	}

	public function show_five_staff(){
		$stmt = $this->connect()->prepare("SELECT * FROM `staff`  ORDER BY `id` DESC LIMIT 5");
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

	public function show_all_staff(){
		$stmt = $this->connect()->prepare("SELECT * FROM `staff` ");
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



// All about staff end


// All about contact	

	public function show_all_contact(){
		$stmt = $this->connect()->prepare("SELECT * FROM `contact`");
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




}











 ?>