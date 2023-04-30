<?php
if(isset($_REQUEST['submit']))
{
$name=$_REQUEST['name'];
$gender=$_REQUEST['gender'];
$age=$_REQUEST['age'];
$phone_number=$_REQUEST['phone_number'];
$flat_no=$_REQUEST['flat_no'];
$floor=$_REQUEST['floor'];
$family_members=$_REQUEST['family_members'];
$con=mysqli_connect("127.0.0.1:3307","root","","apartment");
if($con)
{
	$q="insert into personal(name,gender,age,phno,flat,floor,family) values('$name','$gender','$age','$phone_number','$flat_no','$floor','$family_members')";
	$r=mysqli_query($con,$q);
	if($r)
	{
		echo "<script>alert('You Registeration is Successfull')</script>";
		header('Location: LOGIN PAGE.php');	
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
<title>PERSONAL DETAILS</title>
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
input[type=text],input[type=number],input[type=tel]{
width:100%;
padding:12px 20px;
margin:8px 0;
display:inline-block;
border:1px solid #ccc;
box-sizing:border-box;
}
th{
text-align:left !important;
}
</style>
</head>
<body>
<center><h1>PERSONAL DETAILS</h1>
<div class="container">
<form method="post">
<table>
<tr>
<th><label>NAME:</label></th>
<th><input type="text" name="name" required></th>
</tr>
<tr>
<th><label>GENDER:</label></th>
<th><input type="text" name="gender" required></th>
</tr>
<tr>
<th><label>AGE:</label></th>
<th><input type="number" name="age" required></th>
</tr>
<tr>
<th><label>PHONE_NUMBER:</label></th>
<th><input type="tel" name="phone_number" required></th>
</tr>
<tr>
<th><label>FLAT_NO:</label></th>
<th><input type="number" name="flat_no" required></th>
</tr>
<tr>
<th><label>FLOOR:</label></th>
<th><input type="number" name="floor" required></th>
</tr>
<tr>
<th><label>FAMILY MEMBERS:</label></th>
<th><input type="text" name="family_members" required></th>
</tr>
<tr>
<th colspan="2"><button type="submit" name="submit">REGISTER</button></th>
</tr>
</table>
</form>
</div>
</body>
</html>
