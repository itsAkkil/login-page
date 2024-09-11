<?php include 'dbConnecton.php'


// Read and decode JSON data from the request body
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);

// Extract individual values from the JSON data
$admissionYear = $mydata["admissionYear"] ?? null;
$programme = $mydata["programme"] ?? null;
$registrationFee = $mydata["registrationFee"] ?? null;
$eligibilityCriteria = $mydata["eligibilityCriteria"] ?? null;
$studentName = $mydata["studentName"] ?? null;
$fatherName = $mydata["fatherName"] ?? null;
$motherName = $mydata["motherName"] ?? null;
$studentCategory = $mydata["studentCategory"] ?? null;
$feeCategory = $mydata["feeCategory"] ?? null;
$candidateCategory = $mydata["candidateCategory"] ?? null;
$applicationFee = $mydata["applicationFee"] ?? null;
$studentContactNo = $mydata["studentContactNo"] ?? null;
$alternateNumber = $mydata["alternateNumber"] ?? null;
$studentEmail = $mydata["studentEmail"] ?? null;

// Validate required fields
$errors = [];
if (empty($admissionYear)) $errors[] = "Admission Year is required.";
if (empty($programme)) $errors[] = "Programme is required.";
if (empty($studentName)) $errors[] = "Student Name is required.";
if (empty($fatherName)) $errors[] = "Father Name is required.";
if (empty($motherName)) $errors[] = "Mother Name is required.";
if (empty($studentCategory)) $errors[] = "Student Category is required.";
if (empty($feeCategory)) $errors[] = "Fee Category is required.";
if (empty($candidateCategory)) $errors[] = "Candidate Category is required.";
if (empty($applicationFee)) $errors[] = "Application Fee is required.";
if (empty($studentContactNo) || !preg_match("/^[0-9]{10}$/", $studentContactNo)) $errors[] = "Valid Student Contact No is required.";
if (empty($studentEmail) || !filter_var($studentEmail, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid Student Email is required.";

// If there are validation errors, send a response with errors
if (!empty($errors)) {
    echo json_encode(["success" => false, "errors" => $errors]);
    exit;
}

// Prepare an SQL statement for insertion
$stmt = $conn->prepare("INSERT INTO students (admissionYear, programme, registrationFee, eligibilityCriteria, studentName, fatherName, motherName, studentCategory, feeCategory, candidateCategory, applicationFee, studentContactNo, alternateNumber, studentEmail, reg_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, current_timestamp())");

// Bind parameters to the SQL statement
$stmt->bind_param("isssssssssssss", $admissionYear, $programme, $registrationFee, $eligibilityCriteria, $studentName, $fatherName, $motherName, $studentCategory, $feeCategory, $candidateCategory, $applicationFee, $studentContactNo, $alternateNumber, $studentEmail);

// Execute the statement
if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Data inserted successfully"]);
} else {
    echo json_encode(["success" => false, "message" => "Error: " . $stmt->error]);
}

// Close the statement and connection
$stmt->close();
$conn->close();

?>?>
















?>