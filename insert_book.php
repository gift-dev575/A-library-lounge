<?php 
include("connection.php");
if(isset($_POST['add'])){
  $title = $_POST['title'];
  $author = $_POST['author'];

  $stmt = $conn ->prepare("INSERT INTO book(title,author)
  VALUES(?,?)"
  );
  $stmt -> bind_param("ss",$title,$author);
  $stmt -> execute();
  header("Location: dashboard.php");
}
?>