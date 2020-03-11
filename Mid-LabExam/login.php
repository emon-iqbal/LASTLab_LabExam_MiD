<?php
	session_start();	  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login_page</title>
</head>
<body>

	<h1>
		<?php if(isset($_SESSION['pass'])) ?>
	</h1>
	<form method="POST" action="logCheck.php">
	<fieldset>
		<legend><h1><b>LOGIN</b></h1></legend>
			User ID</br><input type="number" name="uid" value=""></br>
			Password</br><input type="password" name="password" value=""/></br>______________</br>
			<td>
				</br><input type="submit" name="submit" value="Login"><a href="registration.php">Register</a>	
			</td>
	</fieldset>
	</form>
</body>
</html>