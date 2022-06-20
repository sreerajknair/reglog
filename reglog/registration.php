<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<link rel="stylesheet" href="css/reg.css"  /> 
</head>  
<body>
<div class  ="main_area">  
<form action="registration.php" method="post">
    
  <div class="container">  
    <h1> Student Registeration Form</h1>  
  <hr>  
  <label> id :</label>   
<input type="text" id="id" name="id" placeholder= "Enter student id" size="15" required />  
<label> Name :</label>   
<input type="text" id="name" name="name" placeholder= "Enter the name" size="15" required />    
<div> 
<label>   
    Age :  
 </label>
 <input type="text" id="age" placeholder="Enter age" name="age" required> 

<label>   
class :  
</label>   
  
<select name="class" >  
<option value="class" >class</option>  
<option value="class8" >class 8</option>  
<option value="class9" >class 9</option>  
<option value="class10" >class 10</option>  
<option value="class11">class 11</option>  
<option value="class12">class 12</option>  

</select>  
</div>  
<div>  
<label>   
Gender :  
</label><br>  
<input type="radio" id="gender"  value="Male" name="gender" checked > Male   
<input type="radio" id="gender" value="Female" name="gender"> Female   
<input type="radio" id="gender" value="Other" name="gender"> Other  
  
</div>  
<label>   
Phone :  
</label>  
  <input type="text" id="phone" name="phone" placeholder="phone no." size="10" required>   
Current Address :  
<textarea cols="80" rows="5" id="address" placeholder="Current Address" value="address" name="address" required>  
</textarea>  
 <label for="email"><b>Email</b></label>  
 <input type="text" id="email" placeholder="Enter Email" name="email" required>  
  
    
<button type="submit" class="registerbtn">Register</button>    
</form>  
</div>
</body>  
</html>  
<?php
 $conn = mysqli_connect("localhost", "root", "", "student");
         
 // Check connection
 if($conn === false){
     die("ERROR: Could not connect. "
         . mysqli_connect_error());
 }

        $id =  $_REQUEST['id']; 
        $name =  $_REQUEST['name'];
        $age = $_REQUEST['age'];
        $class =  $_REQUEST['class'];
        $gender =  $_REQUEST['gender'];
        $phone =  $_REQUEST['phone'];
        $address = $_REQUEST['address'];
        $email = $_REQUEST['email'];
         
        // Performing insert query execution
        // here our table name is registration
        $sql = "INSERT INTO registration  VALUES ('$id','$name',
            '$age','$class','$gender','$phone','$address','$email')";
         
        if(mysqli_query($conn, $sql)){
            echo '<script language="javascript">';
            echo 'alert("data added to the database")';
            echo '</script>';
 
           
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         // Close connection
        mysqli_close($conn);
        ?>
       
  
  