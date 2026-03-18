<!DOCTYPE html>
<html>
<head>
<title>Signup</title>
<link rel = "stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>
<body>

<h2>Create Account</h2>

<form action="signup_process.php" method="POST">

<label>Username</label><br>
<input type="text" name="username" required><br><br>

<label>Email</label><br>
<input type="email" name="email" required><br><br>

<label>Password</label><br>

<div class="password-field" style="position: relative;">
    <input type="password" id="password" name="password" placeholder="Enter password" required>
    <i class="fa-solid fa-eye" id="togglePassword" 
       style="position:absolute; right:10px; top:50%; transform:translateY(-50%); cursor:pointer;"></i>
</div>

<input type="submit" name="signup" value="Sign Up">

</form>

<script>
const togglePassword = document.getElementById('togglePassword');
const password = document.getElementById('password');

togglePassword.addEventListener('click', function () {
    // Toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    
    // Toggle the icon
    this.classList.toggle('fa-eye');       // open eye
    this.classList.toggle('fa-eye-slash'); // closed eye
});
</script>

</body>

</html>