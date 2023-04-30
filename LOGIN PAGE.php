<?php
if(isset($_REQUEST['submit']))
{
$uname=$_REQUEST['username'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['password'];
$con=mysqli_connect("127.0.0.1:3307","root","","apartment");
if($con)
{
	$b="select * from userlogin where username='$uname'and email='$email' and password='$pass' limit 1";
	$view=mysqli_query($con,$b);
	if(mysqli_num_rows($view)==1)
	{
		echo"<script>alert('SUCCESS')</script>";
		header('Location: complaints new.php');
	}
	else
	{
	echo"<script>alert('You have Entered Incorrect Password or Username')</script>";
	}
}
else	
	echo mysqli_connect_error();
	}
?>
	
<html>
<head>
<br><br><br><br>
<title>LOGIN PAGE</title>
<style>
body{
	background-image: radial-gradient(Chocolate,Chocolate);
	background-repeat: no-repeat;
	background-size: cover;
}
button{
width:100%;
color:black;
padding:15px;;
margin:10px 0px;
border:none;
cursor:pointer;
}
input[type=text],input[type=email],input[type=password]{
width:100%;
padding:12px 20px;
margin:8px 0;
display:inline-block;
border:1px solid #ccc;
box-sizing:border-box;
}
</style>
</head>
<body>
<center><h1>LOGIN</h1>
<form method="post">
<table>
<div class="container">
<tr>
<th><label>USERNAME:</label></th>
<th><input type="text" name="username" required></th>
</tr>
<tr>
<th><label>EMAIL_ID:</label></th>
<th><input type="email" name="email" required></th>
</tr>
<tr>
<th><label>PASSWORD:</label></th>
<th><input type="password" name="password" required></th>
</tr>
<tr>
<th colspan="2"><button type="submit" name="submit">LOGIN</button></th>
</tr>
<tr align="center">
<td colspan="2"><a href="SIGNUP.php">Don't have an account?SIGNUP</a></td>
</tr>
</div>
</table>
</form>
</body>
</html>
