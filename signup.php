 <?php
include 'connect.php';
if(isset($_POST['name'])&&isset($_POST['password'])&&isset($_POST['email_address']))
{
	$id=NULL;
	$name=($_POST['name']);
	$password=md5(($_POST['password']));
	$email=($_POST['email_address']);
	if(!empty($name)&&!empty($password)&&!empty($email))
	{
	    
		$query= "INSERT INTO login_info (ID,NAME,PASSWORD,USERNAME) VALUES('$id','$name','$password','$email')";
		$result=mysqli_query($con,$query);
		if($result===false)
			{
				echo "error:".mysqli_error($con);
			}
		else
			{
				header("Location:painterlogin.php");
		}
	}
	}
	else{
		echo 'enter all fields';
	}
?>