<?php 
    $conn = new mysqli('localhost','root','','toll_tax_db');
    
    $id = $_GET['id'];
    $sql = "delete from toll_entries where id = '$id'";

    if($conn->query($sql) === true)
    {
        header('Location: index.php');
    }
    else
    {
        echo 'error: '.$conn->error;
    }

 ?>