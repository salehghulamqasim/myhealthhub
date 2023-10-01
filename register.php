<?php
// Initialize sessions
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ----------------------------REGISTRATION----------------------------

$conn = mysqli_connect("localhost", 'root', '', 'Log_Reg');
if (!$conn) {
    echo "connection failed";
}

// Retrieve user input from POST data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$qry = "INSERT INTO `TheTable`(username, email, password) VALUES ('$username', '$email', '$hashedPassword')";

$sendData = mysqli_query($conn, $qry);

if ($sendData) {
    // Registration successful
    $_SESSION['registration_success'] = true;
} else {
    echo "There were some problems while inserting data (X_X)";
}

// Redirect back to index.php
header('Location: index.php');
?>
