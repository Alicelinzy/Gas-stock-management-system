<?php

 include 'include/inc.db.php';

	$data = array();

 $database = new Connection();
  $connect = $database->open();


try {
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
    $phonenumber = $_POST['phonenumber'];
	$email = $_POST['email'];
    $password = $_POST['password'];
	$access = 3;
	$status = 'online';
	$dates = date("Y-m-d h:i");


	$select_phone = "SELECT count(*) as countphone FROM users WHERE phonenumber='$phonenumber'";
	$prepare_phone = $connect -> prepare($select_phone);
	$prepare_phone -> execute();
	$fetch_phone = $prepare_phone -> fetch(PDO::FETCH_ASSOC);

	if ($fetch_phone['countphone'] != 0) {
	        $data['error'] = true;
			$data['message'] = "Sorry, Phonenumber Already  exist";
	}else{
		$select_email = "SELECT count(*) as countemail FROM users WHERE email='$email'";
	$prepare_email = $connect -> prepare($select_email);
	$prepare_email -> execute();
	$fetch_email = $prepare_email -> fetch(PDO::FETCH_ASSOC);

	if ($fetch_email['countemail'] != 0) {
	        $data['error'] = true;
			$data['message'] = "Sorry, Email Already  exist";
	}else{
		$passworda = md5($password);
		$duba = [
			'first_name' => $first_name,
			'last_name' => $last_name,
			'email' => $email,
			'phonenumber' => $phonenumber,
			'passwords' => $passworda,
			'dates' => $dates,
			'access' => $access,
			'status' => $status,
		];

    $insert_user = "INSERT INTO `users`(`first_name`, `last_name`, `email`, `phonenumber`, `passwords`, `dates`, `access`, `status`) VALUES(:first_name,:last_name,:email,:phonenumber,:passwords,:dates,:access,:status)";
	$pinsert_user = $connect -> prepare($insert_user);
	$pinsert_user -> execute($duba);
	if (!$pinsert_user) {
	        $data['error'] = true;
			$data['message'] = "Sorry, Account not created";
	}else{
			$select_users = "SELECT * FROM users where email= '$email' AND phonenumber = '$phonenumber' AND passwords='$passworda'";
			$prepare_users = $connect -> prepare($select_users);
			$prepare_users -> execute();
			$fetch_users = $prepare_users -> fetch(PDO::FETCH_ASSOC);
			$fullname = $fetch_users['first_name']." ".$fetch_users['last_name'];
	
		$_SESSION['user_no'] = $fetch_users['user_no'];
		$_SESSION['access'] = $fetch_users['access'];
		
		$_SESSION['fullname'] = $fullname;
		
	
         $data['message'] = 'Welcome '.$fullname;
         $data['location'] = 'client/';
	}

	}
}

}catch(PDOException $e){
		$data['error'] = true;
 		$data['message'] = $e->getMessage();
 	}

	//close connection
	$database->close();

	echo json_encode($data);
 ?>