<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
     /*
     *This code create an user sign in the data base
     * 
     */
    require __DIR__ . '.\vendor\autoload.php';

    $data_base = conex();

    $conextion = new mysqli($data_base['host'],$data_base['user'],$data_base['password'],$data_base['dbname']);

    verify($conextion);

    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = hash('sha512', '73b0c0eeb6e3b347a4c32822293c71c72dafa8f5b08961c1811ab4025fdf06a5dbf27b3b3200a7731b65ca36ff80a743'.$_POST["password"]);

    $count = confirm($conextion,$email);

    if($count == 1){?>

         <h1 class="h1"> El usuario ya está regristado</h1>
         <a target="_BLANK" href='../signin.html'>Porfavor ingrese otra información</a>

    <?php
    }else{

            $query = "INSERT INTO usuario (name,last_name,username,email,password) VALUES ('".$name."','".$lastname."', '".$username."','".$email."', '".$password."')";

            if (mysqli_query($conextion,$query) === TRUE){ ?>

                <script>alert('New user added');</script>
                <br /><h2>The user was well register</h2>
                <h3><?php echo "Bienvenido: $name"; ?></h3>
                <h5>Go back: <a href='../index.html'>Home</a></h5>
                <h5>Register up another: <a href='../signin.html'>Create another user</a></h5>
                <h5>See all: <a href='read.php'>See the data base</a></h5>

            <?php }else{ ?>

                <h5>Fatal Error, user unsucessfully register</h5>
                <span> <?php $conextion->error; ?> </span> 
                
            <?php } ?>
       <?php } ?>
<body>
    
</body>
</html>

<?php 

mysqli_close($conextion);







