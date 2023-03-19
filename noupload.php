<?php
include("config.php");
$sql="SELECT t_notice from material1";
$query=mysqli_query($con,$sql);
$info=mysqli_fetch_array($query);

     $img=$info['t_notice'];?></td>
     <iframe src="pdfup/<?php echo $img; ?>" height="500" width="30%"></iframe></td><br></br>
     <?php

?>
<html>
    <head>

    </head>
    <body bgcolor="blue-white">
    <form>
        <center><button><a href="teacherindex.php">Back to Teacher Page</a></button></center><br></br>
        <center><button><a href="parentindex.php">Back to Parent Page</a></button></center>
    </form>
    </body>
</html>

