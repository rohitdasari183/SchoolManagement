<?php
include("config.php");
$path="pdfup/";
$valid_formats=array("jpg","JPG","gif","png","bmp");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $time=time();
    $a=$_POST['name'];
     $b=$_POST['email'];
     $n=$_POST['luc'];
     $z=$_POST['date'];
    $c=$_POST['gender'];
    $d=$_POST['country_code'];
    $e=$_POST['address'];
    $f=$_POST['Course'];
    $g=md5($_POST['password']);
    $actual_image_name=$_FILES['photo']['name'];
    $reimg=$time.$actual_image_name;
    $size=$_FILES['photo']['size'];
    $tmp=$_FILES['photo']['tmp_name'];
    $ext=explode(".",$actual_image_name);

    if(in_array($ext[1],$valid_formats))
    {
        if(move_uploaded_file($tmp,$path.$reimg))
        {
          
        
           
           echo $qry=mysqli_query($con,"INSERT INTO school.parent1(s_name,s_email,s_date,s_gender,s_cont,s_address,s_course,s_pass,s_photo,s_flag) VALUES ('$a', '$b','$z','$c', '$d', '$e', '$f', '$g', '$reimg', '$n')");
           if($qry==true)
            {
             // echo"connect";
             header("Location:student_data.php");
            }
          else{
            echo"not connected";

           }
        }
    }
}
else
{
    echo"method is not post";
}
?>