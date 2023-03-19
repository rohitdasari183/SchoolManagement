<?php
include("config.php");
$path="pdfup/";
$valid_formats=array("pdf","PDF");
if($_SERVER['REQUEST_METHOD']=="POST")
{
	
	$time=time();
	$actual_image_name=$_FILES['notice']['name'];
	
	

	$reimg=$time.$actual_image_name;
	$size=$_FILES['notice']['size'];
	
	$tmp=$_FILES['notice']['tmp_name'];
	$ext=explode(".",$actual_image_name);
	
	//print_r($ext);
		


	
	if(in_array($ext[1],$valid_formats))
	{
		if(move_uploaded_file($tmp,$path.$reimg))
		{
			
		       
				$qry=mysqli_query($con,"INSERT INTO school.material1(t_notice,t_flag1) VALUES('$reimg','1')");
				echo "inserted";
						
				
				

			
		
		}
		   
		else
		{
			echo"not";
		}
		
    }
}
?>