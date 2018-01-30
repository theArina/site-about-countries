<?php
  include 'bd.php';
	if(isset($_POST['go']))
	{
		$email = trim($_POST[email]);
		$password =  md5($_POST[password]);

		if(!empty($password))
		{
			$query = mysql_query("SELECT * FROM `1` WHERE email = '$email'");
      $data = mysql_fetch_assoc($query);

      if($data[password] === $password)
      {
				$_SESSION['email'] = $email;
				$_SESSION[username] = $data[username];
				$_SESSION['password'] = $password;

				echo "<br><center><p style='color: black;'>You have successfully authorized as $_SESSION[username]</p></center>";
			}else{
			echo "<br><center>Wrong login or password</center>";
		  }
	  }
	}
?>
