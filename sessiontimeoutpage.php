<html>
<head>
<style>
body{
    background-image:url("http://localhost/php%20data/project/background2.jpg");
    background-repeat:no-repeat;
    background-position:right;
	background-attachment:fixed;
}
#message{
	font-size:30px;
	margin-left:200px;
	margin-top:20px;
}
</style>
</head>
<body>
<p id="message">
<?php
echo "Your session has expired! <a href='http://localhost/php%20data/project/painterlogin.php'>Login here</a>";
?>
</p>
</body>
</html>

