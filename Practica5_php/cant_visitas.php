<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <a href='ejercicio5.php'></a>
    <?php
    echo 'Has visitado '. ($_SESSION['contador']) . ' paginas'    
    ?>
    <br>
    <br>
    <a href='ejercicio5.php'>Pagina Principal</a>
</body>
</html>