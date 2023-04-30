<?php
if(isset($_REQUEST['submit']))
{
$flat_no=$_REQUEST['flat_no'];
$con=mysqli_connect("127.0.0.1:3307","root","","apartment");
if($con)
{
	$b="insert into complaint_form(flat_no) values('$flat_no')";
	$view=mysqli_query($con,$b);
	if(mysqli_num_rows($view)==1)
	{
		//header('Location: SIGNUP.php');
		echo"<script>alert('SUCCESS')</script>";
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
<title>Admin | Flat Details</title>
<style>
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
<center><h1>Flat Details</h1>
<form>
<table>
<div class="container">
<tr>
<th><label>Flat_no:</label></th>
<th><input type="text" name="flat_no" required></th>
</tr>
<th colspan="2"><button type="submit">Update</button></th>
</tr>
</div>
</table>
</form>
</body>
</html>
