<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/home.css" >
    <link rel="stylesheet" href="../css/font/flaticon.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>
<header class="header">        
        
        <section class="header__section">
            <a href="index.html" class="nav__a">Chichilo</a>
        </section>

        <nav class="header__nav">    
            <section class="nav__section icons">
                <div class="section__icons">
                    <a href="./"><span class="flaticon-003-whatsapp"></span></a>
                    <a href="https://www.instagram.com/cantinachichilo/?hl=en"><span class="flaticon-011-instagram"></span></a>
                    <a href="https://www.facebook.com/chichilodebuenosaires/"><span class="flaticon-001-facebook"></span></a>
                </div>
            </section>
            <section class="nav__section links">
                <a target="_blanck" href="menu.html" class="nav__section--menu">Menú</a>
                <a target="_blanck" href="who.html" class="nav__section--who">Nuestra Historia</a>
                <a target="_blanck" href="touch.html" class="nav__section--touch">Contáctanos</a>
                <a href="./" class="nav__section--profile"> <img src="assets/img/user.png" alt="Your Profile">
                    <ul class="profile__menu">
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </a>
            </section>
        </nav>
    </header>
    <main>
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
            $email = $_PATCH['email'];

            if(verify($conextion)){
                update_user($conextion, $email);
            }

    ?>
    </table>
    </main>    
</body>
</html>