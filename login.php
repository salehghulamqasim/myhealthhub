<?php
// Initialize a session
session_start();

// Connect to the database (replace with your actual database connection details)
$conn = mysqli_connect("localhost", 'root', '', 'Log_Reg');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve user input from POST data
$username = $_POST['username'];
$password = $_POST['password'];

// Query to get the user from the database
$qry = "SELECT * FROM `TheTable` WHERE username='$username'";
$result = mysqli_query($conn, $qry);

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            // Password is correct, so set session variables
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['occupation'] = $row['occupation'];

            // Redirect user to different pages based on occupation
            if ($row['occupation'] === 'Doctor') {
                header("location: home.php"); // Redirect to the doctor page
            } elseif ($row['occupation'] === 'Staff') {
                header("location: home.php"); // Redirect to the staff page 
            } elseif ($row['occupation'] === 'Cmo') {
                header("location: /project/cmo/home-cmo.php"); // Redirect to the cmo page
            } elseif ($row['occupation'] === 'Stakeholder') {
                header("location: /project/Stakeholder/home-stakeholder.php"); // Redirect to the stakeholder page
            } elseif ($row['occupation'] === 'Hr') {
                header("location: /project/Hr/home-hr.php"); // Redirect to the hr page
            } else {
                // Handle other occupations or situations as needed
                header("location: default_page.php"); //CREATE a default_page.php first for error 
            }
        } else {
            // Display an error message if the password is not valid
            echo "The password you entered was not valid.";
        }
    }
} else {
    echo "No account found with that username.";
}

// Close the database connection
mysqli_close($conn);
?>
