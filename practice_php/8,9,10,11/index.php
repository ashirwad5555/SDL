<?php
$conn = new mysqli("localhost", "root", "SanjayKarale@123", "toll_tax_db");

$result = $conn -> query("SELECT * FROM toll_entries");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Toll Tax Management</title>
</head>

<body>
    <h1>Toll Tax Management System</h1>

    <h2>Add Toll Entry</h2>
    <form method="POST" action="save.php">
        Vehicle Number: <input type="text" name="vehicle_number" required><br><br>   
        Vehicle Type: 
        <select name= "vehicle_type">
            <option value="Car">Car</option>
            <option value="Truck">Truck</option>
            <option value="Bike">Bike</option>
            <option value="Bus">Bus</option>
        </select><br><br>
        <input type="submit" value="Add Entry">

    <hr>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Vehicle Number</th>
            <th>Vehicle Type</th>
            <th>Amount Paid</th>
            <th>Action</th>
            <th>Status</th>
        </tr>

        <?php
        while($row = $result->fetch_assoc())
        {
            echo "
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['vehicle_number']}</td>
                <td>{$row['vehicle_type']}</td>
                <td>{$row['amount_paid']}</td>
                <td><a href='delete.php?id={$row['id']}'>Delete</a></td>";
                if ($row['status'] == "unpaid")
                {
                    echo "<td style='color:red'><button><a href='update.php?id={$row['id']}'>Pay Now </a></button></td>";
                }
                else
                {
                    echo "<td style='color:green'><button>Paid</button></td>";
                }
                echo "
            </tr>
            ";
        }
        ?>
        

</table>
</body>
</html>