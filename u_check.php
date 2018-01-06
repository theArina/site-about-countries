<?php
include "bd.php";
	if(isset($_POST['go']))
	{
		$email = trim($_POST[email]);
		$password =  md5($_POST[password]);

		if(!empty($password))
		{
      $query      = mysql_query("SELECT * FROM `1` WHERE email = '$email' AND password = '$password'");

      if (mysql_num_rows($query)>0)
			{
				echo ('You have successfully authorized');

				setcookie("email", $email, time() + 3600 * 24 * 190);
        setcookie("username", $username, time() + 3600 * 24 * 190);
	      setcookie("password", $password, time() + 3600 * 24 * 190);

				echo "<META HTTP-EQUIV='Refresh' Content='0, URL=index.php'>";
			}
		}else{
			echo ('This email is already used');
		}
	}
?>
