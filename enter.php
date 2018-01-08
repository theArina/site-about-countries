 <?php
 	require "bd.php";
	include "u_check.php";
	// if (empty($_SESSION['login']) or empty($_SESSION['id']))
// {
	// echo "You are the guest<br>";
// }
// else {
// echo "You are:".$_SESSION['login']."<br>";
// }
 ?>
<html>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="1.ico" rel="icon"  type="image/x-icon">
	<head>
	<title>Login</title>
	</head>
	<body>
	<div align="center" style="margin-top: 50px;">
		<h1 style="color:black;">Please, come in</h1>
			<form action="enter.php" method="POST">
					<input type="email" name="email"  placeholder="Enter email" required>
				<br><br>
					<input type="password" name="password"  placeholder="Enter password" required>
				<br><br>
					<button type="submit" name="go" style="background-color:#ffffff; cursor:pointer;">Login</button>
				<br><br>
				<a href ="../index.php" style="color:black">Homepage</a>
			</form>
	</div>
		<footer>
		Copyright Arina M. 2017
		</footer>
	</body>
</html>
