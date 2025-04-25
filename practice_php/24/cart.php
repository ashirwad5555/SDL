<?php include "db.php" ?>

<h1>Cart list</h1>

<?php
 session_start();

 $id = $_GET['id'];

 if(!isset($_SESSION['cart']))
 {
   $_SESSION['cart'] = [];
 }
 $_SESSION['cart'][] = $id;
 header("Location: view_cart.php");

 ?>