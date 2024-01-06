<?php
       $id=$_POST['id'];
       $name=$_POST['name'];
       $phone=$_POST['phone'];
       $address=$_POST['address'];
       
    include 'database.php';
    $sql = "UPDATE customer SET Name='$name', Number='$phone', Address='$address' WHERE id=$id";

    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");
    }
?>