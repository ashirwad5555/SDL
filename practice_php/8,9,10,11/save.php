<?php
$conn  = new mysqli("localhost","root","SanjayKarale@123","toll_tax_db");

$vehicle_number = $_POST["vehicle_number"];
$vehicle_type = $_POST["vehicle_type"];
if($vehicle_type == "Car") {
    $amount_paid = 50;
} elseif ($vehicle_type == "Truck") {
    $amount_paid = 100;
} elseif ($vehicle_type == "Bus") {
    $amount_paid = 150;
} else {
    $amount_paid = 0; // Default value for other vehicle types
}
$status = "unpaid";

$sql = "INSERT INTO toll_entries(vehicle_number, vehicle_type, amount_paid,status) VALUES('$vehicle_number','$vehicle_type','$amount_paid','$status')";

if($conn->query($sql) === TRUE){
    echo "New record created successfully";
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}