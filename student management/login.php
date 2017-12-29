<?php
session_start();

if(isset($_SESSION['uid']))
{
header('location:admin/admindash.php');
}
?>
<html>
<title>Admin Login</title>
<head>
<br/>
<br/>
<br/>
<br/>
<center><h1>Sir please login here to visit your page</h1>
<img src="dataimage\ad.jpeg" width="200px"/>


<br/>
<br/>
<br/>



</head>
<body bgcolor="#FFFF80">
<form action="login.php" method="post">
<fieldset style="background-color: aqua; width: 250px; height: inherit;"  >
<div align="center"><legend>LOGIN</legend></div><table cellspacing="10px">
<tr><td><label>Email Id:</label></td><td><input type="text" name="uname"/></td></tr>
<tr><td><label>Password:</label></td><td><input type="password" name="pass"/></td></tr>
<tr><td></td><td><input type="submit" value="Submit" name="login"/></td></tr>
</table></fieldset></center>
</form>
</body>
</html>

<?php
include('dbcon.php');



if(isset($_POST['login']))
{
$username=$_POST['uname'];

$password=$_POST['pass'];

$qry="select * from `admin` where username='".$username."' and password='".$password."'";
$run=mysqli_query($con,$qry);
$row=mysqli_num_rows($run);
if($row>0)
{
$data=mysqli_fetch_assoc($run);
$id=$data['id'];


$_SESSION['uid']=$id;

header('location:admin/admindash.php');
}
else
{
?>
<script>alert('Username or Password not mach !!');
window.open('login.php','_self');
</script>
<?php
} 
}
?>