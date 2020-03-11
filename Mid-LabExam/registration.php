<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION_page</title>
</head>
<body>
	
	<form method="POST" action="regCheck.php">
	<fieldset>
		<legend>REGISTRATION</legend>
			ID</br><input type="number" name="uid" value=""></br>
			Password</br><input type="password" name="password" value=""></br>
			Confirm Password</br><input type="cpassword" name="cpassword" value=""></br>
			Name</br><input type="text" name="uname" value=""></br>
			User Type</br> 
				<input type="radio" name="utype" value="" required>User 
				<input type="radio" name="" value="">Admin</br></br>
			<td>
				<input type="submit" name="submit" value="SignUp"><a href="login.php">Sign In</a>	
			</td>
	</fieldset>
	</form>
</body>
</html>





























