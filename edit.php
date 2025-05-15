 <?php
require "connect.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $insertQuery = "SELECT * FROM studenms WHERE id = $id";
    $result = mysqli_query($conn,$insertQuery);
    $student = mysqli_fetch_assoc($result);
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $Name = $_POST['fullname'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];

    $insertQuery = "UPDATE studenms SET  id='$id',name='$Name', gender='$gender' , phone='$phone' WHERE id=$id";
    $result = mysqli_query($conn,$insertQuery);
    if ($result) {
        echo "Student updated successfully!";
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
   <link rel="stylesheet" href="Style.css">
</head>
<body>
   <div class="formadd">
    <h1>Edit Student</h1>
    <form method="POST">
        <div class="mainform">
<label for="id">ID</label>
<input  name="id" value="<?php echo $student['id']?>">

<label for="fullname">Name</label>
<input  type="text" name="fullname" value="<?php echo $student['name']?>" required>

<label for="gender">Gender</label>
<input  type="text" name="gender" value="<?php echo $student['gender']?>" >

<label for="phone">Phone</label>
<input  type="text" name="phone" required value="<?php echo $student['phone']?>"><br>
<input class="btne" type="submit" name="submit" value="Update Student">
        </div>
    </form>
   </div>
</body>
</html>