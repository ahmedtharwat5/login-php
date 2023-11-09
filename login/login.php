<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform your authentication logic here
    // Example: Check against a database
    // For simplicity, let's consider a basic check
    if ($username === "example" && $password === "password") {
        echo "Login successful! Welcome, $username!";
    } else {
        echo "Invalid username or password. Please try again.";
    }
}
?>
