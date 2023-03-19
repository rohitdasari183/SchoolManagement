
<html>
    <head>

    </head>
    <body bgcolor="green-bisque">
        <center><h1 style="background-color:white;font-size:30px">Teacher Main Page</h1>
        <form action="notesupload.php" method="POST" enctype="multipart/form-data">
            <input style="height:35px;font-size:20pt;" type="file" id="notes" name="notes"><br></br>
            <hr></hr>
            <input style="height:35px;font-size:20pt;"type="submit" value="submit">
            <hr></hr>
            <br></br>
           <button style="height:40px;font-size:20pt;"><a href="notupload.php">View Notice</a></button> <br></br>
           <hr></hr>
           <button style="height:40px;font-size:20pt;"><a href="student.php">Add Student</a></button> <br></br>
           <hr></hr>
           <button style="height:40px;font-size:20pt;"><a href="student_data.php">Search Student</a></button> <br></br>
           <hr></hr>
           <button style="height:40px;font-size:20pt;"><a href="parentteacherlogin.php">Back</a></button> <br></br>
           <hr></hr>
           <button style="height:40px;font-size:20pt;"><a href="teacherlogout.php">Logout</a></button>
           
        </form></center>
    </body>
</html>