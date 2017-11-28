<!DOCTYPE html>
<script>document.cookie = "PHPSESSID=p0pgmk77pfm0m0gi1e24h29ob2"</script>
<?php
//session_start();
function loginsessionexpired()
	{
		$login_session_duration=86400;
        $current_time=time();
        if(($current_time=time()-$_SESSION["login_time"]) < $login_session_duration)
		{
			return false;
		}
		return true;
	}
if(!isset($_SESSION["name"]))
{
	echo "LOGIN AGAIN ";
}
else{
	
	 if(loginsessionexpired())
		 {
			 session_destroy();
			header("location:sessiontimeoutpage.php");
		 }
}
?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.comparison.js"></script>
	<script type="text/javascript" src="js/animatedModal.min.js"></script>
	<script>
	
		/*$("#compare").animatedModal({
		
		    animatedIn:'lightSpeedIn',
		    animatedOut:'bounceOutDown',
		    color:'#3498db',
		
		});
		
		$(document).ready(function() {
		
		   $('.gallery').compare({			
				compareButton: '.compare-products'
			}); 
			
		
		});*/
		</script>
<style>
div.gallery {
    margin: 40px;
    border: 1px solid #000;
    float: left;
    width: 240px;
	height: 240px;
}
div.row{
	float:left;
	margin-left:250px;
}
div.gallery:hover {
    border: 1px solid #777;
}


div.desc {
    padding: 15px;
    text-align: center;
}

div.heading{
    
    text-align: center;
}

h1{
    color:red;
    text-align: center;
}
body{
    background-image:url("http://localhost/php%20data/project/background2.jpg");
    background-repeat:no-repeat;
    background-position:right;
	background-attachment:fixed;
}
img{
    width:160px;
    height:160px;
}
div.desc{
    position:relative;
	top:60px;
}

div.login_info
{
   position:relative;
   left:1070px;
}
#login_info{
	font-size:20px;
	color:red;
}
button{
	height:20px;
	width:30px;
	 background-image:url("http://localhost/php%20data/project/background2.jpg");
    background-repeat:no-repeat;
    background-position:right;
	background-attachment:fixed;
	
}
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-image:url("http://localhost/php%20data/project/background2.jpg");
	 background-position:left;
	background-attachment:fixed;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
	opacity:0.9;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
#open{
	float:left;
}
</style>
</head>
<body>
<div class="login_info">
<p id="login_info">Welcome<?php 
$name=$_SESSION["name"];
echo " ".$name." ";?> &nbsp; &nbsp;&nbsp; <a href="http://localhost/php_data/project/logout.php">Logout</a></p>
<br><br>
</div>
<div class = "heading">
<h1> PAINTS</h1>
</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
  <a href="table.php" class="compare-products" disabled >Compare</a>
</div>


<div class="row">
<div class="gallery" >
  <a target="_blank" href="Aapka%20Painter/image1.png">
    <img src="http://localhost/php%20data/project/image1.png"  draggable="true" ondragstart="drag(event)" id="drag1">
  </a>
  <div class="desc">
  <p onclick=myfunction_2(this.innerHTML)>Royale Lustre </p>
  <p><button><div>+</div></button></p>
  </div>
</div>

<div class="gallery">
  <a target="_blank" href="file:///G:/project/Aapka%20Painter/image2.png">
   <img src="http://localhost/php%20data/project/image2.png" draggable="true" ondragstart="drag(event)" id="drag2">
  </a>
  <div class="desc"><p onclick="myfunction_2(this.innerHTML)">Royale Shyne</p>
  <p><button><div>+</div></button></p>
  </div>
</div>

<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="http://localhost/php%20data/project/image3.png" draggable="true" ondragstart="drag(event)" id="drag3">
  </a>
  <div class="desc"><p onclick="myfunction_2(this.innerHTML)">Ace Exterior Emulsion</p></div>
</div>
</div>
<div class="row">
<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="http://localhost/php%20data/project/image%204.png" draggable="true" ondragstart="drag(event)" id="drag4">
  </a>
  <div class="desc"><p onclick="myfunction_2(this.innerHTML)">Apcolite Premium Satin Enamel</p></div>
</div>

<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="http://localhost/php%20data/project/image5.png" draggable="true" ondragstart="drag(event)" id="drag5">
  </a>
  <div class="desc"><p onclick="myfunction_2(this.innerHTML)">Apex Weatherproof Emulsion</p></div>
</div>


<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="http://localhost/php%20data/project/image%206.png" draggable="true" ondragstart="drag(event)" id="drag6">
  </a>
  <div class="desc"><p  onclick="myfunction_2(this.innerHTML)">Royale Play Antico</p></div>
</div>
</div>

<div class="row">
<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="http://localhost/php%20data/project/image7.png" draggable="true" ondragstart="drag(event)" id="drag7">
  </a>
  <div class="desc"><p onclick="myfunction_2(this.innerHTML)">Apcolite Advanced Epoxy Finish</p></div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="http://localhost/php%20data/project/image8.png" draggable="true" ondragstart="drag(event)" id="drag8">
  </a>
  <div class="desc"><p onclick="myfunction_2(this.innerHTML)">Apcolite  Epoxy Primer Grey</p></div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="http://localhost/php%20data/project/image9.png" draggable="true" ondragstart="drag(event)" id="drag9">
  </a>
  <div class="desc"><p onclick="myfunction_2(this.innerHTML)">Trucare  Interior Wall Primer</p></div>
</div>
</div>
<script>


    var mySidenav=document.getElementById("mySidenav");
	mySidenav.style.width = "220px"
	
	
function bigimg(x)
{
 x.style.height="400px";
 x.style.width="400px";
}
function normalimg(x)
{
 x.style.height="280px";
 x.style.width="280px";
 }
 
 function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    
	
	ev.dataTransfer.setData("img", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("img");
	cln=document.getElementById(data).cloneNode(true);
    ev.target.appendChild(cln);
	
}
/*function myfunction()
{
	 
	var str=document.getElementById("demo").innerHTML;
	    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				window.open('click.php');
				//var obj=this.responseText;
              // var obj = JSON.parse(this.responseText);
			  // var txt += "<table border='1'>"
			  /*for(i in obj)
			  {
				  if(i!=0 ||i!=2)
				  {txt += "<tr><td>" + myObj[i] + "</td></tr>";}
			   
			  }
			   txt+="</table>";
			  var table_window=window.open('table.php');
			  //table_window.document.write(txt);
			  table_window.onload=function(){
				  table_window.document.getElementById("demo").innerHTML=txt;
			 
			  }
            }
        };
        xmlhttp.open("GET", "click.php?q=" + str, true);
        xmlhttp.send();
}*/
function myfunction_2(str)
{
	    //var str=document.getElementById("kartik").innerHTML;
	    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4) {
				var obj=this.responseText;
				window.open('click.php?q='+str);
			  }
		}
        xmlhttp.open("POST", "click.php", true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("q="+str);
		
}


function closeNav() {
    var mySidenav=document.getElementById("mySidenav");
	mySidenav.style.width = "0px"
}

</script>
</body>
</html>
