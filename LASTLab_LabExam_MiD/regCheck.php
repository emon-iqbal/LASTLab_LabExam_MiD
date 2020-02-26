<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
		$uid = $_REQUEST['uid'];
		$password =  $_REQUEST['password'];
		$password =  $_REQUEST['password'];
		$uname =  $_REQUEST['uname'];
		
		if(empty(trim($uid)) || empty(trim($password)) || empty(trim($password)) || empty(trim($uname))){
			echo "Null submission found!";
		}else{

			$file = fopen('reg.txt', 'r');
			$user = fread($file, filesize('reg.txt'));
			$data = explode('|', $user);

			if( trim($data[0]) == $uid && trim($data[1]) == $password && trim($data[2]) == $password && trim($data[3]) == $uname){
				$_SESSION['uid'] = $uid;
				$_SESSION['pass'] = $password;
				$_SESSION['pass'] = $password;
				$_SESSION['uname'] = $uname;

				header("location: login.php");
			}else{
				echo "invalid uid/password/uname";
			}
		}

	}else{
		//echo "invalid request! please login first!";
		header("location: registration.php");
	}
?>