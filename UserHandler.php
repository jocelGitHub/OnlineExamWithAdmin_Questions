<?php 

class UserHandler{
	
	public function createUser($fname, $lname, $email, $pass){
		if (empty($fname)) {
			return false;
		}
		if (empty($lname)) {
			return false;
		}
		if (empty($email)) {
			return false;
		}
		if (empty($pass)) {
			return false;
		}

		$user = UserDAO::createUser($fname, $lname, $email, $pass);

		if (empty($user)) {
			return false;
		}

		return $user;
	}

	public function checkEmail($email){
		if (empty($email)) {
			return false;
		}

		$result = UserDAO::checkEmail($email);

		return $result;

	}

	public function loginAuthenticator($email,$pass){
		if (empty($email)) {
			return false;
		}

		if (empty($pass)) {
			return false;
		}

		$result = UserDAO::loginAuthenticator($email,$pass);

		return $result;
	}



}

?>

