<?php

 if (isset($_POST['signupbtn'])){
	 
	 require'config.php';
	   
	 $usernmae = $_POST['uid'];
	 $email = $_POST['mail'];
	 $password = $_POST['pwd'];
	 $passwordrepeat = $_POST['pwd-repeat'];
	 

	 if  (empty($usernmae) ||empty($email) || empty($password) ||empty($passwordrepeat)) {
		 
		 header("location: ../signup.php?error=emptyfields&email="."&email=".$email);
		 exit();
	 }
	 
	 
	 else if (!filter_var ($email, FILTER_VALIDATE_EMAIL)) {
		 
		  header("location: ../signup.php?error=invalidmail");
		 exit ();
		 
	 }
	 
	 else if (!preg_match ("/^[a-zA-Z0-9]*$/",$usernmae)) {
		 
		  header("location: ../signup.php?error=invaliduid&mail=".$email );
		 exit ();
		 
	 }
	 
	  else if ( $password !== $passwordrepeat) {
		  
		 
		  header("location: ../signup.php?error=passwordcheckuid=".$email );
		 exit ();  
		  
	  }
	   
	  
	 
	 
	 else {
		 
	 $sql= "INSERT INTO users (UserName, passwords, EmailAddress) values (?,?,?)"; 
	 $stmt=mysqli_stmt_init($conn);
     if (!mysqli_stmt_prepare ($stmt,$sql)){
     header ("location:../signup.php?error=sqlerror");
     exit();	 	 
	          }
  else {   
        //password is hashed here
       $hashpwd = password_hash ($password,PASSWORD_DEFAULT);
  
	  mysqli_stmt_bind_param ($stmt,"sss", $usernmae,$hashpwd,$emailusers);
	  mysqli_stmt_execute ($stmt);
	  
	  header ("location:../signup.php? signup=success");
	 
	  exit();
  }
  
  }
	mysqli_stmt_close ($stmt);
	mysqli_close ($conn);
  
 } 
	 
	 
	 
	 
	 else {
		 
		   
	  header ("location:../signup.php" );
	  exit();
		 
		 
	 }
