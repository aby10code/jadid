<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hotelName = htmlspecialchars($_POST["hotelName"]);
    $name = htmlspecialchars($_POST["name"]);
    $checkInDate = htmlspecialchars($_POST["checkin"]);
    $checkOutDate = htmlspecialchars($_POST["checkout"]);
    $guests = htmlspecialchars($_POST["guests"]);
    $email = htmlspecialchars($_POST["email"]);

    // Prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO bookings (hotel_name, full_name, check_in_date, check_out_date, guests, email) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssis", $hotelName, $name, $checkInDate, $checkOutDate, $guests, $email);

    if ($stmt->execute()) {
        $message = "Booking successful!";
    } else {
        $message = "An error occurred. Please try again later.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar {
            background-color: #4e3629;
        }
        .navbar-brand, .nav-link {
            color: #ffffff !important;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4e3629;
        }
        p {
            color: #495057;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Mini Hotels</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Booking Confirmation</h1>
        <?php
        if (isset($message) && $message == "Booking successful!") {
            echo "<p>Thank you, <strong>" . htmlspecialchars($name) . "</strong>, for booking a room at <strong>" . htmlspecialchars($hotelName) . "</strong>.</p>";
            echo "<p>Booking details:</p>";
            echo "<ul class='list-group'>";
            echo "<li class='list-group-item'>Email: " . htmlspecialchars($email) . "</li>";
            echo "<li class='list-group-item'>Check-in Date: " . htmlspecialchars($checkInDate) . "</li>";
            echo "<li class='list-group-item'>Check-out Date: " . htmlspecialchars($checkOutDate) . "</li>";
            echo "<li class='list-group-item'>Number of Guests: " . htmlspecialchars($guests) . "</li>";
            echo "</ul>";
            echo "<p>We look forward to your stay!</p>";
        } else {
            echo "<div class='alert alert-danger'>$message</div>";
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
