<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Your project form</title>

	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/data.css">

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

				// if (!$connection) {
					
				// 	echo "BAD";

				// }



				?>


			</div>

		</div>
	</div>

	<?php
	include("includes/footer.php");
	?>


</body>

</html>