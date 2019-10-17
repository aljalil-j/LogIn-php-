<!DOCTYPE html>
<html lang="en">
<title>TWORM</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="title" content="Scriptcase Features | PHP code generator | Report and Form Builder" />
	<link rel="shortcut icon" type="image/x-icon" href="https://scriptcase-suporte.kayakocdn.com/favicon.ico">
			<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
		<meta name="keywords" content="form builder, web applications, php generator, php builder, php form builder, php form generator, php mysql generator, form generator, generate php, rad, rapid application development, report builder, development tool, code generator, generate forms, generate forms and reports, generate form, forms and reports, php, generator, generate, mysql, mysql support, php mysql, reports, forms, charts, database" />
	<meta name="author" content="ScriptCase - www.scriptcase.net" />
	<meta name="copyright" content="ScriptCase Code Generator - www.scriptcase.net" />
	<meta name="google-site-verification" content="xQeTQK_W6dxsQWGKuopTxHVIfAm_EJ6y2D8LoID0MWI" />
	<meta http-equiv="content-language" content="en_us" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />	
	<meta name="viewport" content="width=1200, initial-scale=0, maximum-scale=1">
<script type="text/javascript">
	var sc_pathToTB = '../lib/js/jquery_plugins/thickbox/';
	// var blackfriday = false;
</script>

<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 0px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 12px; 
  line-height: 12px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 20px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>

<body>
<div class="header">
<a href="#default" class="logo">True Word Ministries Outreach</a>
</div>
<div class="header">

  
  <div class="header-right">
    <a class="active" href="try.html">Home</a>
    <a href="contact.html">Contact</a>
    <a href="blog.html">Blog</a>
	<a href="ministry.html">Ministries</a>
	</div>
	<div class="header-right">
	
  </div>
</div>



</body>
</html>

<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>



<!-- Page content -->
<div class="w3-content" style="max-width:8000px;margin-top:46px">
 
  
 <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="h.png" style="width:40%">
    <div class="w3-display-bottommiddle w3-container w3-text-black w3-padding-32 w3-hide-small">
     
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="i.jpg" style="width:30%">
    <div class="w3-display-bottommiddle w3-container w3-text-black w3-padding-32 w3-hide-small">
       
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="m.jpg" style="width:30%">
    <div class="w3-display-bottommiddle w3-container w3-text-black w3-padding-32 w3-hide-small">
     
    </div>
  </div>
  <!-- The mission -->
  <div class="w3-white" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">Mission </h2>
      <p class="w3-opacity w3-center"><i>Luke4:18-19!</i></p><br>
      <p class="w3-opacity w3-opacity"><i>Luke 4:18-19 New International Version (NIV)
      18 “The Spirit of the Lord is on me,
    because he has anointed me
    to proclaim good news to the poor.
        He has sent me to proclaim freedom for the prisoners
           and recovery of sight for the blind,
           to set the oppressed free,
           19     to proclaim the year of the Lord’s favor.” </p>
</div>
<!-- The Tour Section -->
      <div class="w3-gray" id="tour">
       <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
       <h2 class="w3-wide w3-center">Recent News & Post</h2>
       <p class="w3-opacity w3-center"><i>Remember Jesus Loves You!</i></p><br>
	   
	   
	   
	   

</div>
<!-- The Prayer request  -->
  <div class="w3-white" id="tour">
    <div class="w3-container w3-content w3-padding-34" style="max-width:500px">
	
      <h2 class="w3-wide w3-center">Prayer Request</h2>
      <p class="w3-opacity w3-center"><i>Remember Jesus Loves You!</i></p><br>
	  
	  
					</div>
					
					
				

<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

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
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";

echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>









<!-- Footer -->
<footer class="w3-container w3-padding-65 w3-center w3-opacity w3-black w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
