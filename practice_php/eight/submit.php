<?php
$conn = new mysqli("localhost", "root", "", "complaint_db");

$name = $_GET['name'];
$email = $_GET['email'];
$complaint = $_GET['complaint'];

$sql = "INSERT INTO complaints (name, email, complaint) VALUES ('$name', '$email', '$complaint')";

if ($conn->query($sql) === TRUE) {
    echo "Complaint submitted successfully.<br><a href='index.html'>Back</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>