<?php
// ----------------------------LOGIN----------------------------

$conn = mysqli_connect("localhost",'root','','Log_Reg');
if (!$conn){ echo "connection failed"; };

// Retrieve user input from POST data
$username = $_POST['username'];
$password = $_POST['password'];

// Query to get the user from the database
$qry = "SELECT * FROM `TheTable` WHERE username='$username'";
$result = mysqli_query($conn, $qry);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            // Password is correct, so start a new session
            session_start();
            
            // Store data in session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            
            // Redirect user to home page
            header("location: home.php");
        } else {
            // Display an error message if password is not valid
            echo "The password you entered was not valid.";
        }
    }
} else {
    echo "No account found with that username.";
}
?>
