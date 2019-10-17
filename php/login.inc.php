
<?php
$myusername = $mypassword = "";
$sql = $result = $row = $active = $count = $myusername = $mypassword = $dB = $sql = "";

   include("config.php"); 
   session_start();
   
   
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Username"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Username)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
      if (empty($_POST["password"])) {
    $mypassword = "";
  } else {
   $mypassword = test_input($_POST["password"]);
  }
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and password = '$mypassword'";
	
		
	 

      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count ==1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
	  
	  
	  
	 $sql= "insert into login ". " (emailusers,pwusers,) ". " values (?,?"; 
	 $stmt=mysqli_stmt_init($conn);
     if (! mysqli_stmt_prepare ($stmt,$sql)){
     header ("location:../signup.php?error=sqlerror");
     exit();	 
	 
  }
  else {
	  mysqli_stmt_bind_param ($stmt,"ss",$emailusers,$pwusers);
	  mysqli_stmt_execute ($stmt);
  }
  
	  
	  
   }
   function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
   }
   
   
   
   
   
   
?>