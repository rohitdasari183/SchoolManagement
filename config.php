<?php
define("server","localhost");
define("username","root");
define("password","");
define("dbname","school");

$con=mysqli_connect(server,username,password) OR die(mysqli_error());
mysqli_select_db($con,dbname) OR die(mysqli_error());
?>