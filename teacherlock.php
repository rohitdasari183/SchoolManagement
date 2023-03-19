<?php
session_start();
if(!isset($_SESSION['login_teacher']))
{
	header("Location:parentteacherlogin.php");
}
include('config.php');
$user_check=$_SESSION['login_teacher'];
$ses_sql=mysqli_query($con,"select * from teacher where t_email='$user_check'");
$row=mysqli_fetch_array($ses_sql);

echo"WELCOME".$login_session=$row['t_email'];
?>









