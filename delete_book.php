<?php 
include("connection.php");

$id = $_GET['id'];
$sql = "DELETE FROM book WHERE id=$id";
mysqli_query($conn,$sql);
header("Location: dashboard.php");

?>