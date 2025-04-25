<?php
    $conn = new mysqli('localhost','root','','email_verification_db');

    $token = $_GET['token'];
    $id = $_GET['id'];

    $result = $conn->query("select * from userdata where id = '$id'");
?>

<html>


<body>
    <?php       
       if($token)
       { 
         $row = $result->fetch_assoc();
         echo "id: ".$row['id']." name : ".$row['name']." email : ".$row['email']." ";
       }
       else
       {
        echo "token expired /does'nt exists ";
       }
    ?>
</body>

</html>