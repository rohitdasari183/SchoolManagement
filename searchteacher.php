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
    Search by User Value:<br>

    <input type="text" name="searchname"></br>
    <input type="submit" name="search">
    <button><a href="addTeacher.php">Back</a></button>
    <button><a href="searchDoc.php">Search Document</a></button>
    <button><a href="Home.php">Go to Home Page</a></button>
</form>
   </html>

<?php
require_once("config.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $search=$_POST["searchname"];
        $qry=mysqli_query($con,"SELECT * FROM teacher WHERE t_tname LIKE '%$search%'");

        echo "<table border='1'>

        <tr>
        <th>ID</th>
        <th>Teacher Name</th>
        <th>Contact</th>
        <th>Email</th>
		<th>Gender</th>
		<th>Date of Birth</th>
		<th>Address</th>
		<th>Course</th>
		<th>Institute</th>
		<th>Specialisation</th>
		<th>Peroid of Teaching</th>
		<th>Organisation and Address</th>
		<th>Acievements</th>

         </tr>";
    while($row = mysqli_fetch_array($qry))
    {

       ?><tr>
            <td><?php echo $row['t_id'];?></td>
            <td><?php echo $row['t_tname'];?></td>
            <td><?php echo $row['t_cont'];?></td>
            <td><?php echo $row['t_email'];?></td>
			<td><?php echo $row['t_Gender'];?></td>
			<td><?php echo $row['t_dob'];?></td>
			<td><?php echo $row['t_add'];?></td>
            <td><?php echo $row['t_Course'];?></td>
            <td><?php echo $row['t_ins'];?></td>
			<td><?php echo $row['t_spe'];?></td>
			<td><?php echo $row['t_per'];?></td>
			<td><?php echo $row['t_orgad'];?></td>
			<td><?php echo $row['t_ach'];?></td> 
      
           
		
   
        </tr>
      <?php
    }
    echo "</table>";

    }
    ?>