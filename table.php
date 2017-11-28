<?php
include 'connect.php';
if(isset($_REQUEST['value1']) && isset($_REQUEST['value2']))
{
$value1=$_REQUEST['value1'];
$value2=$_REQUEST['value2'];
$querry1="SELECT * FROM paint_info WHERE NAME='$value1'";
$querry2="SELECT * FROM paint_info WHERE NAME='$value2'";
$result1=mysqli_query($con,$querry1);
$result2=mysqli_query($con,$querry2);
$row1=mysqli_fetch_array($result1,MYSQLI_NUM);
$row2=mysqli_fetch_array($result2,MYSQLI_NUM);
}
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
#myselect1{
	margin:40px 40px 40px 200px;
}
#myselect2{
	margin:40px 40px 40px 40px;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    margin: 100px 40px 40px 300px;
}

td, th {
    border: 1px solid #ffffff;
    text-align: left;
    padding: 8px;
	width:200px;
}

tr:nth-child(even) {
    background-color: #ffffff;
}
</style>
</head>
<body>
<div id= "select_menu">
<form method="post" action="table.php">
<select id="myselect1" name="value1">
    <option value="">Choose an option:</option>
    <option value="Royale Lustre">Royale Lustre</option>
    <option value="Royale Shyne">Royale Shyne</option>
    <option value="Ace Exterior Emulsion">Ace Exterior Emulsion</option>
	<option value="Apcolite Premium Satin Enamel">Apcolite Premium Satin Enamel</option>
	<option value="Apex Weatherproof Emulsion">Apex Weatherproof Emulsion</option>
	<option value="Royale Play Antico">Royale Play Antico</option>
	<option value="Apcolite Advanced Epoxy Finish">Apcolite Advanced Epoxy Finish</option>
	<option value="Apcolite Epoxy Primer Grey">Apcolite Epoxy Primer Grey</option>
	<option value="Trucare Interior Wall Primer">Trucare Interior Wall Primer</option>
</select>
<select id="myselect2" name="value2">
    <option value="">Choose an option:</option>
    <option value="Royale Lustre">Royale Lustre</option>
    <option value="Royale Shyne">Royale Shyne</option>
    <option value="Ace Exterior Emulsion">Ace Exterior Emulsion</option>
	<option value="Apcolite Premium Satin Enamel">Apcolite Premium Satin Enamel</option>
	<option value="Apex Weatherproof Emulsion">Apex Weatherproof Emulsion</option>
	<option value="Royale Play Antico">Royale Play Antico</option>
	<option value="Apcolite Advanced Epoxy Finish">Apcolite Advanced Epoxy Finish</option>
	<option value="Apcolite Epoxy Primer Grey">Apcolite Epoxy Primer Grey</option>
	<option value="Trucare Interior Wall Primer">Trucare Interior Wall Primer</option>
</select>
<button>Compare</button>
</form>
</div>
<div id="demo">
<table>
<tr>
<td>NAME</td>
<td><?php if(isset($row1[1]))
{echo $row1[1];}?></td>
<td><?php if(isset($row1[2])) echo $row2[1];?></td>
</tr>
<td>BRAND</td>
<td><?php if(isset($row1[3])) echo $row1[3];?></td>
<td><?php if(isset($row1[3])) echo $row2[3];?></td>
</tr>
<td>PRICE</td>
<td><?php if(isset($row1[4])) echo $row1[4];?></td>
<td><?php if(isset($row1[4])) echo $row2[4];?></td>
</tr>
<td>TYPE</td>
<td><?php if(isset($row1[5]))echo $row1[5];?></td>
<td><?php if(isset($row1[5]))echo $row2[5];?></td>
</tr>
<td>FINISH</td>
<td><?php  if(isset($row1[6]))echo$row1[6];?></td>
<td><?php  if(isset($row1[6]))echo$row2[6];?></td>
</tr>
<td>DURABILITY</td>
<td><?php if(isset($row1[7]))echo $row1[7];?></td>
<td><?php if(isset($row1[7]))echo $row2[7];?></td>
</tr>
<td>COVERAGE</td>
<td><?php if(isset($row1[8]))echo $row1[8];?></td>
<td><?php if(isset($row1[8]))echo $row2[8];?></td>
</tr>
<td>BEST FOR</td>
<td><?php if(isset($row1[9]))echo $row1[9];?></td>
<td><?php if(isset($row1[9]))echo $row2[9];?></td>
</tr>
<td>WASHABILITY</td>
<td><?php if(isset($row1[6])){if($row1[10]===1){ echo "YES";}
else{ echo "NO";}}?></td>
<td><?php if(isset($row1[6])){if($row2[10]===1){ echo "YES";}
else{ echo "NO";}}?></td>
</tr>
<td>ECOFRIENDLY</td>
<td><?php if(isset($row1[6])){if($row1[11]===1){ echo "YES";}
else{ echo "NO";}}?></td>
<td><?php if(isset($row1[6])){if($row2[11]===1){ echo "YES";}
else{ echo "NO";}}?></td>
</tr>

</table>
</div>
</body>
</html>