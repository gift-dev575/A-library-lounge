<?php
include("connection.php");
$id = $_GET['id'];

$sql = "SELECT * FROM book WHERE id=$id";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel = "stylesheet" href="style.css">
</head>
<body>
    

<form action="update_book.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
Title<br>
<input type="text" name="title" value="<?php echo $row['title']; ?>"><br><br>

Author<br>
<input type="text" name="author" value="<?php echo $row['author']; ?>"><br><br>
<input type="submit" name="update"value="update">

</form>
</body>
</html>