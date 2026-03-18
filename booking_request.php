<?php
include("connection.php");

if(isset($_POST['submit_request'])) {

    $name  = trim($_POST['name']);
    $email = trim($_POST['email']);
    $note  = trim($_POST['note']);

    // Get book info from the select
    $book_info = $_POST['book_info'] ?? '';

    if(empty($book_info)){
        die("Please select a book.");
    }

    // Split title and author
    list($book_title, $author) = explode("|", $book_info);

    // Prepare SQL
    $stmt = $conn->prepare(
        "INSERT INTO book_requests (name, email, book_title, author, note) VALUES (?, ?, ?, ?, ?)"
    );

    if(!$stmt){
        die("Prepare failed: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("sssss", $name, $email, $book_title, $author, $note);

    if($stmt->execute()){
        $stmt->close();

        header("Location: index.html");
        exit();

    } else {
        echo "Error executing query: " . $stmt->error;
    }

} else {

    header("Location: contact.php");
    exit();

}
?>