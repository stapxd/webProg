<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Your project form</title>

	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">

	<script type="text/javascript" src="js/formJavaS.js"></script>

</head>

<body>

	<?php
	include("header.php");
	?>


	<hr>


	<div class="formWrap">
		<div>
			<form id="form1">
				
				<label>Тема роботи:</label><br>
				<input type="text" id="theme">
				<br>

				<label>ПІБ:</label><br>
				<input type="text" id="pib">
				<br>

				<label>Файл з статтею:</label><br>
				<input type="file" id="file">
				<br>

				<label>Жанр статті:</label><br>
				<input type="radio" name="genre" value="teoretiko"><label>Теоретико-пропагандистська стаття</label><br>
				<input type="radio" name="genre" value="zagalnod"><label>Загальнодослідницька стаття</label><br>
				<input type="radio" name="genre" value="practic"><label>Практико-аналітична стаття</label><br>
				<br>

				<label>Пароль:</label><br>
				<input type="password" id="pass1" placeholder="******">
				<br>

				<label>Повторіть пароль:</label><br>
				<input type="password" id="pass2" placeholder="******">
				<br>

				<input type="reset" name="reset" value="Reset">
				<input type="button" value="Send" id="reg">


			</form>
		</div>
	</div>


	<hr>



</body>

</html>