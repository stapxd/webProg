<?php
include("MySQLClasses/connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Your project form</title>

	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/stolenCars.css">

</head>

<body>

	<?php
	include("header.php");
	?>

	<div class="mainWrap">

		<div class="main">
				
			<div>
					
				<?php

				$page = 1;
				$limit = 10;

				if(isset($_REQUEST['page']) && is_numeric($_REQUEST['page']) && $_REQUEST['page'] > 0){
					$page = $_REQUEST['page'];
				}

				if(isset($_REQUEST['limit']) && is_numeric($_REQUEST['limit']) && $_REQUEST['limit'] > 9){
					$limit = $_REQUEST['limit'];
				}

				$limits = [10,20,30];
				?>

				<form>
					<select name="limit">
						<?php
							foreach($limits as $lim){
								// echo '<option>'.$lim.'</option>';
								echo '<option '.(($lim == $limit)?'selected':'').'>'.$lim.'</option>';
							}
						?>
					</select>
					<input type="submit" value="Ok">
				</form>

				<?php


				$dataBase = new MySQLDB([
						'host' => 'localhost',
						'user' => 'root',
						'password' => 'ipz_22server2442qAz',
						'db' => 'myserverweb',
				]);


				if($dataBase->isConnect()){

					$rows = $dataBase->query("SELECT * FROM `cars` ORDER BY `car_make` ASC LIMIT 0,".$limit);

					if($rows === false){
						echo "Error select";
					}
					else{

						?>

						<table>
		 	            	<tr>
		 	            		<th>Car Make</th>
		 	            		<th>Car Model</th>
		 	            		<th>Year</th>
		 	            		<th>Number plates</th>
		 	            		<th>VIN number</th>
		 	            	</tr>

	 	            	<?php
						foreach ($rows as $row){
			                echo '<tr><td>'.$row['car_make'].'</td><td>'.$row['car_model'].'</td><td>'.$row['year'].'</td><td>'.$row['number_plates'].'</td><td>'.$row['vin_number'].'</td></tr>';
			            }
		            }
		            ?>
		        	</table>
		        <?php
				}
				else{
					echo "Error DataBase connection";
				}


				// //phpinfo();
				// $connection = mysqli_connect("localhost", "root", "ipz_22server2442qAz");

				// if (!$connection) {
					
				// 	echo "You've got an ERROR";

				// }
				// else{
				// 		if (!mysqli_select_db($connection, 'myserverweb')) {
				// 	        echo "Error select DB";
				// 	    	} 
				// 	    	else {
				// 	        $r = mysqli_query($connection, "SELECT * FROM `cars`");
				// 	        if (!$r) {
				// 	            echo "Error query";
				// 	        } else {
					        
					        
					            
				// 	            <table>

				// 	            	<tr>
				// 	            		<th>Car Make</th>
				// 	            		<th>Car Model</th>
				// 	            		<th>Year</th>
				// 	            		<th>Number plates</th>
				// 	            		<th>VIN number</th>
				// 	            	</tr>

					            

				// 	            while ($row = mysqli_fetch_assoc($r)) {
				// 	                echo '<tr><td>'.$row['car_make'].'</td><td>'.$row['car_model'].'</td><td>'.$row['year'].'</td><td>'.$row['number_plates'].'</td><td>'.$row['vin_number'].'</td></tr>';
				// 	            }
					            
				// 	           	</table>
				
				// 	            mysqli_free_result($r);
				// 	        }

				// 	    }
				// 	}	
				//     mysqli_close($connection);



				?>


			</div>

		</div>
	</div>

	<?php
	include("includes/footer.php");
	?>


</body>

</html>