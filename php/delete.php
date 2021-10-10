
<?php
//Call the components
require __DIR__ . '.\vendor\autoload.php';

$conextion = conex();
if(isset($_GET["id"])){

    $id = $_GET["id"];
    if(delete_user($conextion, $id)){
        $_SESSION["message"] = 'User deleted succesfully';
        header("Location: main.php");
    }
}

?>
