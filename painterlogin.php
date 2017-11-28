<!DOCTYPE html>
<html>
<head>
<title>PAINT </title>
<style>
body{
 background-image:url("http://localhost/php%20data/project/background2.jpg");
 background-repeat: no-repeat;
 background-position:right;
 background-attachment:fixed;
}
#login{
margin: 150px 550px 200px 500px;
padding:20px 20px 20px 20px;
background-color:rgba(200,0,0,0.2);
}
input.login-form{
height:20px;
width:200px;
}
h1{
    color:red;
    text-align: center;
}
button{
height:20px;
width:200px;
}
#remember{
display:inline;}
</style>
</head>
<body>
<h1> PAINTS</h1>
<div id="login">

  <form  action="login.php" method="post">
      <input class="login-form" type="text" placeholder="username" name="username" value="<?php if(isset($_COOKIE["username"])){echo $_COOKIE["username"];}?>">
	  <br><br>
      <input class="login-form"type="password" placeholder="password" name="password" value="<?php if(isset($_COOKIE["password"])){echo $_COOKIE["password"];}?>">
	  <br><br>
	  <input type="checkbox" name="remember_me"> <p id="remember">Remember Me</p>
	  <br><br>
      <button >Login</button>
      <p class="message">Not Registered? <a href="register.html">Create an account</a></p>
    </form>
</div>
</body>
<html>