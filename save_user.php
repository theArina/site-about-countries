<?php
	include 'bd.php';
	if(isset($_POST['go']))
	{
		$email = trim($_POST[email]);
		$username = $_POST[username];
		$password = md5($_POST[password]);

		if(!empty($password))
		{
			$data = mysql_query("SELECT * FROM `1` WHERE email = '$email'");

			if( mysql_num_rows($data) == 0)
			{
				$query = mysql_query("INSERT INTO `1` (`email`,`username`,`password`)
				VALUES('$email', '$username', '$password')") or die(mysql_error());

				setcookie("email", $email, time() + 3600 * 24 * 190);
				setcookie("username", $username, time() + 3600 * 24 * 190);
	      setcookie("password", $password, time() + 3600 * 24 * 190);

				//echo "<META HTTP-EQUIV='Refresh' Content='0, URL=index.php'>";
				echo ('You have successfully authorized');
			}
		}else{
			echo ('This email is already used');
		}
	}
?>
