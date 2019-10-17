
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
<a href="#default" class="logo">JA</a>
</div>

<div class="header">

</div>
<div class="header">

  
  <div class="header-right">
    <a class="active" href="login.php">Home</a>
    <a href="signup.php">SIGNUP</a>
 </div>
</div> </br> </br></br>







<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "login.inc.php" method = "post">
                  <label>E-MAIL ADDRESS  :   </label><input type = "text" name = "username" class = "textbox"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "text" /><br/><br />
                  <input type = "submit" value = " Login "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px">
			   <?php
			   //echo ($error);
			   ?>
			   </div>
					
            </div>
				
         </div>
		 
      </div> </br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<?php
date_default_timezone_set("America/New_York");
echo   date("h:i:sa"). "<br>". "<br>";
?>
	  <?php

echo   date("Y-m-d") . "<br>";


?>



   </body>
  <footer>
  <p>Posted by: JA</p>
  <p>Contact information: <a href="mailto:JALEELATKINS@HOTMAIL.com">JALEELATKINS@HOTMAIL.com</a>.</p>
  
</footer>
</html>

