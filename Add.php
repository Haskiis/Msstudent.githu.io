<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
   <?php
    require "connect.php";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $id = $_POST['id'];
            $Name = $_POST['fullname'];
            $gender = $_POST['gender'];
            $phone = $_POST['phone'];
           
          $insertQuery = " INSERT INTO studenms (id,name,gender,phone) VALUEs ('$id' , '$Name','$gender','$phone') ";
          if(mysqli_query($conn,$insertQuery)){
           
            header("location:index.php");
          } else{
            echo "<p>it failed</p>";
          }
            
        }
   ?>


    <div class="formadd">
<h1>Add New Student</h1>

<form method="POST">
  <div class="mainform">
<label for="id">ID</label>
<input  type="text" name="id" required>
<br>
<label for="fullname">Name:</label>
<input  type="text" name="fullname" required>
<br>
<label for="gender">Gender</label>
<input  type="text" name="gender" required>
<br>
<label for="phone">Phone</label>
<input  type="text" name="phone" required>

<br>

<input class="btne" type="submit" value="Add" >
</div>
    </div>
</body>
</html>