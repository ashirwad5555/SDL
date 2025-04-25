<?php 
    $conn = new mysqli('localhost','root','','toll_tax_db');
    
    $id = $_GET['id'];
    $sql = "Update toll_entries set status = 'paid' where id = '$id'";

    if($conn->query($sql) > 0)
    {  
        echo "status updated";
        header('Location: index.php');
    }
    else
    {
        echo 'error: '.$conn->error;
    }

 ?>