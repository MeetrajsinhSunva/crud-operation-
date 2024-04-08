<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate credentials (replace with your authentication logic)
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example authentication (replace with your actual authentication logic)
    if ($username === 'admin' && $password === 'admin123') {
        // Set session variables
        $_SESSION['username'] = $username;
        // Redirect to further website
        header("Location: index.html");
        exit;
    } else {
        // Invalid credentials
        header("Location: login.html");
    }
}
?>
