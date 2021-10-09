<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/font/flaticon.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Report</title>
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
                $conextion = conex();
                verify($conextion);
                $result = read($conextion);

                while($row = mysqli_fetch_row($result)){ ?>
                    <form action="delete.php" method="PATCH">
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
