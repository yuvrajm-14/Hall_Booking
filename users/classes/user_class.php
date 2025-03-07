<?php 
// session_start();
include('dbcon.php');


class user extends connection
{
	public function login($mobile,$password,$event,$date,$hall,$start_time,$end_time){
		$password=md5($password);
		$stmt = $this->connect()->prepare("SELECT * FROM `user` WHERE BINARY `mobile`= ? AND BINARY `password`=? ");
		$stmt->bind_param("ss", $mobile, $password);
		$stmt->execute();
		$r=$stmt->get_result(); 
		if ($r->num_rows == 1 ) {
			$data = $r->fetch_assoc();
			$_SESSION['user']=$data['id'];
			if (!empty($event)) {
				$this->hall_booking($event,$date,$hall,$start_time,$end_time,$data['id']);
				unset($_SESSION['event']);unset($_SESSION['hall']);unset($_SESSION['date']);
				unset($_SESSION['start_time']);unset($_SESSION['end_time']);
			}
			?>
	   		<script type="text/javascript">
	   			window.open('users/user_show_hall.php','_self');
	   		</script>
	   		<?php
		}else{
	        ?>
	   		<script type="text/javascript">
	   			alert('Username / Password Invalid');
	   		</script>
	   		<?php
	    }
		
	}

	public function booking_check($date,$hall,$start_time,$end_time){

		// $new_start_time = date("g",strtotime($start_time));
		// $new_end_time = date("g",strtotime($end_time));
		$check=$this->connect()->query("SELECT * FROM `booking` WHERE `date` = '$date' AND `hall` = '$hall' AND `status`= 'confirm'");

		if (mysqli_num_rows($check)>0) {
			while ($row = mysqli_fetch_assoc($check)) {

				$e_start=$row['start_time'];
				$e_end=$row['end_time'];

				for ($i=$e_start; $i <=$e_end ; $i++) { 
					$got_num[]=$i;
				}
				
			}

			if (array_search($start_time,$got_num)) {
				return 'Not Avaliable';
			}elseif (array_search($end_time,$got_num)) {
				return 'Not Avaliable';
			}else{
				return 'Avaliable';
			}

		}else{
			return 'Avaliable';
			
		}
	}

	public function show_all_hall(){
		$stmt = $this->connect()->prepare("SELECT * FROM `hall` WHERE `status`='open' ");
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

	public function user_register($name,$mobile,$email,$password){
		$check=$this->connect()->query("SELECT * FROM `user` WHERE `mobile`='$mobile' ");

		if (!mysqli_num_rows($check)==1) {
			$password=md5($password);
			$stmt = $this->connect()->prepare("INSERT INTO `user` (`name`, `mobile`, `email`, `password`) VALUES (?,?,?,?)");
			$stmt->bind_param("ssss",$name,$mobile,$email,$password);
			$execute = $stmt->execute();
			if ($execute==TRUE) {
			?>
			<script type="text/javascript">
				alert('Registration Completed.');
				window.open('login.php','_self');
			</script>

			<?php
			}
		}else{
			?>
			<script type="text/javascript">
				alert('This Mobile Number Already Registered');
				window.open('register.php','_self');
			</script>

			<?php
		}	
	}

	public function hall_booking($event,$date,$hall,$start_time,$end_time,$user){
		
		$stmt = $this->connect()->prepare("INSERT INTO `booking` (`event`, `date`, `hall`, `start_time`, `end_time`, `user`) VALUES (?,?,?,?,?,?) ");
		$stmt->bind_param("ssssss",$event,$date,$hall,$start_time,$end_time,$user);
		$execute = $stmt->execute();
		if ($execute==TRUE) {
		?>
		<script type="text/javascript">
			alert('Hall Booking Completed.');
		</script>

		<?php
		}
			
	}

	public function show_all_booked_hall($user){
		$stmt = $this->connect()->prepare("SELECT * FROM `hall` WHERE `id` IN (SELECT `hall` FROM `booking` WHERE `user` = ? )");
		$stmt->bind_param("s",$user);
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


	public function show_all_booking_detail_hall($hall,$user){
		$stmt = $this->connect()->prepare("SELECT * FROM `booking` WHERE `hall`= ? AND `user` = ?");
		$stmt->bind_param("ss",$hall,$user);
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

	public function delete_booking($id){
		$stmt = $this->connect()->prepare("DELETE FROM `booking` WHERE `booking`.`id` = ? ");
		$stmt->bind_param("i",$id);
		$execute = $stmt->execute();
	
		if ($execute==TRUE) {
		?>
		<script type="text/javascript">
			alert('Hall booking canceled sucessfully');
			window.open('user_show_hall.php','_self');
		</script>

		<?php
		}
			
	}

	public function show_user_info($id){
		$stmt = $this->connect()->prepare("SELECT * FROM `user` WHERE `id` = ? ");
		$stmt->bind_param("s",$id);
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

	public function mobile_num_check($mobile){
		$check=$this->connect()->query("SELECT * FROM `user` WHERE `mobile`='$mobile' ");

		if (!mysqli_num_rows($check)==1) {
			
			?>
			<script type="text/javascript">
				alert('Mobile Number Not Registered');
				window.open('forget_password.php','_self');
			</script>

			<?php
		
		}else{
   			$otp=rand(111111,999999);
   			$token=md5($otp);
   			$_SESSION['otp_mobile']=$mobile;

   			// SMS API START

   			// Account details
   			$n_mobile="91".$mobile;
			$apiKey = urlencode('fjrWcb99yyc-CKT7fFxz3KTFlMe2QPXJTQ1r7aUaa5');
			
			// Message details
			$numbers = array($mobile);
			$sender = urlencode('TXTLCL');
			$message = rawurlencode('Your OTP :'.$otp.' ');
		 
			$numbers = implode(',', $numbers);
		 
			// Prepare data for POST request
			$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
		 
			// Send the POST request with cURL
			$ch = curl_init('https://api.textlocal.in/send/');
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($ch);
			curl_close($ch);
   			// SMS API END

			?>
			<script type="text/javascript">
				window.open('otp.php?token=<?php echo $token; ?>','_self');
			</script>

			<?php
		}	
	}

	public function update_password($mobile,$password){
		$password=md5($password);
		$stmt = $this->connect()->prepare("UPDATE `user` SET `password` = ? WHERE `user`.`mobile` = ?");
		$stmt->bind_param("ss",$password,$mobile);
		$execute = $stmt->execute();
	
		if ($execute==TRUE) {
			unset($_SESSION['otp_mobile']);
		?>
		<script type="text/javascript">
			alert('Password Updated sucessfully');
			window.open('login.php','_self');
		</script>

		<?php
		}
			
	}

	public function update_profile($email,$old_password,$password,$id,$alt_mobile){
		if ($old_password==$password) {
		}else{
		$password=md5($password);
		}

		$stmt = $this->connect()->prepare("UPDATE `user` SET `email` = ? , `password` = ? , `alt_mobile` = ? WHERE `user`.`id` = ?");
		$stmt->bind_param("ssss",$email,$password,$alt_mobile,$id);
		$execute = $stmt->execute();
	
		if ($execute==TRUE) {
		?>
		<script type="text/javascript">
			alert('Profile Updated sucessfully');
			window.open('user_edit_profile.php','_self');
		</script>

		<?php
		}
			
	}

	public function contact_message_submit($email,$mobile,$message){
		
		$stmt = $this->connect()->prepare("INSERT INTO `contact` (`email`, `mobile`, `message`) VALUES (?,?,?)");
		$stmt->bind_param("sss",$email,$mobile,$message);
		$execute = $stmt->execute();
		if ($execute==TRUE) {
		?>
		<script type="text/javascript">
			alert('Your Message submitted Successfully');
			window.open('contact_us.php','_self');
		</script>

		<?php
		}
			
	}




}











 ?>