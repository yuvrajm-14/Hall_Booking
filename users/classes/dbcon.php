

<?php

$server = ($_SERVER['SERVER_NAME'] == 'localhost') ? 'localhost' : '172.20.229.16';

// Database credentials
$username = "root"; // Default username for local development
$password = ""; // Default password (change if needed)
$database = "hall_booking"; // Replace with your actual database name
$port = 3306; 


$mysqli = new mysqli($server, $username, $password, $database, $port);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

?>





/* <?php

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

