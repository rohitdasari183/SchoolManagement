<?php
include("adminlock.php");
?>
<html>
    <head>

    </head>
    <body bgcolor="yellow">
        <center>

        <form action="noticeupload.php" method="POST" enctype="multipart/form-data">
        <h1 style="background-color:white;font-size:30px">Welcome to the Home Page</h1>
        <form action="pdfupload1.php" method="POST" >

        


        <button>
        <a href="addTeacher.php">Add Teacher</a></button></br></br>
        
        <button><a href="searchteacher.php">Search Here</a></button></br></br>
        <button>
       
            <a href="parentteacherlogin.php"><h5>Already registered then login here</h5></a></button></br></br>
    
        <button><a href="logout.php">Admin Logout</a></button></br></br></br>
        <button>  
        Upload Notice:<input type="file" name="notice" id="notice">
        </button></br></br>
        <input type="submit" value="submit"></br></br>
        </form></center>
    </body>
</html>
