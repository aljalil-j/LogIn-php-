
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

<img src="jlogo.jpg" alt ="logo" style="width:50px"> 
<div class="header-right">
<a class="active" href="login.php">LOG BACK IN</a> 
</div>
 
</div>



             <center > <p> You Are Logged out! </p>  </center >
			 
			 
			 
			 
			 
			 
			 
			 
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
  