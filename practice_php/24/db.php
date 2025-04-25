<?php
$conn = new mysqli("localhost", "root","","ecommerce");

if($conn->connect_error)
{
    die("connection error:".$conn->connect_error);
}

?>