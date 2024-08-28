<?php
// Database connection
$servername = "localhost"; // Change this if needed
$username = "root"; // Change this if needed
$password = ""; // Change this if needed
$dbname = "mini_hotel"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form inputs
    $user = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    // SQL query to select the user
    $sql = "SELECT * FROM admin WHERE user='$user'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the user data
        $row = $result->fetch_assoc();
        
        // Verify the password
        if (password_verify($password, $row['password'])) {
            // Start session and redirect to dashboard
            session_start();
            $_SESSION['user'] = $user;
            header("Location: dashboard.html");
            exit();
        } else {
            // Incorrect password
            echo "<div class='container mt-4'><div class='alert alert-danger' role='alert'>Invalid username or password.</div></div>";
        }
    } else {
        // User not found
        echo "<div class='container mt-4'><div class='alert alert-danger' role='alert'>Invalid username or password.</div></div>";
    }

    // Close connection
    $conn->close();
}
?>
