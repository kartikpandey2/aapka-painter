<?php
$host='localhost';
$username='root';
$password='';
$mysql_db='PAINT';
$con=mysqli_connect($host,$username,$password);
if($con)
{
	mysqli_select_db($mysql_db);
}
else{
	die('NO DATABASE SELECTED');
?>