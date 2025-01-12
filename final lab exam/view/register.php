<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $employerName = $_POST['employerName'];
    $companyName = $_POST['companyName'];
    $contactNo = $_POST['contactNo'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate inputs (simple example)
    if (!$employerName || !$companyName || !$contactNo || !$username || !$password) {
        echo 'All fields are required.';
        exit;
    }

    // Database connection (update with your credentials)
    $conn = new mysqli('localhost', 'root', '', 'job_portal');

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Insert into database
    $stmt = $conn->prepare('INSERT INTO employers (employerName, companyName, contactNo, username, password) VALUES (?, ?, ?, ?, ?)');
    $stmt->bind_param('sssss', $employerName, $companyName, $contactNo, $username, $password);

    if ($stmt->execute()) {
        echo 'Employer registered successfully!';
    } else {
        echo 'Error: ' . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
