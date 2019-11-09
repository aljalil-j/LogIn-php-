<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$servername= "localhost";
				$dBusername= "id11467639_jaleel";
				$dBPassword="4812209";
				$dBName ="id11467639_con";

				$db = mysqli_connect ($servername,$dBusername,$dBPassword,$dBName);
				if(! $db ) {
							   die('Could not connect: ' . mysqli_error());
							}
							
							
							if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM security WHERE UserName='$username' AND Password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['usernames'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: varify.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
		}