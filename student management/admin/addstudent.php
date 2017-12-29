<?php
session_start();

if(isset($_SESSION['uid']))
{
 echo ""; 
}
else
{
header('location: ../login.php');
}
?>
<?php
include('header.php');
include('titlehead.php');
?>

<form method="post" action="addstudent.php" enctype="multipart/form-data">
<table align="center" border="1" style="width:70%; margin-top:40px;">
<tr>
<th>Roll No</th>
<td><input type="text" name="rollno" placeholder="Enter  RollNo" requried></td>
<tr>
<th>Full Name</th>
<td><input type="text" name="name" placeholder="Enter FullName" requried></td>
</tr>
<tr>
<th>City</th>
<td><input type="text" name="city" placeholder="Enter City" requried></td>
</tr>
<tr>
<th>Parents Contact no</th>
<td><input type="text" name="pcon" placeholder="Enter Numper" requried></td>
</tr>
<tr>
<th>Standerd</th>
<td><input type="number" name="std" placeholder="Enter Standerd" requried></td>
</tr>
<tr>
<th>Image</th>
<td><input type="file" name="simg" requried></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="Submit" name="Submit" value="Submit"></td>
</tr>
</form>
</table>
</body>
</html>

<?php
if(isset($_POST['Submit']))
{
 include('../dbcon.php');
 $rollno=$_POST['rollno'];
 $name=$_POST['name'];
 $city=$_POST['city'];
 $pcon=$_POST['pcon'];
 $std=$_POST['std'];
 $imagename=$_FILES['simg']['name'];
 $tempname=$_FILES['simg']['tmp_name'];

move_uploaded_file($tempname,"../dataimage/$imagename");
 
 $qry="INSERT INTO studen(rollno,name,city,pcont,standerd,image) VALUES ('$rollno', '$name', '$city', '$pcon', '$std', '$imagename')";
 $run=mysqli_query($con,$qry);
 if($run==true)
{
?>
<script>alert('Data Insert Succesfully');
</script>
<?php
}
 
}


?>

