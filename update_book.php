<?php
include("connection.php");

if(isset($_POST['update'])){  // matches exactly the button name

    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];

    // update query
    $sql = "UPDATE book SET title='$title', author='$author' WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if($result){
        // redirect to dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error updating book: " . mysqli_error($conn);
    }
}
?>