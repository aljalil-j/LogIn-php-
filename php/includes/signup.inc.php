<?php

include("config.php"); 
   session_start();

// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = $stmt = "";
 
 if (isset($_post['signup-submit'])){
	 
	 $usernmae = $_post['name'];
	 $email = $_post['email'];
	 $password = $_post['pwd'];
	 $passwordrepeat = $_POST['pwd-repeat'];
	 
include("config.php"); 
   session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  

  
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
	  
	  
    $gender = test_input($_POST["gender"]);
	
	
  } if($password !== $repeatpassword){
	  
	 header("location:../login.php?error=passwordcheck&name=".$username."$mail=".$email);
     exit();	 
	    
  }  


  
	 $sql= "insert into login (uidUsers,emailusers,pwusers,Gender)values (?,?,?,?"; 
	 $stmt=mysqli_stmt_init($conn);
     if (! mysqli_stmt_prepare ($stmt,$sql)){
     header ("location:../signup.php?error=sqlerror");
     exit();	 
	 
  }
  else {   
        //password is hashed here
       $hashpwd = password_hash ($password,PASSWORD_DEFAULT);
  
	  mysqli_stmt_bind_param ($stmt,"ssss",$uidUsers,$emailusers,$hashpwd,$gender);
	  mysqli_stmt_execute ($stmt);
  }
  
  }

 }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
