<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- Your custom CSS file -->
    <style>
        /* Custom styles */
        .navbar {
            background-color: #4e3629; /* Brown color for navbar */
        }
        .navbar-brand, .nav-link {
            color: #ffffff !important; /* White text color for navbar */
        }
        .navbar-nav .nav-item.active .nav-link {
            color: #ffd700 !important; /* Gold color for active link */
        }
        .container {
            background-color: #ffffff; /* White background for container */
            border-radius: 8px; /* Rounded corners */
            padding: 2rem; /* Padding for content */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        h1 {
            color: #4e3629; /* Brown color for heading */
        }
        p {
            color: #495057; /* Dark gray color for text */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
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
                    <a class="nav-link" href="#">Connexion</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="services.php">Services <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <!-- Add more nav items as needed -->
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Our Services</h1>
        <ul>
            <li><strong>24/7 Customer Support:</strong> Our support team is available around the clock to assist you with any inquiries or issues.</li>
            <li><strong>Easy Booking System:</strong> Book your stay with our intuitive and user-friendly booking system.</li>
            <li><strong>Special Offers:</strong> Check out our exclusive deals and discounts for early bookings and long stays.</li>
            <li><strong>Personalized Recommendations:</strong> Get tailored hotel suggestions based on your preferences and past stays.</li>
            <li><strong>Secure Payment Options:</strong> Enjoy secure and convenient payment methods for a hassle-free booking experience.</li>
            <li><strong>Exclusive Amenities:</strong> Access a range of premium amenities and services, including spa treatments, guided tours, and more.</li>
        </ul>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
