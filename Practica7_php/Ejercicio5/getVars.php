<?php
session_start();

if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    $password = $_SESSION["password"];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php if(isset($_SESSION["username"])) {?>
        <p>
            Las variables recuperadas son <br>
            <i>$username = <?php echo $username ?></i> <br>
            <i>$password = <?php echo $password ?></i>
        </p>
        <?php } else {?>
        <p>Las variables de sesi&oacute;n no han sido creadas todav&iacute;a, complete el <a href="form.php">Formulario</a></p>
    <?php } ?>
    <p><a href="form.php">< Volver al form</a></p>
    <br>
</body>
</html>