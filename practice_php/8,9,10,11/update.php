<?php
$conn  = new mysqli("localhost","root","SanjayKarale@123","toll_tax_db");

$id = $_GET['id'];

$conn -> query("UPDATE toll_entries SET status = 'paid' WHERE id = '$id'");
if($conn->affected_rows > 0) {
    header("Location: index.php");
    echo "Payment status updated successfully.";
} else {
    echo "Error updating payment status: " . $conn->error;
}

?>