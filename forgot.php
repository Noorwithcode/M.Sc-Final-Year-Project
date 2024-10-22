<?php
           require "widgets/header.php";
				$con=$conn;
				
				if($_POST){
					$email = $_POST['email'];
					
					$selectquery = mysqli_query($conn,"select * from login where email ='{$email}'") or die(mysqli_error($conn));
					
					$count = mysqli_num_rows($selectquery);
					$row = mysqli_fetch_array($selectquery);

					if ($count > 0) {
						?>

						<h1><?php echo "Your Password is " . $row['password'] . " !"; ?> </h1><hr>	

					<?php
					}else {
					?>
						<h3><?php echo "Email Not Found !"; ?> </h3><hr>	
					<?php
					}
				}

			?>