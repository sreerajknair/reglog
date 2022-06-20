
<?php

$conn = mysqli_connect("localhost", "root", "", "student");
        
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
if (isset($_POST['submit'])){
   $id =  $_POST['id']; 
   $name =  $_POST['name'];
   $age = $_POST['age'];
   $class =  $_POST['class'];
   $gender =  $_POST['gender'];
   $phone =  $_POST['phone'];
   $address = $_POST['address'];
   $email = $_POST['email'];
   $sql = "update  registration  set id='$id',name='$name',
    age='$age',class='$class',gender='$gender',phone='$phone',address='$address',email='$email' where id='$id'";
    
    if(mysqli_query($conn, $sql))
   {
    echo '<script language="javascript">';
    echo 'alert("Data updated to the database")';
    echo '</script>';
      
     header("location:view.php");
   
   }
   
  
  
   
}

$sel="select * from registration where id='".$_GET['id']."'";
$query=$conn->query($sel);
$row=mysqli_fetch_array($query) ;

?>
<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<link rel="stylesheet" href="css/update.css"  /> 
</head>  
<body>
     
<div class  ="main_area"> 

<form action="" method="post">
    
  <div class="container">  
    <h1> Student Updation  Form</h1>  
  <hr>  
  <label> id :</label>   
<input type="text" id="id" name="id" value="<?php echo $row['id'];?>" size="15" required />  
<label> Name :</label>   
<input type="text" id="name" name="name" value="<?php echo $row['name'];?>"  size="15" required />    
<div> 
<label>   
    Age :  
 </label>
 <input type="text" id="age" value="<?php echo $row['age'];?>" name="age" required> 

<label>   
class :  
</label>   
  
<select name="class"   >  
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
<input type="radio" id="gender" value="male" name="gender"  > Male 
<input type="radio" id="gender" value="female" name="gender"> Female   
<input type="radio" id="gender"value="other" name="gender"> Other  
  
</div>  
<label>   
Phone :  
</label>  
  <input type="text" id="phone" name="phone" value="<?php echo $row['phone'];?>" size="10" required>   
Current Address :  
<textarea cols="80" rows="5" id="address" value="<?php echo $row['address'];?>"  name="address" required>  
</textarea>  
 <label for="email"><b>Email</b></label>  
 <input type="text" id="email"  name="email" value="<?php echo $row['email'];?>" required>  
  
    
<button type="submit" value="submit" name="submit" id="submit" class="registerbtn">update</button>    
</form>  
</div>
</body>  
</html>  
