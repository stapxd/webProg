<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Your project form</title>

	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">

</head>

<body>

	<?php
	include("header.php");
	?>

	<?php

	$formExist = true;

	$errors = [
	];
	$values = [
		'theme' => '',
		'pib' => '',
		'file' => '',
		'password1' => '',
		'password2' => '',
	];
	if (isset($_GET['reg'])) {

		if(empty($_GET['theme']) || !preg_match('/^[А-ЯЇІ]{1}[а-яїі]+(\s{1}[А-ЯЇІ]?[а-яїі]*)*$/u', $_GET['theme'])){
			$errors['theme'] = "Error theme";
		}
		else{
			$values['theme'] = htmlspecialchars($_GET['theme']);
		}

		if (empty($_GET['pib']) || !preg_match('/^([А-ЯЇІ]{1}[а-яїі]+\s?){3}$/u', $_GET['pib'])) {
			$errors['pib'] = "Error PIB";
		}
		else{
			$values['pib'] = htmlspecialchars($_GET['pib']);
		}

		if (empty($_GET['file']) || !preg_match('/[\.docx]{1}$/u', $_GET['file'])){
			$errors['file'] = "Add file";
		}

		if (empty($_GET['pass1']) || !preg_match('/^\d{6}$/', $_GET['pass1'])) {
			$errors['pass1'] = "Error first password";
		}
		else{
			$values['password1'] = htmlspecialchars($_GET['pass1']);
		}

		if (empty($_GET['pass2']) || !preg_match('/^\d{6}$/', $_GET['pass2'])) {
			$errors['pass2'] = "Error second password";
		}
		else if ($_GET['pass1'] != $_GET['pass2']){
			$errors['pass2'] = "Passwords are not the same";
		}
		else{
			$values['password2'] = htmlspecialchars($_GET['pass2']);
		}

		if (!$errors) {
			$formExist = false;

			
			$info = [];
			$info[] = $_GET['theme'];
			$info[] = $_GET['pib'];

			if (!empty($_GET['genre'])) {
				if ($_GET['genre'] == 'teoretiko') {
					$info[] = "Теоретико-пропагандистська стаття";
				}
				elseif ($_GET['genre'] == 'zagalnod') {
					$info[] = "Загальнодослідницька стаття";
				}
				elseif ($_GET['genre'] == 'practic') {
					$info[] = "Практико-аналітична стаття";
				}
			}

			$file = fopen('dataBase/data.txt', 'a');
			if($file){
				if(fputs($file, implode(';', $info)."\n")){

					$dataCorrectWrite = "Дані успішно записані";
				}
				else{
					$dataCorrectWrite = "Дані не змогли записатися, спробуйте ще раз";	
				}
				fclose($file);
			}
		}
	}
	?>


	<hr>


	<div class="formWrap">
		<div>

			<?php if ($formExist) { ?>

			<form id="form1" method="get">
				
				<label>Тема роботи:</label><br>
				<input type="text" id="theme" name="theme" value="<?= $values['theme'] ?>">
					<div style="color: red;"><?php if (!empty($errors['theme'])) {echo $errors['theme'];}?></div>
				<br>

				<label>ПІБ:</label><br>
				<input type="text" id="pib" name="pib" value="<?= $values['pib'] ?>">
					<div style="color: red;"><?php if (isset($errors['pib'])) {echo $errors['pib'];}?></div>
				<br>

				<label>Файл з статтею:</label><br>
				<input type="file" id="file" name="file">
					<div style="color: red;"><?php if (isset($errors['file'])) {echo $errors['file'];}?></div>
				<br>

				<label>Жанр статті:</label><br>
				<input type="radio" name="genre" value="teoretiko"><label>Теоретико-пропагандистська стаття</label><br>
				<input type="radio" name="genre" value="zagalnod"><label>Загальнодослідницька стаття</label><br>
				<input type="radio" name="genre" value="practic"><label>Практико-аналітична стаття</label><br>
				<br>

				<label>Пароль:</label><br>
				<input type="password" id="pass1" name="pass1" placeholder="******" value="<?= $values['password1'] ?>">
					<div style="color: red;"><?php if (isset($errors['pass1'])) {echo $errors['pass1'];}?></div>
				<br>

				<label>Повторіть пароль:</label><br>
				<input type="password" id="pass2" name="pass2" placeholder="******" value="<?= $values['password2'] ?>">
					<div style="color: red;"><?php if (isset($errors['pass2'])) {echo $errors['pass2'];}?></div>
				<br>

				<input type="reset" name="reset" value="Reset">
				<input type="submit" value="Send" id="reg" name="reg">


			</form>
			<?php }

			else {
				echo $dataCorrectWrite."<br>";
				echo "Дякую за співпрацю з нами!!!";
			}


			?>
		</div>
	</div>



			<?php 

			$file = fopen('dataBase/data.txt', 'r');
			
			$i = 0;
			while(!feof($file)){
				$str = trim(fgets($file));
				if(!$str) continue;

				$info = explode(';', $str);
				
				if((count($info)) == 2){
				echo "
					<div style=\"background-color: lightblue; margin-top: 20px;\">
						<p>Тема:".$info[0]."</p>
						<p>Ім'я:".$info[1]."</p>
					</div>
				";
				}

				else if ((count($info)) == 3) {
				echo "
					<div style=\"background-color: lightblue; margin-top: 20px;\">
						<p>Тема:".$info[0]."</p>
						<p>Ім'я:".$info[1]."</p>
						<p>Жанр:".$info[2]."</p>
					</div>
				";
				}
				//echo $i." :  ".$str."<br>";

				$i++;
			}

			fclose($file);


			?>




	<hr>



</body>

</html>