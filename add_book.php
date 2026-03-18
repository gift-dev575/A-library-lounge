<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel = "stylesheet" href="style.css">
</head>
<body>
    <h2>Add New Book</h2>

    <form action="insert_book.php" method="POST">

Title<br>
<input type="text" name="title"><br><br>

Author<br>
<input type="text" name="author"><br><br>

<input type="submit" name="add" value="Add Book">

</form>
        

</body>
</html>