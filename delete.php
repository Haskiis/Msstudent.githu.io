<?php
require_once "connect.php";

if(isset($_GET['id'])){
    $sid = $_GET['id'];
    $insertQuery = "DELETE FROM studenms WHERE id=$sid";

    $result = mysqli_query($conn,$insertQuery);
    if($result){
        echo "Seccessfully Delete";
        header("location:index.php");
    }else{
        echo "fial Delete , Not found Data";
    }

    }

?>