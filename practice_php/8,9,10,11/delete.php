<?php
$conn = new mysqli("localhost","root","SanjayKarale@123","toll_tax_db");

$id = $_GET['id'];  
$sql = "DELETE FROM toll_entries where id = '$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>