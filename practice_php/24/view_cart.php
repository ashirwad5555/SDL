<?php 
include "db.php";

session_start();

 echo "<h2>Your cart </h2>";

 if(isset($_SESSION['cart']) && count($_SESSION['cart']) >0 )
 {
    $ids = implode(",", $_SESSION['cart']);
    $result = $conn->query("SELECT * FROM products where id in ($ids)");

    while($row = $result->fetch_assoc())
    {
        echo "name:".$row['name']." price: Rs. ".$row['price']."<br/>";

    }
 }
 else
 {
    echo"<h2>Cart is empty</h2>";
 }

 echo "<h3><a href= 'products.php'> continue shopping...</a></h3>"

?>