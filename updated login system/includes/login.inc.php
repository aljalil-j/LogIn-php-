<?php

 if (isset($_POST['loginbtn'])){
	 
      require'config.php';
	 
	 $mailuid = $_POST[ 'mailuid'];
	 $password = $_POST[ 'pwd'];
	 
	 
	 
	 if (empty ($mailuid) || empty ($password) ) {
		 header ("location:../index.php?error=emptyfields" );
	    exit();
		 
	 }
	 
	 
	 
	 
	 else {
		 
		 $sql = "SELECT * FROM users WHERE UserName =? OR EmailAddress=?; ";
		 $stmt = mysqli_stmt_init ($conn);
		 
		   if (!mysqli_stmt_prepare ($stmt,$sql )){
			     header ("location:../index.php?error=sqlerror");
	             exit();
			   
			   
		   } 
		 else {
			 
			 mysqli_stmt_bind_param ($stmt,"ss", $mailuid, $mailuid);
			 mysqli_stmt_execute($stmt);
			 $result = mysqli_stmt_get_result($stmt);
			 
			 if($row = mysql_fetch_assoc($result) ) {
				 
				 $pwdcheck = password_verify ($password, $row['passwords']);
			      }
				  
			    if ($pwdcheck == false ) {
					 header ("location:../index.php?error=wrongpassword");
	               exit();
				}	  
				else if($pwdcheck == true){
					
				session_start();
				$_session['userId'] = $row['ID'];
				$_session['useruId'] = $row['UserName'];
				
				 header ("location:../index.php?login=sucess");
	             exit();
				
				}
					  
		 else {
			   
			      header ("location:../index.php?error=nouser");
	             exit();
			 
		 }
		       }
		
		 
	 }
	 
	 
	 
	 
 }
 
 	 
	 else {	 
		  header ("location:../index.php" );
	  exit();
		  }
 
	 