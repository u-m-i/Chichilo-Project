<?php
//Call the components
require __DIR__ . '.\vendor\autoload.php';
//Header 
include('./scr/header.php')
?>

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
                $conextion = conex();
                $result = read($conextion);

                while($row = mysqli_fetch_row($result)){ ?>
                    <form action="delete.php" method="delete">
                        <tr>
                            <td><?php echo "{$row[0]}" ; ?></td>
                            <td><?php echo "{$row[1]}"; ?></td>
                            <td><?php echo "{$row[2]}"; ?></td>
                            <td><?php echo "{$row[3]}"; ?></td>
                            <td><a name = "email" href=".\update.php?email='<?php echo "{$row[3]}"; ?>'">Modify sign</a></td>
                            <td><a name = "email" href=".\delete.php?email='<?php echo "{$row[3]}"; ?>'">Delete sign</a></td>
                        </tr>
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
