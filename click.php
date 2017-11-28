<?php
include 'connect.php';
//header("Content-Type: application/json; charset=UTF-8");
$q=$_REQUEST['q'];
$querry="SELECT * FROM paint_info WHERE NAME='$q'";
$result=array();
$row=array();
$value=mysqli_query($con,$querry);
$row=mysqli_fetch_array($value,MYSQLI_NUM);
//for($i=1;$i<10;++$i)
//{
//	if($i!=2)
//	{$result[$i]=$row[$i];
//	}
//}

//$myjson = json_encode($result);

?>

<html>
<head>
<style>
body{
 background-image:url("http://localhost/php%20data/project/background2.jpg");
 background-repeat: no-repeat;
 background-position:right;
 background-attachment:fixed;
}
#demo{
	text-align:center;
	font-size:40px;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    margin: 150px 40px 40px 500px;
}

td, th {
    border: 1px solid #ffffff;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #ffffff;
}
#img{
	 margin: 50px 500px 40px 500px;
	height:80px;
	width:80px;
	
}
</style>
</head>
<body>
<div id="img">
<img src="compare1?q="+<?php $q ?> height="70px" width="70px">
</div>
<table>
<tr>
<td>NAME</td>
<td><?php echo $row[1];?></td>
</tr>
<td>BRAND</td>
<td><?php echo $row[3];?></td>
</tr>
<td>PRICE</td>
<td><?php echo $row[4];?></td>
</tr>
<td>TYPE</td>
<td><?php echo $row[5];?></td>
</tr>
<td>FINISH</td>
<td><?php echo $row[6];?></td>
</tr>
<td>DURABILITY</td>
<td><?php echo $row[7];?></td>
</tr>
<td>COVERAGE</td>
<td><?php echo $row[8];?></td>
</tr>
<td>BEST FOR</td>
<td><?php echo $row[9];?></td>
</tr>
<td>WASHABILITY</td>
<td><?php if($row[10]===1){ echo "YES";}
else{ echo "NO";}?></td>
</tr>
<td>ECOFRIENDLY</td>
<td><?php if($row[11]===1){ echo "YES";}
else{ echo "NO";}?></td>
</tr>

</table>
</body>
</html>