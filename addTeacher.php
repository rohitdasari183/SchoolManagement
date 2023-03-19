<html>
    <head>
    <script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$("#rform").validate({
		rules:{
			tname:"required",
			cont:
            {
				required:true,
				minlength:10,
				number:true	
			},
			email:
            {
				required:true,
				email:true
			},
            pass:
            {
                required:true,
                minlength:8,
                pass:true
            },
            add:
            {
                required:true,
                add:true

            },
            ins:"required",
            spe:"required",
            per:"required",   
            orgad:"required",    
            flag:"required"  
		},
		messages:
        {
			tname:"Enter your name",
			cont:
            {
				required:"Enter contact number",
				minlength:"Length of contact number minimum 10 digit",
				number:"please enter valid number"
			},
			email:
            {
				required:"Enter email id ",
				email:"Enter valide email id"
			},
            pass:
            {
                required:"Enter  password",
                pass:"Enter 8 digit-letter password"
            },
			add:"Enter Address",
			ins:"please enter Instutite name",
			spe:"please enter specialization",
			per:"please enter peroid of teaching",        
		    orgad:"please enter organisation name and address",
            flag:"Please enter your lucky number for credentials"

		},
		submitHandler: function(form)
		{
			aleart("Data is correct !!");
			form.submit();
		}
	});		
});   
</script>
    </head>
    <body bgcolor="orange">
        <form id="rform" type="reg" action="insertteacher.php" method="POST" enctype="multipart/form-data">
            <center><h1 style="background-color:white;font-size:30px">Teacher Registration Form</h1></center>
            <h1 style="background-color:white;font-size:30px">Enter Personal Details</h1>
         
            <input type="text" name="tname" id="tname" value="" placeholder="Enter the Full Name of Teacher"></br></br>
            <input type="text" name="cont" id="cont" value="" placeholder="Enter Contact Number"></br></br>
            <input type="text" name="email" id="email" value="" placeholder="Enter Email ID"></br></br>
            <input type="text" name="flag" id="flag" value="" placeholder="Enter Serial Number"></br></br>
            <input type="password" name="pass" id="pass" value="" placeholder="Enter Password"></br></br>
            <select name="Gender">
                <option value="Gender">Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select></br></br>
            Date of Birth:<input type="date" name="dob" id="dob" value=""></br></br>
            <textarea name="add" id="add" value="" placeholder="Enter Address Here"></textarea></br></br>
           
            <h1>Enter Qualification Details</h1>
            <select name="Course">
            <option value="Course">Course</option>  
            <option value="BCA">BCA</option>  
            <option value="BBA">BBA</option>  
            <option value="B.Tech">B.Tech</option>  
            <option value="MBA">MBA</option>  
            <option value="MCA">MCA</option>  
            <option value="M.Tech">M.Tech</option>
            </select></br></br> 
                
            <input type="text" name="ins" id="ins" value="" placeholder="Enter Institute"></br></br>
            <input type="text" name="spe" id="spe" value="" placeholder="Enter Specialization"></br></br>
            <h1 style="background-color:white;font-size:30px">Experience:</h1>
            Peroid of Teaching:<input type="text" name="per" id="per" value=""></br></br>
            Organisation and Address:<input type="text" name="orgad" id="orgad" value=""></br></br>
            Designation:<input type="text" name="des" id="des" value=""></br></br>
            Achievements:<input type="text" name="ach" id="ach" value=""></br></br>
            <input type="submit" value="submit">

        </form></center>
</body>
</htmL>


            


             
          
            