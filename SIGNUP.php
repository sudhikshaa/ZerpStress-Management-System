<?php
//define("DB_HOST", "127.0.0.1:3307");
//define("DB_USER", "root");
//define("DB_PASSWORD", "");
//define("DB_DATABASE", "apartment");
if(isset($_REQUEST['submit']))
{
$uname=$_REQUEST['username'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['password'];
$con=mysqli_connect("127.0.0.1:3307","root","","apartment");
if($con)
{
	$q="insert into userlogin(username,email,password) values('$uname','$email','$pass')";
	$r=mysqli_query($con,$q);
	if($r)
	{
		echo "<script>alert('You Registeration is Successfull')</script>";
		header('Location: PERSONAL DETAILS REGISTER.php');
	}
	else
		echo mysqli_error($con);
}
else
	echo mysqli_connect_error();
}
?>
<html>
<head>
<br><br><br><br>
<title>SIGN UP PAGE</title>
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
<center><h1>SIGNUP</h1>
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
<th colspan="2"><button type="submit" name="submit">SIGNUP</button></th>
</tr>
</div>
</table>
</form>
</body>
</html>
 