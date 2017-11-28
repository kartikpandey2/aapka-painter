<?php
function loginsessionexpired()
	{
		$login_session_duration=10;
        $current_time=time();
        if(($current_time=time()-$_SESSION["login_time"]) < $login_session_duration)
		{
			return false;
		}
		return true;
	}
	
	 if(loginsessionexpired())
		 {
			 header("location:logout.php");
		 }
		 
?>