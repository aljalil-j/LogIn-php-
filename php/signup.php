<!DOCTYPE html>
<html lang="en">
<title>Sign Up Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="title" content="Scriptcase Features | PHP code generator | Report and Form Builder" />
	
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
<a href="#default" class="logo">JA</a>
</div>
<div class="header">
 
  <div class="header-right">
    <a class="active" href="login.php">Home</a>
    
	</div>
</div></br></br></br></br>


 <main>
	 <div id="page-wrapper">
 
	 <section id="region-main" class="col-12">

      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
    <h1>SIGN UP HERE</h1>
<form method="post" action="<signup.inc.php">  
  <input type="textbox" name="name" value="" placeholder = "NAME" >
 
  <br>
  <input type="textbox" name="email" value="" placeholder = "E-mail" >
 
  <br>
  
  <input type ="password" name"pwd" value ="" placeholder = "Password:">
 <input type ="password" name"pwd-repeat"value ="" placeholder = "Repeat Password"></br>
  <br>
  Gender:
  <input type="radio" name="gender"  value="female">Female
  <input type="radio" name="gender" value="male">Male
 
  <br><br>
  <input type="submit" name="signup-submit" value="Submit">  
   </form>
 </section>  
   </div>
   </div>
   </div>
   </div>
  </main>
	 
       
	  
	  
	  

     