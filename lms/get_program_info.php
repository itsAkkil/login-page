<?php
// Database connection
$servername = 'localhost';
$username = 'root';
$password = '';
$database = "lms2k2v"; // Replace with your actual database name

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if a program ID is passed
if (isset($_GET['programme'])) {
    $programme = $_GET['programme'];
    
    // Fetch fee and eligibility criteria for the selected program
    $sql = "SELECT course, eligibility_criteria FROM programs WHERE programme = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $programme);
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    $program = mysqli_fetch_assoc($result);

    if ($program) {
        // Return the fee and eligibility criteria as a JSON response
        echo json_encode($program);
    } else {
        echo json_encode(['error' => 'Program not found']);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
