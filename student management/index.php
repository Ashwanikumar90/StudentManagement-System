<html>
<title>Student mangaement system
</title>
<head>
<fieldset style="border-color: green; background-color: #8080FF;">
<h3 align="right" style="margin-right:10px;"><a href="login.php">Admin Login</a></h3>
<h1 align="center">Welcome To Student Management System</h1>
</fieldset>
</head>
<body bgcolor="#FFFF80">



<form action="index.php" method="post">
<div style="margin-top: 50px;">

<table style="width:30%;" align="center" border="1">
<tr>
<td colspan="2" align="center">Student Information</td>
</tr>
<tr>
<td align="left">choose Standerd</td>
<td>
<select name="std" required>
<option value="1">1st</option>
<option value="2">2ed</option>
<option value="3">3rd</option>
<option value="4">4th</option>
<option value="5">5st</option>
<option value="6">6th</option>
</select>
</td>
</tr>  
<tr>
<td align="left">Enter Rollno</td>
<td><input type="text" name="rollno" required></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="Show info"></td>
</tr>


</table></div>
</form>
</body>
</html>

<?php 

if(isset($_POST['submit']))
{
    
    
    $standerd= $_POST['std'];
    $rollno= $_POST['rollno'];
    include('dbcon.php');
    include('function.php');
    
    showdetail($standerd,$rollno);
}
?>