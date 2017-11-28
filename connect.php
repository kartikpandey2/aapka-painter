<?php
$mysql_host='localhost';
$mysql_username='root';
$mysql_password='';
$mysql_db='paints';
$con=mysqli_connect($mysql_host,$mysql_username,$mysql_password);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($con,$mysql_db);

?>

