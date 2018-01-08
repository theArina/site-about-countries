<?php
  include "bd.php";
	if(isset($_POST['go']))
	{
		$email = trim($_POST[email]);
		$password =  md5($_POST[password]);

		if(!empty($password))
		{
			$query = mysql_query("SELECT * FROM `1` WHERE email = '$email' AND password = '$password'");

      if (mysql_num_rows($query)>0)
			{
				$username = mysql_query("SELECT username FROM `1` WHERE email = '$email'");
				echo ($query);
				session_start();
				$_SESSION['email'] = $email;
				//$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;

				echo ('You have successfully authorized as $username');
				//echo "<META HTTP-EQUIV='Refresh' Content='0, URL=index.php'>";
			}else{
			echo ('Wrong login or password');
		  }
	  }
	}
?>
