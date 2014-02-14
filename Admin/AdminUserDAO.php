<?php 
class AdminUserDAO{
	public static function loginAuthen($username, $password){
		global $db;
		try {
			$query = "SELECT * FROM admin WHERE username = '{$username}' AND password = '{$password}' ";
			$result = $db->query($query);
			
			if ($result->num_rows > 0) {
				$record = $result->fetch_assoc();
				$_SESSION = $record;
				error_log("Successfully Login");
				return true;
			} else {
				error_log("Username or Password is Incorrect");
				return false;
			}

		} catch (Exception $e) {
			error_log($e->getMessage());
		}

		return false;

	}	
}

 ?>