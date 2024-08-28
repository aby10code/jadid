<?php
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "mini_hotel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Check connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form inputs
    $user = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // SQL query to insert the data
    $sql = "INSERT INTO admin (user, password, email) VALUES ('$user', '$hashed_password', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='container mt-4'><div class='alert alert-success' role='alert'>Account created successfully!</div></div>";
    } else {
        echo "<div class='container mt-4'><div class='alert alert-danger' role='alert'>Error: " . $conn->error . "</div></div>";
    }

    // Close connection
    $conn->close();
}

?>

