<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>About BOJS</title>

	
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/articles.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">

</head>

<body>

	<?php
	include("header.php");
	?>

	<div class="startOfMainWrap">
		<div class="mainHead">
			<h1>Написання статтей</h1>

		</div>
	</div>


	<div class="mainWrap">

		<div class="main">
				
			<div>

				<h3>Вітаємо вас на сторінці статтей, тут ви можете продивитися корисну інформацію щодо цього.</h3>

				<p>Якщо ви тут, то ви, певно, зацікавлені у відправці своєї роботи нам для розміщення у бібліотеках та на сайті.</p>

				<p>Умови дуже прості</p>

				<ul>
					<li>Спершу ви відсилаєте свою роботу на пошту bjs@gmail.com. Там наші працівники оцінюють статті.</li>
					<li>Якщо ваша стаття відповідає критеріям та темам нашого сайту, то ви отримаєте пароль, за допомогою якого зможете заповнити форму та відправити вашу роботу на сайт.</li>
				</ul>

				<p>Важливе коректне заповнення форми, інакше ми не зможемо розпізнати вас.</p>

				<a href="form.php" class="aButton">
					<div class="button">
						<p>Тицяйте сюди для заповнення форми.</p>
					</div>
				</a>

				<a href="form2.php" class="aButton">
					<div class="button">
						<p>Тицяйте сюди для заповнення форми (php).</p>
					</div>
				</a>

				<a href="resultOfReading.php" class="aButton">
					<div class="button">
						<p>Відправлені роботи</p>
					</div>
				</a>



				<p>Бажаємо успіху та дякуємо за вашу роботу!!!</p>

			</div>

			<?php
			include("includes/publicationMenu.php");
			?>

		</div>
	</div>


	<?php
	include("includes/footer.php");
	?>

</body>

</html>