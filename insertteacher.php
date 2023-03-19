 <?php
include("config.php");
$path="pdfup/";
$valid_formats=array("pdf","PDF");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    //$a=$_POST['propic'];
    $b=$_POST['tname'];
    $c=$_POST['cont'];
    $d=$_POST['email'];
    $e=md5($_POST['pass']);
    $f=$_POST['Gender'];
    $g=$_POST['dob'];
    $h=$_POST['add'];
   //$i=$_POST['aadimg'];
    $j=$_POST['Course'];
    $k=$_POST['ins'];
    $l=$_POST['spe'];
    $m=$_POST['per'];
    $n=$_POST['orgad'];
    $o=$_POST['ach'];
    $r=$_POST['flag'];
    //$p=$_POST['gradimg'];
    //$q=$_POST['achcer'];

     $qry=mysqli_query($con,"INSERT INTO school.teacher(t_tname,t_cont,t_email,t_pass,t_Gender,t_dob,t_add,t_Course,t_ins,t_spe,t_per,t_orgad,t_ach,t_flag) VALUES('$b','$c','$d','$e','$f','$g','$h','$j','$k','$l','$m','$n','$o','$r')");
    if($qry==true)
    { 
		
        header("Location:UploadDoc.php");
		
    }
}

	
	
	
	
?>
