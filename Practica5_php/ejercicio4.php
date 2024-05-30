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
    <?php
    if (!isset($_SESSION['contador'])){
        $_SESSION['contador'] = 1;
    } else{
        $_SESSION['contador']++;
    } ?>
    <a href='cant_visitas.php'>Cantidad de Visitas</a>
</body>
</html>