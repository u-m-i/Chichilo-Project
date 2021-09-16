<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/font/falticon.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Report</title>
</head>
<body>
    <header class="header">        
        <section class="header__section">
            <div class="section__icons">
               <!-- <p class=" whatsapp-mess">¡Pide tu comida a Domicilio!</p>-->
                <span class="flaticon-003-whatsapp"></span>
                <span class="flaticon-011-instagram"></span>
                <span class="flaticon-001-facebook"></span>
            </div>
        </section>
        
        <nav class="header__nav">
            <section class="header__section">
                <a class="nav__a"><img class="header-logo" src="assets/img/" alt="Cantina Chichilo"></a>
            </section>
            <section class="header__section">
                <a target="_blanck" href="menu.html" class="nav__section--a">Menú</a>
                <a target="_blanck" href="who.html" class="nav__section--a">Nuestra Historia</a>
                <a target="_blanck" href="touch.html" class="nav__section--a">Contáctanos</a>
            </section>
        </nav>
    </header>
    <main class="main">
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
                $data_base = conex();
                verify($data_base);
                $conextion = new mysqli($data_base['host'], $data_base['user'], $data_base['password'], $data_base['dbname']);
                $result = read($conextion);

                while($row = mysqli_fetch_row($result)){ ?>
                    <form action="delete.php">
                        <tr><td><?php echo "{$row[0]}" ; ?></td>
                        <td><?php echo "{$row[1]}"; ?></td>
                        <td><?php echo "{$row[2]}"; ?></td>
                        <td><?php echo "{$row[3]}"; ?></td>
                        <td><a name = "email" href=".\update.php?email='<?php echo "{$row[3]}"; ?>'">Modify sign</a></td>
                        <td><a name = "email" href=".\delete.php?email='<?php echo "{$row[3]}"; ?>'">Delete sign</a></td></tr>
                    </form>
            <?php
                };
            mysqli_free_result($result);
            mysqli_close($conextion); 
        ?>
        </table>
    </main>
    
</body>
</html>
