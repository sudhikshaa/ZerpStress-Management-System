<?php
if(isset($_REQUEST['submit']))
{
$fname=$_REQUEST['fname'];
$PhNo=$_REQUEST['phoneNo'];
$floor=$_REQUEST['floor'];
$section=$_REQUEST['section'];
$CDetails=$_REQUEST['subject'];
$con=mysqli_connect("127.0.0.1:3307","root","","apartment");
if($con)
{
	$q="insert into complaint_form(fname,phNo,floor,section,CDetails) values('$fname','$PhNo','$floor','$section','$CDetails')";
	$r=mysqli_query($con,$q);
	if($r)
	{
		echo "<script>alert('Your Registeration is Successfull')</script>";
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
<title>Complaint Form</title>
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
input[type=text]{
width:100%;
padding:12px 20px;
margin:8px 0;
display:inline-block;
border:1px solid #ccc;
box-sizing:border-box;
}
.aa{
	text-align: right;
}
th{
	text-align: left;
}
</style>
</head>
<body>
<h3 class="aa"><a href="logout.php">Logout</a></h3>
<center><h1>Complaint Form</h1>
<p>Please send us details about the incident you would like to report. <br>Our Complaint Center will analyze your complaint and take the appropriate measures in order that the reported situation will not occur at any other time in the future. 
        </p>

<form method="post">
<table>
<div class="container">
<tr>
<th><label>First Name</label></th>
<th><input type="text" name="fname" required></th>
</tr>
<tr>
<th><label>Phone Number</label></th>
<th><input type="tel" name="phoneNo" required></th>
</tr>
<tr>
<th><label>Floor</label></th>
<th><select id="floor" name="floor" >
      <option value="-----">----</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select>
</th>
</tr>
<tr>
<th><label>What is the category of <br>complain you are facing?</label></th>
<th><p><input type="checkbox" name="section" value="water">Water</p>
        <p><input type="checkbox" name="section" value="electricity">electricity</p>
        <p><input type="checkbox" name="section" value="security">Security</p>
        <p><input type="checkbox" name="section" value="cleaning">Cleaning</p>
</th>
</tr>
<tr>
<th><label>Complaint Details</label></th>
<th><textarea id="subject" name="subject" placeholder="Enter your complaint details......." style="height:200px"></textarea></th>
<tr>
<th colspan="2"><button type="submit" name="submit">Submit</button></th>
</tr>
</div>
</table>
</form>
</body>
</html>
 