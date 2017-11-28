<?php
include 'connect.php';
session_start();
if(isset($_POST['username'])&&isset($_POST['password']))
{
	$name=$_POST['username'];
	$password=$_POST['password'];
	$password=md5($password);
	if(!empty($name)&&!empty($password))
	{
		$query= "SELECT * FROM login_info WHERE USERNAME='$name' AND PASSWORD='$password'";
		//$query= "SELECT PASSWORD FROM login_info WHERE USERNAME='$name' AND 1=0 UNION ALL SELECT USERNAME='$name', 
		$value=mysqli_query($con,$query);
		$row=mysqli_fetch_assoc($value);
		if(!empty($row['USERNAME']))
			{
			 $_SESSION["name"]=$row["NAME"];
			 $_SESSION["login_time"]=time();
			 /* $msg=rand(100000,999999);
			  $mailsent=mail($row['USERNAME'],"OTP ",$msg);
			  if($mailsent)
			  {
			  $_SESSION["OTP"]=$msg;
			  }
			  header("location: otp.html");*/
			  if(isset($_POST["remember_me"]))
			  {
				  $cookie_name=$_POST['username'];
				  $cookie_password=$_POST['password'];
				  setcookie("username",$cookie_name,time()+86400);
				  setcookie("password",$cookie_password);
			  }
			  else{
				  setcookie("username","");
				  setcookie("password","");
			  }
		
			 //header("location:welcome.php");
			  header("location:welcome.php?PHPSESSID=".session_id());
		 
			 }
			 else{
			    die('username or password is incorrect');
		//else{
		//	die('username or password is incorrect');

		}
	 }
	 
	}
	else{
		die('username or password is empty');
	}

	
?>