<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <link rel="stylesheet" href="Style.css">
</head>
<body>
    
    <div class="headerphp">
        <div class="contian">
            <h1>Student Managemant System</h1>
            <a href="Add.php"><p>+ Add New Student</p></a>
        </div>
       <div class="tableform">
          <table>
            <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Edit</th>
            <th>Delete</th>
            </tr>
            </thead>
          </table>
      
       </div>
    </div>

    <?php
  
   require "connect.php";
   
   $query = "SELECT*FROM studenms";
   $result = mysqli_query($conn,$query);
   
   ?>
   <?Php 
    echo"<div class='header'>";
   if($result){
       while($row = mysqli_fetch_assoc($result)){
   $id =  $row['id'];
   $Name = $row['name'];
   $gender = $row['gender'];
   $phone = $row['phone'];

   echo "<table>";
   echo "<thead>";
   echo "<tr>";
   
    echo "<td>$id</td>";
    echo "<td>$Name</td>";
    echo "<td>$gender</td>";
    echo "<td>$phone</td>";
   
    ?>
    <td><a href="edit.php?id=<?php echo $id;?>"><h5>Edit</h5></a></td>
    <td><a href="delete.php?id=<?php echo $id;?>"><h4>Delete</h4></a></td>
    <?php
   
    echo "</tr>";
    echo "</thead>";
    echo "</table>";
  
       }
      
      }else 
       echo "not found data";
       echo "</div>";
     ?>
</body>
</html>