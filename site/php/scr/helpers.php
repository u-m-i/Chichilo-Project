<?php

if(! function_exists('conex'))
{
    function conex()
    {
        return crud\Format::conexDB();
    }
}

if(! function_exists('lower')){
    function lower($value)
    {
        return crud\Format::lower($value);
    }
}

if(! function_exists('verify'))
{
    function verify($conextion){

        if(!$conextion){
            die("Error".mysqli_connect_error());
        }

        return true;
    }
}

if(! function_exists('create_user')){

    function create_user($conextion, $name, $lastname, $username, $email, $password){
        $sql = "SELECT * FROM usuario WHERE email = '$email'";

        $result = mysqli_query($conextion,$sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            echo "El usuario ya está regristado";
            echo"<a href='../../signin.html'>Porfavor ingrese otra información</a>";
        }else {

            $query = "INSERT INTO usuario (name,last_name,username,email,password) VALUES ('".$name."','".$lastname."', '".$username."','".$email."', '".$password."')";

            if (mysqli_query($conextion,$query) === TRUE){
                echo"<br />". "<script>alert('New user added');</script>";
                echo "<br />" . "<h2>". "The user was well registered" . "</h2>";
                echo "<h4>" . "Bienvenido: " .$name . "</h4>" . "\n\n";
                echo "<h5>" . "Go back: " . "<a href='index.html'>Home</a>" ."</h5>";
                echo "<h5>" . "Register up another: " . "<a href='signin.html'>Create another user</a>"."</h5";
            }else{
                echo "<h5>". "Fatal Error, user unsucessfully register"."</h5>";
                echo "<br />" . $conextion->error;
            }
        }
        mysqli_close($conextion);
    }
}

if(! function_exists('create_report')){
    
    function create_report($conextion){
        $query = "SELECT * FROM usuario";
        $result = $conextion->query($query);

        while($row = mysqli_fetch_row($result)){
                echo "<tr><td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "<td>".$row[3]."</td>";
                echo "<td><a href='.\upadte.php?email=".$row[3]."'>Modify sign</a></td>";
                echo "<td><a href='.\delete.php?email=".$row[3]."'>Delete sign</a></td>";
        }
        mysqli_free_result($result);
        mysqli_close($result); 
    }
}
