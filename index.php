<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
<head>
<link href="pic/1.ico" rel="icon"  type="image/x-icon">
<title>MySite</title>
</head>
<header>
   <h1>Ten Happiest Countries In The World</h1>
</header>
<body>
<div class="semiopacity">
	<table border="0" class="main">
<tbody>
  	<td <class="news">

				<table class="table" cellspacing="5">

		<tr>
				<td class="item">
			<h2>Norway</h2>
			<img class src="pic/norway700.jpg">
			Capital - Oslo. Area: 385,178. Population: 2017 estimate - 5,267,146.<br>
			<a href="countries/1_norway.php">learn more</a>
			</td>
				<td class="item">
			<h2>Denmark</h2>
			<img class src="pic/denmark.jpg">
			Capital - Copenhagen. Area: 42,931. Population: January 2017 estimate - 5,748,769.<br>
			<a href="countries/2_denmark.php">learn more</a>
			</td>
				<td class="item">
			<h2>Iceland</h2>
			<img class src="pic/reykjavik-city-view-XL.jpg">
			Capital - Reykjavik. Area: 102,775. Population: 1 January 2016 estimate - 332,529.<br>
			<a href="countries/3_iceland.php">learn more</a>
			</td>
				<td class="item">
			<h2>Switzerland</h2>
			<img class src="pic/bern_during_autum_aare_river.jpg">
			Capital - Bern. Area: 41,285. Population: 2016 estimate - 8,401,120.<br>
			<a href="countries/4_switzerland.php">learn more</a>
			</td>
				<td class="item">
			<h2>Finland</h2>
			<img class src="pic/Finland.jpg">
			Capital - Helsinki. Area: 338,424. Population: July 2016 estimate - 5,488,543.<br>
			<a href="countries/5_finland.php">learn more</a>
			</td>
		</tr>
		</table>
			<table border="0" class="main">
<tbody>
  	<td <td class="news">

				<table class="table" cellspacing="5">

		<tr>
				<td class="item">
			<h2>Netherlands</h2>
			<img class src="pic/images.jpg">
			Capital - Amsterdam. Area: 41,543. Population: 2017 estimate 17,100,475.<br>
			<a href="countries/6_netherlands.php">learn more</a>
			</td>
				<td class="item">
			<h2>Canada</h2>
			<img class src="pic/Amazing-Canada-.jpg">
			Capital - Ottawa. Area: 9,984,670. Population: 2016 census 35,151,728.<br>
			<a href="countries/7_canada.php">learn more</a>
			</td>
				<td class="item">
			<h2>New Zealand</h2>
			<img class src="pic/rewrite_new-zealand-2.jpg">
			Capital - Wellington. Area: 268,021. Population: 2017 estimate 4,797,320.<br>
			<a href="countries/8_newZealand.php">learn more</a>
			</td>
				<td class="item">
			<h2>Sweden</h2>
			<img class src="pic/sweden.jpg">
			Capital - Stockholm. Area: 450,295. Population: 30 April 2017 census 10,032,357.<br>
			<a href="countries/9_sweden.php">learn more</a>
			</td>
				<td class="item">
			<h2>Australia</h2>
			<img class src="pic/australia.jpg">
			Capital - Canberra. Area: 7,692,024. Population: 2017 estimate 24,580,100.<br>
			<a href="countries/10_australia.php">learn more</a>
			</td>
		</tr>
		</table>
		<br><br><br>
	<div align="center">
			 <a href='logIn.php'>Login</a>
		 <br><br>or<br><br>
     <a href='reg.php'>Registration</a>
		 <p align="right" style="margin-right: 20px;">
       <a href='secretPage.php'>Secret page</a></p>
	</div>
  <?php
  	include "footer.php";
  ?>
		</div>
</body>
</html>
