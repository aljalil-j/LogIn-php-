<?php 
   
   require "login.php";

?>

     <main>
	 <div class ="wapper-main">
	 <section class="section-default" 
	 
	 
	 <?php 
	  if (isset($_session['userId'])){
		  
		  echo '<p> YOU Are Logged In </p>';
	  }
	 
	 else {
		  echo '<p> YOU Are Logged out </p>';
		  
	 }
	 
	 ?>
		


		
      </section>  
    </main>


 <?php 
 require "footer.php";

?>