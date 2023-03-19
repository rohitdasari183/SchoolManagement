<?php
session_start();
if(!isset($_SESSION['login_parent1']))
{
	header("Location:parentteacherlogin.php");
}
include('config.php');
$user_check=$_SESSION['login_parent1'];
$ses_sql=mysqli_query($con,"select * from parent1 where s_email='$user_check'");
$row=mysqli_fetch_array($ses_sql);

echo"WELCOME".$login_session=$row['s_email'];
?>









