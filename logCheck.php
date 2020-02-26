<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
		$uid = $_REQUEST['uid'];
		$password =  $_REQUEST['password'];
		
		if(empty(trim($uid)) || empty(trim($password))){
			echo "Null submission found!";
		}else{

			$file = fopen('form.txt', 'r');
			$user = fread($file, filesize('form.txt'));
			$data = explode('|', $user);

			if( trim($data[0]) == $uid && trim($data[1]) == $password){
				$_SESSION['uid'] = $uid;
				$_SESSION['pass'] = $password;

				header("location: registration.php");
			}else{
				echo "invalid uid/password";
			}
		}

	}else{
		//echo "invalid request! please login first!";
		header("location: login.php");
	}
?>