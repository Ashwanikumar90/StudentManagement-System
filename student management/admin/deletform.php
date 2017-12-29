<?php

 include('../dbcon.php');
$id=$_REQUEST['sid'];
 
 $qry="DELETE FROM `studen` WHERE `id` = '$id'";
 $run=mysqli_query($con,$qry);
 if($run==true)
{
?>
<script>alert('Deleted Data Succesfully');
window.open('deletestudent.php','_self');
</script>
<?php
}
 



?>