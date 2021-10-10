<?php
//Call the useful functions
require __DIR__ . '.\vendor\autoload.php';

$conextion = conex();

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $query = "SELECT * FROM `usuario` WHERE `id` = '$id'";
    $result = mysqli_query($conextion, $query);
    
    if(mysqli_num_rows($result) == 1){

        $row = mysqli_fetch_array($result);

        $name = $row["name"];
        $last_name = $row["last_name"];
        $email = $row["email"];
        $username = $row["username"]; 
    }
}

if(isset($_POST['id'])){

    $id = $_GET['id'];
    $name = $_POST["name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = hash(
        'sha512',
        '73b0c0eeb6e3b347a4c32822293c71c72dafa8f5b08961c1811ab4025fdf06a5dbf27b3b3200a7731b65ca36ff80a743',
        $_POST["password"]
    );

    $query = "UPDATE `usuario` SET name = '$name', last_name = '$last_name', email = '$email', username = '$username' WHERE id = '$id' ";

    if(mysqli_query($conextion,$query)){
        $_SESSION['message'] = 'Your user was succesfully updated';
        header("Location: main.php");
    }
}
?>

<?php 
include('./includes/header.html');
?>

<section class="update-section">
            <a href="index.html" class="nav__a">Chichilo</a>
            <h1 class="main-section__title">Create a new user</h1>
            <p class="main-section__sub">You cannot enter a used email</p>

            <form action="update.php?id=<?php echo $_GET['id']?>" method="post" class="section-form">

                    <label for="name" class="form-label">Name</label>
                    <input type="text" value="<?php echo $name ?>" name="name" id="name" placeholder="Enter your real name" class="form-input form-input__name" autofocus>

                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" value="<?php echo $last_name ?>" name="lastname" id="lastname" placeholder="Type your real lastname" class="form-input form-input__lastname">

                    <label for="email" class="form-label">Email</label>
                    <input type="email" value="<?php echo $email ?>" name="email" id="email" placeholder="Your email" class="form-input form-input__email">

                    <label for="username" class="form-label">Username</label>
                    <input type="text" value="<?php echo $username ?>" name="username" id="username" placeholder="How do u feel?" class="form-input form-input__username">

                    <label for="password" class="form-label">Password</label>
                    <input type="password" value="<?php echo $password ?>" name="password" id="username" placeholder="Trynna be cool" class="form-input form-input__password">

                    <input name="id" type="submit" value="Update User" class="form-button form-input__submit">
                    <input type="reset"  value="Cancell" class="form-button form-input__reset">
            </form>
        </section>

<?php
include("./includes/footer.html");
?> 


