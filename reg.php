<?php
	include "bd.php";
	include "save_user.php";
?>
<html>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="1.ico" rel="icon"  type="image/x-icon">
    <head>
    <title>Check in</title>
    </head>
    <body>
	<div align="center" style="margin-top: 20px;">
		<h1 style="color:black;">Sign up</h1>
			<form action="reg.php" method="POST">
					<input type="email" name="email" placeholder="Enter email" required>
				<br><br>
					<input type="text" name="username"  placeholder="Enter username" required>
				<br><br>
					<input type="password" name="password" placeholder="Enter password" required>
				<br><br>
					<button type="submit" name="go" style="background-color:#ffffff; cursor:pointer;">Sign up</button>
				<br><br>
				<a href ="../index.php" style="color:black">Homepage</a>
			</form>
	</div>
		<footer>
		Copyright Arina M. 2017
		</footer>
    </body>
</html>
