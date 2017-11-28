<?php
include 'connect.php';
//header("Content-Type: application/json; charset=UTF-8");
$q=$_REQUEST['q'];
$querry="SELECT IMAGE FROM paint_info WHERE NAME='$q'";
$result=array();
$row=array();
$value=mysqli_query($con,$querry);
$row=mysqli_fetch_array($value,MYSQLI_NUM);
 header("Content-type: image/jpeg");
 echo $row[2];
?>