<html>
<center><h1 style="background-color:white;font-size:30px"> Welcome </h1></center>
<!-- <button><a href="logout.php"> logout</a></button></br> -->
</html>

<html>
    <style>
        body{
            background-color:yellow;
        }
        table
        {
            border-style:thick;
            border-width:10px;
            border-color:black;
        }
        </style>
    <form action="" method="POST">
        <h1> Add Student </h1>
        <button style="background-color:white;font-size:30px"><a href="student.php" >Student Form </a></button><br><br>
        
        <h1 style="background-color:white;font-size:30px"> Search Students</h1><br><br>
        <input style="height:40px;font-size:20pt;" type="text" name="searchname" id="searchname" value="" placeholder="Enter student name"><br><br>
        <input style="height:40px;font-size:20pt;" type="submit" name="search" placeholder="Search Student">
        <button style="height:40px;font-size:20pt;"><a href="teacherindex.php">Back</a></button>
</form>
</html>

<?php
require_once("config.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $search=$_POST['searchname'];

    $qry=mysqli_query($con,"select * from parent1 where s_name LIKE '%$search%' OR s_course LIKE '%$search%' OR S_address  LIKE '%$search%' ");

    echo "<table border='1'>
    
    <tr>
    <th>ID</th>
    <th>Student Name</th>
    <th>Student Email</th>
    <th>Date</th>
    <th>Gender</th>
    <th>Contact</th>
    <th>Address</th>
    <th>Course</th>
    <th></th>
    <th>Student Photo</th>
    </tr>";

while($row=mysqli_fetch_array($qry))
{

    ?>
    <tr>
        <td><?php echo $row['s_id'];?></td>
        <td><?php echo $row['s_name'];?></td>
        <td><?php echo $row['s_email'];?></td>
        <td><?php echo $row['s_date'];?></td>
        <td><?php echo $row['s_gender'];?></td>
        <td><?php echo $row['s_cont'];?></td>
        <td><?php echo $row['s_address'];?> </td>
        <td><?php echo $row['s_course']?> </td>
        <td><?php $img=$row['s_photo'];?></td>
        <td><?php echo "<img style='width:50; margin-left:50px;' src='pdfup/$img'>";?></td>
        <td><a href="edit.php?edit=<?php echo $row['s_id'];?>">
        <button>edit</button></a></td>
</tr>
<?php
}


echo"</table>";

}
?>