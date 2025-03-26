<?php
$servername = "localhost";
$username = "root";
$password="";
$database="sneha";
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user input
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Login successful
    echo "Login successful";
    echo "<script>
            window.open('index.html','_self')</script>";
} else {
    // Login failed
    echo "Invalid email or password";
}

// Close connection
$conn->close();
?>