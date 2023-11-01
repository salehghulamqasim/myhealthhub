<?php
session_start();

// Establish a database connection (replace with your actual database details)
$host = "your_host";
$username = "username";
$password = "password";
$database = "Log_Reg";

$connection = new mysqli($host, $username, $password, $database);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Assuming you have already checked the user's credentials
if (isset($_POST['username'])) {
    $username = $_POST['username'];

    // Query to retrieve the user's information using a prepared statement
    $stmt = $connection->prepare("SELECT username, occupation FROM TheTable WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        // User found, retrieve and store the username and occupation in session variables
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['occupation'] = $row['occupation'];

        // Check the occupation and redirect accordingly
        if ($row['occupation'] === 'doctor') {
            header('Location: doctor_page.php'); // Redirect to doctor-specific page
            exit();
        } elseif ($row['occupation'] === 'staff') {
            header('Location:/staff/home-n.php'); // Redirect to nurse-specific page
            exit();
        } else {
            // Handle other cases (e.g., invalid occupation)
            header('Location: generic_page.php'); // Redirect to a generic page
            exit();
        }
    } else {
        // User not found or authentication failed
        // Handle the error or redirect as needed
        echo "User not found or authentication failed.";
    }
} else {
    echo "Invalid input.";
}

// Close the database connection
$connection->close();

// Redirect back to index.php (if necessary)
header('Location: index.php');
?>
