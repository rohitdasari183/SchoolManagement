<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
.container {  
    padding: 50px;  
  background-color: lightblue;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color:red; 
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>  
</head>  
<body>  
<form  id ="reg" action="studinsert.php" method="POST" enctype="multipart/form-data">
  <div class="container">  
  <center> <label> <h1><i> Student Registeration Form</i></h1> </label></center></div>  
  <hr>  
  <label> Fullname </label>   
<input type="text" name="name" value="" placeholder= "Enter your name" size="15" required />  

<label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email" value="" required> 
 <label for="text"><b>Serial Number</b></label>
 <input type="text" placeholder="Enter Serial Number:" name="luc" id="luc" value="" required> 
 <label for="date"><b>Date of birth:</b></label>  
 <input type="date"  name="date" value="" required></br></br>

 
 Gender :  
</label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
  
</div>  
<label>   
Phone :  
</label>  
<input type="text" name="country_code" placeholder="Country Code"  value="+91" size="2"/>   
<input type="text" name="phone" placeholder="phone no." size="10"/ required>   

   
Current Address :  
<textarea cols="80" rows="5"  name="address" placeholder="Current Address" value="" required>  
</textarea>  
   
Course :  
</label>   
  
<select name="Course" >  
<option  value="Course">Course</option>  
<option value="BCA">BCA</option>  
<option value="BBA">BBA</option>  
<option value="B.Tech">B.Tech</option>  
<option value="MBA">MBA</option>  
<option value="MCA">MCA</option>  
<option value="M.Tech">M.Tech</option>  
</select>  
</div>  
<div>  
<label>   

 
    <label for="psw"><b>Password</b></label>  
    <input type="password" placeholder="Enter Password" name="password"  value="" required>
    <div>
        <label> IdentitySize-Photo</label>   

        <input type="file" id="photo" name="photo"><br>

</label>
        
</div>
  
     <button type="submit" class="registerbtn">Register</button>    
</form>  
</body>  
</html>  