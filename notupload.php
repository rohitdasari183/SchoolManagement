<?php
include("config.php");
$sql="SELECT t_notes from material";
$query=mysqli_query($con,$sql);
$info=mysqli_fetch_array($query);

     $img=$info['t_notes'];?></td>
     <center><iframe src="pdfup/<?php echo $img; ?>" height="800" width="80%"></iframe></center></td>
     <?php

?>
<html>
    <head>

    </head>
    <body>
    <form>
        <button><a href="Home.php">Back</a></button>
    </form>
    </body>
</html>

