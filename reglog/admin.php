
<html>  
<head>  
    <title>Admin login system</title>  
    
    <link rel = "stylesheet" type = "text/css" href = "css/admin.css">   
</head>  
<body>
  
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="username" name  = "username" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="password" name  = "password" />  
            </p>  
            <p>     
                <input type =  "submit" name="login" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>  
  
    <script>  
            function validation()  
            {  
                var id=document.f1.username.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  

</body>     
</html>  
<?php

$conn = mysqli_connect("localhost", "root", "", "student");
        
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
if (isset($_POST['login'])){
    $username = $_POST['username'];  
    $password = $_POST['password'];  
    $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
    
    if(mysqli_query($conn, $sql))
   {
      
       header("location:view.php");
   
    } }
   ?> 
