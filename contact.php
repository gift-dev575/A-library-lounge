<?php
include("connection.php");

// Get all available books
$sql = "SELECT title,author FROM book";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Booking Request</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="contact.php">Request Book</a></li>
        </ul>
    </nav>
</header>

<section class="hero-section">
    <h2>Request a Book</h2>
    
</section>

<form action="booking_request.php" method="POST">
    
    <label for="name">Your Name</label><br>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Your Email</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="book">Select a Book</label><br>

<select name="book_info" id="book" required>
<option value="">--Choose a Book--</option>

<?php
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){

        $title  = htmlspecialchars($row['title']);
        $author = htmlspecialchars($row['author']);

        echo "<option value='$title|$author'>$title by $author</option>";
    }
}else{
    echo "<option value=''>No books available</option>";
}
?>

</select><br><br>

    <label for="notes">Additional Notes</label><br>
    <textarea id="notes" name="note" rows="4" placeholder="Any special requests..."></textarea><br><br>

    <input type="submit" name="submit_request" value="Submit Request">

</form>

</body>

</html>