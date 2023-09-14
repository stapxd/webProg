<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Your project form</title>

	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/resultOfReading.css">

</head>

<body>

	<?php
	include("header.php");
	?>

	<div class="mainWrap">

		<div class="main">
				
			<div>

			<?php 

				$file = fopen('dataBase/data.txt', 'r');

				$i = 0;
				while(!feof($file)){
					$str = trim(fgets($file));
					if(!$str) continue;

					$info = explode(';', $str);
					
					if((count($info)) == 2){
					echo "
						<div>
							<p>Тема:".$info[0]."</p>
							<p>Ім'я:".$info[1]."</p>
						</div>
					";
					}

					else if ((count($info)) == 3) {
					echo "
						<div>
							<p>Тема:".$info[0]."</p>
							<p>Ім'я:".$info[1]."</p>
							<p>Жанр:".$info[2]."</p>
						</div>
					";
					}
					

					$i++;
				}

				fclose($file);


			?>


			</div>

		</div>
	</div>

	<?php
	include("includes/footer.php");
	?>


</body>

</html>