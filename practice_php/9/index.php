<?php 
    $conn = new mysqli('localhost','root','','toll_tax_db');

    $result = $conn->query('select * from toll_entries');

 ?>

 <html>
    <head>
        <title>toll tax Management</title>
    </head>
    <body>
        <h1>Toll tax management system CRUD</h1>
        <form action="save.php" method = 'POST'>
            vehicle_number: <input type="text" id="vehicle_number" name = "vehicle_number" required >
            vehicle_type: <select name="vehicle_type" id="vehicle_type">
                <option value="car">car</option>
                <option value="truck">truck</option>
                <option value="bus">bus</option>
                <option value="bike">bike</option>
            </select>

            <br>
            <br>
            <button type='submit'>Add vehicle</button>
        </form>
        <br>
        <br>
        <hr>
        <br>
        <h2>Vehile list</h2>

        <table border= '2', cellpadding= "5">
            <tr>
                <th>id</th>
                <th>vehicle_number</th>
                <th>vehicle_type</th>
                <th>amount_paid</th>
                <th>Action</th>
                <th>status</th>
            </tr>
            <?php 
            while($row = $result->fetch_assoc())
            {
                echo "
                <tr>
                <td> {$row['id']} </td>
                <td> {$row['vehicle_number']} </td>
                <td> {$row['vehicle_type']} </td>
                <td> {$row['amount_paid']} </td>
                <td> <a href='delete.php?id= {$row['id']}' >Delete</a> </td>";
                if($row['status'] == 'unpaid')
                {
                    echo "<td> <button><a href= 'update.php?id={$row['id']}' > pay now </a></button> </td>";
                }
                else
                {
                    echo " <td> paid </td>";
                }

                echo "
                </tr>";
                
                
                
            }
         ?>

        </table>

        


    </body>
 </html>   