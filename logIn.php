 <?php
 	require "bd.php";
	include "checkUser.php";
 ?>
 <!DOCTYPE html>
<html>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="1.ico" rel="icon"  type="image/x-icon">
	<head>
	<title>Login</title>
	</head>
	<body>
	<div align="center" style="margin-top: 50px;">
		<h1 style="color:black;">Please, come in</h1>
			<form action="logIn.php" method="POST">
					<input type="email" name="email"  placeholder="Enter email" required>
				<br><br>
					<input type="password" name="password"  placeholder="Enter password" required>
				<br><br>
					<button type="submit" name="go" style="background-color:#ffffff; cursor:pointer;">Login</button>
				<br><br>
				<a href ="../index.php" style="color:black">Homepage</a>
			</form>
	</div>
  <?php
  	include "footer.php";
  ?>
	</body>
</html>
