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

				//phpinfo();
				$connection = mysqli_connect("localhost", "root", "ipz_22server2442qAz");

				if (!$connection) {
					
					echo "You've got an ERROR";

				}
				else{
						if (!mysqli_select_db($connection, 'myserverweb')) {
					        echo "Error select DB";
					    	} 
					    	else {
					        $r = mysqli_query($connection, "SELECT * FROM `cars`");
					        if (!$r) {
					            echo "Error query";
					        } else {
					        
					        ?>
					            
					            <table border="1" width="100%"><tr><th>Car Make</th><th>Car Model</th><th>Year</th><th>Number plates</th><th>VIN number</th></tr>
					            <?php

					            while ($row = mysqli_fetch_assoc($r)) {
					                echo '<tr><td>'.$row['car_make'].'</td><td>'.$row['car_model'].'</td><td>'.$row['year'].'</td><td>'.$row['number_plates'].'</td><td>'.$row['vin_number'].'</td></tr>';
					            }

					            echo '</table>';

					            mysqli_free_result($r);
					        }

					    }
					}	
				    mysqli_close($connection);



				?>


			</div>

		</div>
	</div>

	<?php
	include("includes/footer.php");
	?>


</body>

</html>