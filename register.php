<?php
// Establish database connection
$conn = mysqli_connect("localhost", "root", "", "register");

// Check if the connection was successful
if (!$conn) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['password'])) {
    // Sanitize user input to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Insert user data into the database
    $query = "INSERT INTO user (email, password) VALUES ('$email', '$password')";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Registration successful
        echo "<script>alert('Registration successful'); window.location='index.php';</script>";
        exit(); // Ensure that script execution stops after redirection
    } else {
        // Registration failed
        echo "Error: " . mysqli_error($conn);
    }
}
?>
