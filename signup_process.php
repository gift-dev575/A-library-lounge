<?php
include("connection.php");
if(isset($_POST['signup'])){
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);

$stmt = $conn->prepare(
        "INSERT INTO users(username,email,password) VALUES(?,?,?)"
    );

    if(!$stmt){
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("sss", $username, $email, $password);

    if($stmt->execute()){
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Execute error: " . $stmt->error;
    }

}


?>