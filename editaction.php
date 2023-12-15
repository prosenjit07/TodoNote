<?php
       $id=$_POST['id'];
       $title=$_POST['title'];
       $note=$_POST['note'];
       
    include 'database.php';
    $sql = "UPDATE todos SET title='$title', note='$note' WHERE id=$id";

    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");
    }
?>