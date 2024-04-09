<?php

session_start(); // Start the session

$conn = mysqli_connect("localhost", "root", "", "register");

if (!$conn) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['password'])) {
 
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "INSERT INTO user (email, password) VALUES ('$email', '$password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Registration successful, create a session for the user
        $_SESSION['email'] = $email;
        echo "<script>alert('Registration and Login successfully'); window.location='index.php';</script>";
        exit(); 
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}


if(isset($_SESSION['email'])) {
    header("Location: index1.php");
    exit();
}

?>

