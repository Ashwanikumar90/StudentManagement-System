<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Karunesh" />

	<title>Untitled 1</title>
</head>

<body>
<form action="SUM.php" method="post">
<table>
<tr><td><input type="text" name="a" placeholder="enter the first value" required></td></tr>
<tr><td><input type="text" name="b" placeholder="enter the second value" required></td></tr>
<tr><td><input type="submit" value="Add" name="Add"/></td></tr>
</table></form>
</body>
</html>
<?php
if(isset($_POST['Add']))
{
$a=$_POST['a'];
$b=$_POST['b'];
$c=$a+$b;
echo $c;
}
?>