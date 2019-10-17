<?php 

				$servername= "localhost";
				$dBusername= "root";
				$dBPassword="";
				$dBName ="loginsystem";

						$conn = mysqli_connect ($servername,$dBusername,$dBPassword,$dBName);

							   if(! $conn ) {
									die('Could not connect: ' . mysqli_error());
								 }
								 echo 'Connected successfully';
								 mysqli_close($conn);

?>

