
<?php
//Call the components
require __DIR__ . '.\vendor\autoload.php';

$conextion = conex();
$email = $_DELETE['email'];
delete_user($conextion, $email);

include('read.php');

?>
