    <?php
include("config.php");
$path="pdfup/";
$valid_formats=array("pdf","PDF");
if($_SERVER['REQUEST_METHOD']=="POST")
{ 
   
	
    $a=$_POST['unicode'];
	
	$time=time();
	$actual_image_name=$_FILES['propic']['name'];
	
	

	$reimg=$time.$actual_image_name;
	$size=$_FILES['propic']['size'];
	
	$tmp=$_FILES['propic']['tmp_name'];
	$ext=explode(".",$actual_image_name);

		
	$time1=time();
	$actual_image_name1=$_FILES['aadimg']['name'];
	
	

	$reimg1=$time1.$actual_image_name1;
	$size1=$_FILES['aadimg']['size'];
	
	$tmp1=$_FILES['aadimg']['tmp_name'];
	$ext1=explode(".",$actual_image_name1);

	$time2=time();
	$actual_image_name2=$_FILES['gradimg']['name'];
	
	

	$reimg2=$time2.$actual_image_name2;
	$size2=$_FILES['gradimg']['size'];
	
	$tmp2=$_FILES['gradimg']['tmp_name'];
	$ext2=explode(".",$actual_image_name2);

	$time3=time();
	$actual_image_name3=$_FILES['achcer']['name'];
	
	

	$reimg3=$time3.$actual_image_name3;
	$size3=$_FILES['achcer']['size'];
	
	$tmp3=$_FILES['achcer']['tmp_name'];
	$ext3=explode(".",$actual_image_name3);

	

	

	
	
		


	
	if(in_array($ext[1],$valid_formats) and  in_array($ext1[1],$valid_formats) and  in_array($ext2[1],$valid_formats))
	{
		if(move_uploaded_file($tmp,$path.$reimg) and  move_uploaded_file($tmp1,$path.$reimg1) and  move_uploaded_file($tmp2,$path.$reimg2))
		{
			
		        $qryt=mysqli_query($con,"INSERT INTO school.tdoc(t_unicode,t_propic,t_aadimg,t_gradimg) VALUES('$a','$reimg','$reimg1','$reimg2')");
				
			
		  ?>
		<iframe src="pdfup/<?php echo $reimg; ?>" height="700" width="70%"></iframe>
		<?php
		?>
		<iframe src="pdfup/<?php echo $reimg1; ?>" height="700" width="70%"></iframe>
		<?php
		?>
		<iframe src="pdfup/<?php echo $reimg2; ?>" height="700" width="70%"></iframe>
		<?php
		
		}
	
		   
    }

		


	
	
	header("Location:addTeacher.php");
}
?>
	
	
	