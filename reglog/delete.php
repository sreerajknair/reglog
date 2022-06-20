<?php      
     $conn = mysqli_connect("localhost", "root", "", "student");
         
     // Check connection
     if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
    $id=$_GET['id'];
    $sql="delete from registration where id='$id'";
    if(mysqli_query($conn, $sql)){
        header("location: view.php");

       
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
?>    