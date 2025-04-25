<?php 
$conn = new mysqli('localhost','root','','email_verification_db');

$email = '';
$token = '';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = $conn->query("select id from userdata where email = '$email'" );
    $id = $result->fetch_assoc()['id'];
    echo $id;

    $token = md5($email. $id. time());

}

 ?>


<html>
    <head>
        <title>email verification by php</title>
    </head>
    <body>
        <form action="" method = "post">
            email: <input type="email" name = "email" /> </br>
            password: <input type="password" name = "password"/> <br>
            <button type= "submit">Submit</button>
            
        </form>


        <?php
        
        if($token)
        {   
            echo $id;
            echo "Click here to verify by company database";
            echo "<a href=\"verify.php?token=$token&id=$id\">Click here</a>"; 
        }

        ?>
    </body>
</html>