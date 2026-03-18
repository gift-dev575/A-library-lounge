<?php 
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

include('connection.php');
$sql = "SELECT * FROM book";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
     <link rel="stylesheet" href="dashboard.css">
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#about-section">About</a></li>
                <li><a href="contact.php">Request Book!</a></li>
            </ul>
            <button class="first-btn">
                <a href="add_book.php" id="1st-btn">Add Book</a>
            </button>
        </nav>
    </header>

    <table border="1">
        <caption>Available Books</caption>
<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Author</th>
</tr>
<?php 
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['title']."</td>";
    echo "<td>".$row['author']."</td>";
    echo "<td>
    <a href='edit_book.php?id=".$row['id']."'>Edit</a> | 
    <a href='delete_book.php?id=".$row['id']."'>Delete</a> 
    </td>"; 
    echo"</tr>";
}
?>
    </table>
 <br>
  <div class="secondbtns">
    <a href="add_book.php" class="second-btn">Add New Book</a>
    <a href="logout.php" class="second-btn">Logout</a>
  </div>

</body>
</html>