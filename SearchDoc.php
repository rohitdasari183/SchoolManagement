<html>
<head>
<style>

table
{
     border-style:solid;
     border-width:5px;
     border-color:pink;
}
</style>
</head>
<form action="" method="POST">
    Search by Unicode:<br>

    <input type="text" name="searchname"></br>
    <input type="submit" name="search">
    <button><a href="searchteacher.php">Back</a></button>
    <button><a href="Home.php">Go to Home Page</a></button>
</form>
   </html>

<?php
require_once("config.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $search=$_POST["searchname"];
        $qry=mysqli_query($con,"SELECT * FROM tdoc WHERE t_unicode LIKE '%$search%'");
        
        echo "<table border='1'>

        <tr>
        <th>ID</th>
        <th>Uni-Code</th>
        <th></th>
        <th>Profile Picture</th>
        <th></th>
        <th>Aadhar Card</th>
        <th></th>
        <th>Graduation Certificate</th>
        <th></th>
	
		

         </tr>";
    while($row = mysqli_fetch_array($qry))
    {

       ?><tr>
        <td><?php echo $row['t_id'];?></td>
        <td><?php echo $row['t_unicode'];?></td>
        <td><?php $img=$row['t_propic'];?></td>
        <td><center><iframe src="pdfup/<?php echo $img; ?>" height="400" width="80%"></iframe></center></td>
        <td><?php $img1=$row['t_aadimg'];?></td>
        <td><iframe src="pdfup/<?php echo $img1; ?>" height="400" width="80%"></iframe></td>
        <td><?php $img2=$row['t_gradimg'];?></td>
        <td><iframe src="pdfup/<?php echo $img2; ?>" height="400" width="80%"></iframe></td>
        
          
			
      
           
		
   
        </tr>
      <?php
    }
    echo "</table>";

    }
    ?>