<?php
$host="localhost";
$user="root";
$pass="";
$dbname="bdbookshop";

$conn=mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Something went wrong...");
}
?>