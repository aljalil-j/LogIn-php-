   <?php 
   session_start();
   ?>
   
   <!DOCTYPE html>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<!-- Add icon library -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
						<style>
					   .bg-img {
					  /* The image used */
					  background-image: url("nature.jpg");

					  min-height: 580px;

					  /* Center and scale the image nicely */
					  background-position: ;
					  background-repeat: no-repeat;
					  background-size: cover;
					  position: relative;
					}
             </style>
          <html>
       <head>
	   
          <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
						body {font-family: Arial, Helvetica, sans-serif;}
						form {border: 3px solid black;  width: 30%; background-color: white;}

						input[type=text], input[type=password] {
						  width: 70%;
						  padding: 12px 20px;
						  margin: 8px 0;
						  display: inline-block;
						  border: 1px solid #ccc;
						  box-sizing: border-box;
						}

						button {
						  background-color: #4CAF50;
						  color: white;
						  padding: 14px 20px;
						  margin: 8px 0;
						  border: none;
						  cursor: pointer;
						  width: 20%;
						}

						button:hover {
						  opacity: 0.8;
						}

						.cancelbtn {
						  width: auto;
						  padding: 10px 18px;
						  background-color: #f44336;
						}

						.imgcontainer {
						  text-align: center;
						  margin: 24px 0 12px 0;
						}

						img.avatar {
						  width: 40%;
						  border-radius: 50%;
						}

						.container {
						  padding: 1px;
						}

						span.psw {
						  float: right;
						  padding-top: 8px;
						}

						/* Change styles for span and cancel button on extra small screens */
						@media screen and (max-width: 100px) {
						  span.psw {
							 display: block;
							 float: none;
						  }
						  .cancelbtn {
							 width: 50%;
						  }
						}
                         </style>
                   <header>
			    <nav>
							<div class="header"></br>
								  <img src="jlogo.jpg" alt ="logo" style="width:50px"> 
								  </div>

								  <div class="header">

								  </div>
								  <div class="header">

		  
								 <div class="header-right">
								<a href="index.php"> <i class="glyphicon glyphicon-home"></i>HOME</a>
								<a href="signup.php"><i class="glyphicon glyphicon-user"></i>SIGNUP</a>
								 
                                </div>
				 </nav>
	         
          </head>
              
     <body>
                       <div class="bg-img">
                       <h2><font color="red">Login Form</font></h2>
			<main>		   
                    <div id="page-wrapper">
 
	                 <section id="region-main" class="col-12">

							   <div align = "center">
							   
								 <form method="POST" action="includes/login.inc.php"> 
										 <div class="imgcontainer">
										 <img src="avatar2.png" alt ="logo" style="width:100px">  
										  </div>

										   
											<label for="uname"><b>Username</b></label>
											<input type="text" placeholder="Enter Username" name="mailuid" required></br>

											<label for="psw"><b>Password</b></label>
											<input type="password" placeholder="Enter Password" name="pwd" required></br>
							
											<button type="submit" class="loginbtn">Login </button>
											<label>
											<input type="checkbox" checked="checked" name="remember"> Remember me</br>
											 <span class="psw">Forgot <a href="#">password?</a></span>		 
											</label></br></br></br>
                         
						                       </div>
                                       </form>
						       </section> 
			               </div>
					    </div>
           </main>

       </body>
	 </header>    
</html>

