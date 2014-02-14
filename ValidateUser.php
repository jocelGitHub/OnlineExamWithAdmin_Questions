<?php
	require_once("config.php");
	require_once("User.php");
	require_once("UserDAO.php");
	require_once("UserHandler.php");
	
	if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['password'])){

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pass = sha1($_POST['password']);
	


	$config = array(
			'fname' => $fname,
			'lname' => $lname,
			'email' => $email,
			'password' => $pass
		);

	$details = new User($config);
		$_fname = $details->getFname();
		$_lname = $details->getLname();
		$_email = $details->getEmail();
		$_pass = $details->getPassword();

	$Query = new UserHandler();

 	$isTrue = $Query->createUser($_fname,$_lname,$_email,$_pass);
	 	if ($isTrue) {
	 		header("location:login.php");
	 	} else {
	 		echo "<script>alert('May');window.location.href='registration.php'</script>";
	 	}
 	

	}else{
		echo "<script>alert('Sorry Please Fill in all');window.location.href='registration.php'</script>";
	}

?>