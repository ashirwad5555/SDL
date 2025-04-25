<?php 
    $conn = new mysqli('localhost','root','','toll_tax_db');

    $vehicle_number = $_POST['vehicle_number'];
    $vehicle_type = $_POST['vehicle_type'];

    if($vehicle_type == 'car')
    {
        $amount_paid = 50;
    }
    else if($vehicle_type == 'truck')
    {
        $amount_paid = 100;
    }
    else if($vehicle_type == 'bus')
    {
        $amount_paid = 150;
    }
    else
    {
         $amount_paid = 0;
    }
    
    $status = 'unpaid';   //by default;

    $sql = "Insert into toll_entries(vehicle_number, vehicle_type, amount_paid, status ) values('$vehicle_number', '$vehicle_type', '$amount_paid', '$status' )";



   if($conn->query($sql) == true )
   {
    echo 'Vehicle entry successfull';
    header("Location: index.php");
   }

 ?>