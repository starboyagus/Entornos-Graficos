<?php
session_start();

if (isset($_POST["sent"])) {
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
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
    <?php if(isset($_POST["sent"])) {?>
        <p>
            Variables creadas con &eacute;xito <br>
            <i>$_SESSION['username'] = <?php echo $_SESSION["username"] ?></i> <br>
            <i>$_SESSION['password'] = <?php echo $_SESSION["password"] ?></i>
        </p>
    <?php } else {?>
        <p>Para crear las variables de sesión, complete el <a href="form.php">Formulario</a></p>
    <?php } ?>
    <p><a href="form.php">< Volver al form</a></p>
    <br>
</body>
</html>