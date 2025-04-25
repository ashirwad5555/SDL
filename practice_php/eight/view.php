<?php
$conn = new mysqli("localhost", "root", "", "complaint_db");

$result = $conn->query("SELECT * FROM complaints");

echo "<h2>All Complaints</h2>";
echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>Complaint</th><th>Date</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['complaint']."</td><td>".$row['created_at']."</td></tr>";
}

echo "</table>";
echo "<br><a href='index.html'>Back</a>";

$conn->close();
?>
