<?php 
	session_start(); 

	if (!isset($_SESSION1['usernames'])) {
		$_SESSION1['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION1['usernames']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2><a class="active" href="varify.php">Varify it is reall you</a></h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION1['successs'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION1['success']; 
						unset($_SESSION1['successs']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION1['usernames'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION1['usernames']; ?></strong></p>
			<p> <a href="secure.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>
		
</body>
</html>