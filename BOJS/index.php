<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Bureau of Justice Statistics</title>
	<link rel="stylesheet" type="text/css" href="css/indexStyle1.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
</head>

<body>

	<?php
	include("header.php");
	?>


	<div class="startOfMainWrap">
		<div class="mainHead">
			<h2>Бюро Кримінальної Статистики</h2>

			<p>Ваше джерело кримінальної статистики</p>

			<a href="aboutUs.php" class="aButton">
				<div class="button">
					<p>Більше про БКС</p>
				</div>
			</a>

		</div>
	</div>


	<div class="mainWrap">
		
		<div class="trippleInfo">
			<div>
				
				<h2>Нові релізи</h2>

				<ul>
					<li><a href="">Поточні пропозиції на 2023 фінансовий рік</a></li>
					<li><a href="">Рецидив злочинності жінок, звільнених з державної в'язниці, 2012–2017</a></li>
					<li><a href="">Роботи, про які повідомляють ув'язнені, 2016</a></li>
					<li><a href="">Історія арешту осіб, допущених до державної в'язниці у 2009 та 2014 роках</a></li>
				</ul>

				<a href="" class="aButton">
					<div class="button">
						<p>Більше нових релізів</p>
					</div>
				</a>

			</div>

			<div>
				<h3>В'язниці в Індійській країні, 2022 рік</h3>
				<p>Цей звіт містить статистичні дані про демографічні характеристики, найбільш серйозні злочини та статус судимості...</p>
				<a href="">Читати далі</a>
			</div>

			<div>
				<h3>Національна система звітності про інциденти</h3>
				<p>У січні 2021 року NIBRS став національним стандартом звітності правоохоронних органів про злочинність. Перехід до NIBRS значно покращує дані про злочини, відомі правоохоронним органам, надаючи детальну інформацію про характеристики злочинів, жертв і заарештованих.</p>
				<a href="">Дізнайтеся більше про національну систему звітування про інциденти</a>
			</div>

		</div>

	</div>

	<div class="mainWrap2" >

		<div class="main2" >
				
				<h2>Загальні витрати на систему правосуддя на душу населення для державних і місцевих органів влади, 2019</h2>

				<img src="images/states.png" style="width:900px; height: 690px;">

				<p>The new <u>Justice Expenditure and Employment Tool (JEET)</u> allows users to explore expenditures, employment, and payroll data for multiple categories—total justice system, police protection, judicial and legal, and corrections—at different levels of government, including national, state, county, and city.<p>

				<p>Data Sources:</p>

				<ul>
					<li>U.S. Census Bureau, Population Estimates Program, API 2021</li>
					<li>U.S. Census Bureau, Annual Survey of Public Employment and Payroll (ASPEP), API 2021</li>
					<li>U.S. Census Bureau, Annual Survey of State and Local Government Finances (ASSLGF), API 2021</li>
				</ul>
		</div>
	
	</div>

	<?php
	include("includes/footer.php");
	?>


</body>
</html>