<?php include "db.php" ?>
<h1>Products list</h1>

<?php 
 $result = $conn->query("SELECT * FROM products");

 while($row = $result->fetch_assoc())
 {
    echo "<br/>";
    echo "<h4>".$row['name']." Rs. ".$row['price']."</h4>";
    echo "<a href='cart.php?id=".$row['id']."'> add to cart</a>";
 }
?>