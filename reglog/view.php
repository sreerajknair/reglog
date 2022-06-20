<!DOCTYPE html>
<html lang="en">
<head>
  <title>Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Details</h2>
  <table class="table table-dark">
    <thead>
      <tr>
      <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>class</th>
        <th>gender</th>
        <th>phone</th>
        <th>address</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php      
     $conn = mysqli_connect("localhost", "root", "", "student");
         
     // Check connection
     if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
    $sel="select * from registration";
    $query=$conn->query($sel);
    while($row=$query->fetch_assoc())
    {
     ?>
      <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['age'];?></td>
        <td><?php echo $row['class'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['phone'];?></td>
        <td><?php echo $row['address'];?></td>
        <td><?php echo $row['email'];?></td>
        <td>
        <a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-success">edit/update</a>
        <a href="delete.php?id=<?php echo $row['id'] ;?> " class="btn btn-danger">delete</a>
        </td>
      </tr>
      <?php
    }
    ?>
    </tbody>
  </table>
</div>

</body>
</html>
