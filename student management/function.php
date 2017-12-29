<?php
   function showdetail($standerd,$rollno)
    {
    include('dbcon.php');
    $qry="SELECT * FROM `studen` WHERE rollno='$rollno' AND standerd='$standerd'";
    
    $run=mysqli_query($con,$qry);
    if(mysqli_num_rows($run)>0)
    {
     $data=mysqli_fetch_assoc($run);
     ?>
     <table border="1" style="width:200px; margin-top:20px;"align="center">
<tr>
<th colspan="5">Student Details</th>
</tr>
<tr>
<td rowspan="5"><img src="dataimage/<?php echo $data['image']; ?>"style="max-height:150px;max-width:120px;"/></td>


<th>Roll No</th>
<td><?php echo $data['rollno']; ?></td>
</tr>
<tr> 
<th>Name</th>
<td><?php echo $data['name']; ?></td>
</tr>
<tr> 
<th>Standerd</th>
<td><?php echo $data['standerd']; ?></td>
</tr>
<tr> 
<th>Parent Contact No</th>
<td><?php echo $data['pcont']; ?></td>
</tr>
<tr> 
<th>City</th>
<td><?php echo $data['city']; ?></td>
</tr>
</table>
     
     <?php
    }
    else{
        echo "<script>alert('No Student Found.'); </script>";
    }
}
?>