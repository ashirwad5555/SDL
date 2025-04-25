<?php
// Set a cookie named "username" with value "JohnDoe" that expires in 1 hour
setcookie("username", "JohnDoe", time() + 3600, "/"); // "/" means available across the whole website

// Display a message
echo "Cookie has been set!";
?>
