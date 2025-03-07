<?php 

class connection
{
	public $con;
	public function connect(){
		$this->con=mysqli_connect('localhost','root','','hall_booking');
		if ($this->con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	    exit();
		}else{
			return $this->con;
		}
	}
	

}



 ?>