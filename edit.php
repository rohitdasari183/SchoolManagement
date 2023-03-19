<?php
require_once("config.php");
 $get=$_GET['edit'];

 if(isset($_POST['submit']))
 {
    $a=$_POST['name'];
    $b=$_POST['email'];
    $c=$_POST['date'];
    $d=$_POST['gender'];
    $e=$_POST['contact'];
    $f=$_POST['address'];
    $g=$_POST['course'];
   
    $i=md5($_POST['pass']);
    $qry=mysqli_query($con,"UPDATE parent1 SET s_name='$a',s_email='$b',s_date='$c',s_gender='$d', s_cont='$e',s_address='$f',s_course='$g',s_pass='$i' WHERE s_id='$get' ");


    if($qry==true)
    {
        header("Location:student_data.php");
    }
    else{
        echo "not";

    }
 }

 $qry=mysqli_query($con,"SELECT * FROM parent1 WHERE s_id='$get' ");

 while($row=mysqli_fetch_array($qry))
 {
?>
<form action="" method="POST">
    <h1> Update student detailes</h1>
    <input type="text" value="<?php echo $row['s_name'];?>" name="name" placeholder="Enter Name"><br>
    <input type="text" value="<?php echo $row['s_email'];?>" name="email" placeholder="Enter Email"><br>
    <input type="text" value="<?php echo $row['s_date'];?>" name="date"placeholder="Enter Date"><br>
    <input type="text" value="<?php echo $row['s_gender'];?>" name="gender" placeholder="Enter Gender"><br>
    <input type="text" value="<?php echo $row['s_cont'];?>" name="contact" placeholder="Enter Contact"><br>
<input type="date" value="<?php echo $row['s_address'];?>" name="address" placeholder="Enter Address"><br>
<input type="text" value="<?php echo $row['s_course'];?>" name="course" placeholder="Enter Course"><br>
<input type="text" value="<?php echo $row['s_pass'];?>" name="pass" placeholder="Enter Password"><br>
<button type="submit" name="submit">Update </button>
<button><a href="student_data.php"> back to page </a></button>
 </form>
 <?php

 }
 ?>