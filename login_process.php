<?php
include("connection.php");

if(isset($_POST['login'])){

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $hashed = password_hash($password,PASSWORD_DEFAULT);
    // Prepare query
   $stmt = $conn->prepare("SELECT id, email, password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

// Make sure a user was found first
if($result && $result->num_rows === 1){
    $user = $result->fetch_assoc();

    // Now $user['password'] exists
    if(password_verify($password, $user['password'])){
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Incorrect password!";
    }
} else {
    echo "User not found!";
}
       
    $stmt->close();
}
?>