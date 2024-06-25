<?php
session_start();
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
    <h1 class="titulo">Formulario</h1>
    <form action="setVars.php" method="POST">
        <table>
            <tr>
                <td>
                    <label for="username">Nombre de Usuario</label>
                </td>
                <td>
                    <input type="text" name="username" id="username" placeholder="Nombre de Usuario" class="form-input">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Contraseña</label>
                </td>
                <td>
                    <input type="password" name="password" id="password" placeholder="Contraseña" class="form-input">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="sent" class="form-button">Enviar formulario</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>