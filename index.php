<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page
    header("Location: login.html");
    exit;
}
// User is logged in, continue with further website content

?>