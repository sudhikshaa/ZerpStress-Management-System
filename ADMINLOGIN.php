<!--body{
	
	background-image: radial-gradient(blue,white); //or
	background-image: linear-gradient(blue,white); //or
	background-image: url("images/img1.jpg");
	//background-image: url("images/img5.jpg");
	
	background-repeat: no-repeat;
	
	height: 600px; //or
	background-size: cover;
	
}
-->
<?php
if(isset($_REQUEST['submit']))
{
$uname=$_REQUEST['username'];
$pass=$_REQUEST['password'];
$con=mysqli_connect("127.0.0.1:3307","root","","apartment");
if($con)
{
	$b="select * from admin where username='$uname' and password='$pass' limit 1";
	$view=mysqli_query($con,$b);
	if(mysqli_num_rows($view)==1)
	{
		echo"<script>alert('SUCCESS')</script>";
		header('Location: admin_complaintdetails.php');
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
<title>Admin | Login</title>
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
input[type=text],input[type=password]{
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
<center><h1>ADMIN LOGIN</h1>
<form>
<table>
<div class="container">
<tr>
<th><label>USERNAME:</label></th>
<th><input type="text" name="username" required></th>
</tr>
<tr>
<th><label>PASSWORD:</label></th>
<th><input type="password" name="password" required></th>
</tr>
<tr>
<th colspan="2"><button type="submit" name="submit">LOGIN</button></th>
</tr>
</div>
</table>
</form>
</body>
</html>
