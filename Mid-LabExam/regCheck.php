<?php
	if(isset($_REQUEST['submit'])){
session_start();
		$uid =  $_POST['uid'].'|';
		$password =  $_POST['password'];
		$cpassword =  $_POST['cpassword'];
		$uname =  $_POST['uname'];
		$utype =  $_POST['utype'];
		
$length=strlen($uname);
$a=0;

if(isset($_POST['uid']))
{
	$a=$a+1;
}else
{
	echo("select  id");
}





if(isset($_POST['password']))
{
	$password=$_POST['password'].'|';
	$plength=strlen($password);
	if($plength>5)
{
	$a=$a+1;
}
else{echo("passwordmin 6");}
	
	
}else
{
	echo("fill pass");
}






if(isset($_POST['cpassword']))
{
	$cpassword=$_POST['cpassword'].'|';
	
	if($cpassword==$password)
{
	$a=$a+1;
}
else{echo("different pass");}
	
	
}else
{
	echo("fill pass");
}









if(isset($_POST['uname']))
{
	$uname=$_POST['uname'];
	$length=strlen($uname);
	if($length>=2 && is_numeric($uname)==false)
{
	$uname=$_POST['uname'].'|';
	$a=$a+1;
}
else{echo("name cannot start with number<br/>");}
	
	
}else
{
	echo("fill name");
}










if(isset($_POST['utype']))
{
	$a=$a+1;
}else
{
	echo("select  user");
}


if($a>4)
{
$file=fopen('reg.txt','a');
fwrite($file,$uid);
fwrite($file,$password);
fwrite($file,$cpassword);
fwrite($file,$uname);
fwrite($file,$utype);

fclose($file);	
		
		header("location: login.php");
		}
	}
?>