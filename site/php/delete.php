<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th colspan='2'>Action</th>
        </tr>
    <?php
            
            require __DIR__ . '.\vendor\autoload.php';
            
            $conextion = experiment();
            $email = $_POST['email'];

            if(verify($conextion)){
                delete_user($conextion, $email);
            }

    ?>
    </table>
    
</body>
</html>