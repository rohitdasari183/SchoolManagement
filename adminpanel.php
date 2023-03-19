<?php
session_start();
include("config.php");
if(isset($_SESSION['login_admin']))
{
    header("location:Home.php");
}
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $myuseremail = $_POST['useremail'];
    $mypassword = $_POST['password'];
    $password = md5($mypassword);

    $qry = "SELECT a_id from school.admin WHERE a_email='$myuseremail' AND a_pass='$password'";

    $result= mysqli_query($con,$qry);
    $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);
    if($count==1)
    {
        $_SESSION['login_admin'] = $myuseremail;
        header("location:Home.php");
    }
    else
    {
        echo "not";
    }

}
?>

<html>
<head>

</head>
<body style="background-color:#FF0000;">
    <hr></hr>
    <center><h1 style="background-color:white;font-size:30px">Admin Login Page</h1></center>
    <hr></hr>
    <hr></hr>
    <center><h1 style="background-color:white;font-size:30px">Please Login<h1></center>
    <hr></hr>
    <center>
    <form type="reg" action="" method="POST">
    <input type="text" id="useremail" name="useremail" value="" placeholder="Enter Email"></br></br>
   
    <input type="password" id="password" name="password" value="" placeholder="Enter Password"></br></br>
    <input type="submit" value="Log In">
    <hr></hr>
    <hr></hr>
    
    </form></center>
</body>


    </html>
