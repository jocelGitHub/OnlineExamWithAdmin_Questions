<?php 
class AdminUserHandler{

	public function loginAuthen($username, $password){
		if (empty($username)) {
			return false;
		}
		if (empty($password)) {
			return false;
		}

		$result = AdminUserDAO::loginAuthen($username, $password);

		return $result;
	}
}

 ?>