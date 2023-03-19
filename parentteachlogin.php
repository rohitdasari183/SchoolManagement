 <?php
 session_start();
include("config.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $myuseremail=$_POST['useremail'];
    $mypassword=$_POST['password'];
    $password=md5($mypassword);

    $type=$_POST['type'];

    if($type==1)
    {
        $sql="SELECT * FROM school.teacher where t_email='$myuseremail' and t_pass='$password'";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result);

        $id=$row['t_id'];
        $status=$row['t_flag'];

        $count=mysqli_num_rows($result);
        if($count==1 && $status==1)
        {
            $_SESSION['login_teacher']=$myuseremail;
            header("Location:teacherindex.php");
        }
        else
        {
            $error="Your login email and password is invalid";
        }
    }
    else if($type==2)
    {
        $sql="SELECT * FROM school.parent1 WHERE s_email='$myuseremail' and s_pass='$password'";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result);
        $id=$row['s_id'];
        $status=$row['s_flag'];
        $count=mysqli_num_rows($result);

        if($count==1 && $status==2)
        {
            $_SESSION['login_parent1']=$myuseremail;
            header("Location:parentindex.php");
        }
        else
        {
            $error="Your login name or password is invalid";
        }
    }
  
}
?>
<html>
    <head>

    </head>
    <body class="login-body">
        <div class="container">
            <form action="" method="POST">
                <h2 class="form-signin-heading">Sign in now</h2>
                <input type="text" id="useremail" name="useremail" value="" placeholder="Enter username"></br></br>
                <input type="password" class="form-control" id="password" name="password" value="" placeholder="Enter Password"></br></br>
                <select style="margin-bottom:10px;" id="type" name="type" class="form-control">
                <option value="">Please Select Role</option>
                <option value="1">Teacher</option>
                <option value="2">Parent</option>
                </select>
            <button type="submit">Sign In</button>
            <button><a href="Home.php">Back to Home </a></button>
           </form>
        </div>
</body>
</html>