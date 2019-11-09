<?php 
                $servername= "localhost";
				$dBusername= "id11467639_jaleel";
				$dBPassword="4812209";
				$dBName ="id11467639_con";

						$conn = mysqli_connect ($servername,$dBusername,$dBPassword,$dBName);

							   if(! $conn ) {
									die("Could not connect: " .mysqli_connect_error());
								 }
								 echo "Connected successfully";
								 mysqli_close($conn);

?>

