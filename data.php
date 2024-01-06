<?php
// At the top of your data.php file, start a session
session_start();

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];

// Include database connection
include 'database.php';

// Prepare and bind the SQL statement
$sql = "INSERT INTO customer (Name, Number, Address) VALUES ('$name', '$phone', '$address')";

$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
else{
    echo "Error :".$sql;
}

// After processing, set a success message
$_SESSION['success_message'] = 'Order placed successfully!';

// Then redirect to the index page
header('Location: index.php');
exit();
?>