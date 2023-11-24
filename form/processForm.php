<?php
// Initialize sessions
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$conn = mysqli_connect("localhost", 'root', '', 'Log_Reg');
if (!$conn) {
    echo "connection failed";
}

if (isset($_POST['EmployeeType'])) {
    $EmployeeType = $_POST['EmployeeType'];
    $username = $_POST['username'];
    $Email = $_POST['Email'];
    $Gender = $_POST['Gender'];
    $Department = $_POST['Department'];
    $Ability = $_POST['Ability'];
    $Position = $_POST['Position'];
    $ReplacedBy = $_POST['ReplacedBy'];
    $Certificate = $_POST['Certificate'];
    $Education = $_POST['Education'];
}

    // Store all input values in session variables
    $_SESSION['EmployeeType'] = $EmployeeType;
    $_SESSION['username'] = $username;
    $_SESSION['Email'] = $Email;
    $_SESSION['Gender'] = $Gender;
    $_SESSION['Department'] = $Department;
    $_SESSION['Ability'] = $Ability;
    $_SESSION['Position'] = $Position;
    $_SESSION['ReplacedBy'] = $ReplacedBy;
    $_SESSION['Certificate'] = $Certificate;
    $_SESSION['Education'] = $Education;

$qry = "INSERT INTO `TheData` (EmployeeType, username, Email, Gender, Department, Ability, Position, ReplacedBy, Certificate, Education) VALUES ('$EmployeeType', '$username', '$Email', '$Gender', '$Department', '$Ability', '$Position', '$ReplacedBy', '$Certificate', '$Education')";

$sendData = mysqli_query($conn, $qry);

if ($sendData) {
    // Data submitted successful
    $_SESSION['Submission_Success'] = true;
} else {
    echo "There were some problems while inserting data (X_X)";
}

// Close database connection before redirecting
mysqli_close($conn);

// Redirect back to index.php
if ($_SESSION['Submission_Success']) {
    // Display success message and do not redirect
    echo "Submit successfully";
} else {
    echo "Submit was not successful (X_X)";
}

?>
