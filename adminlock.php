<?php
session_start();
if(!isset($_SESSION['login_admin']))
{
	header("Location:parentteacherlogin.php");
}
include('config.php');
$user_check=$_SESSION['login_admin'];
$ses_sql=mysqli_query($con,"select * from admin where a_email='$user_check'");
$row=mysqli_fetch_array($ses_sql);

echo"WELCOME".$login_session=$row['a_email'];
?>









