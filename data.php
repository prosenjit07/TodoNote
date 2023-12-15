<?php
$title = $_POST['title'];
$note = $_POST['note'];

// Include database connection
include 'database.php';

// Prepare and bind the SQL statement
$sql = "INSERT INTO todos (title, note) VALUES ('$title', '$note')";

$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
else{
    // echo "Sorry We Can't Connect";
}
?>