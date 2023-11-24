<?php
session_start();

$hostname = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "Log_Reg";

// Create a database connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check for connection errors
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
// Query to get the user from the database
$qry = "SELECT * FROM `TheData`";
$result = mysqli_query($conn, $qry);

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    // User is already logged in, show content for authenticated users

    // Fetch user data from the database
    $username = $_SESSION['username'];
    $query = "SELECT * FROM TheData WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        // Store user data in session variables
        $_SESSION['Email'] = $row['Email'];
        $_SESSION['EmployeeType'] = $row['EmployeeType'];
        // $_SESSION['username'] = $row['username']; dont write it as we dont need to override it 
        $_SESSION['Gender'] = $row['Gender'];
        $_SESSION['Department'] = $row['Department'];
        // ... add more session variables for other fields as needed
    }

    // ... (continue with your existing code)
}
// // Fetch data from the "TheData" table
// $query = "SELECT * FROM TheData";
// $result = $mysqli->query($query);

// // Check if there are any rows in the result
// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         // Store each field in separate sessions
//         $_SESSION['id'] = $row['Id'];
//         $_SESSION['employeeType'] = $row['EmployeeType'];
//         $_SESSION['fullName'] = $row['FullName'];
//         $_SESSION['email'] = $row['Email'];
//         $_SESSION['gender'] = $row['Gender'];
//         $_SESSION['department'] = $row['Department'];
//         $_SESSION['ability'] = $row['Ability'];
//         $_SESSION['position'] = $row['Position'];
//         $_SESSION['replacedBy'] = $row['ReplacedBy'];
//         $_SESSION['certificate'] = $row['Certificate'];
//         $_SESSION['education'] = $row['Education'];
//     }
// } else {
//     echo "No data found in the table.";
// }

// // Close the database connection
$mysqli->close();
// mysqli_close($conn);

?>

