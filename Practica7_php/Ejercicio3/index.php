<?php
session_start();

if (isset($_POST["username"])) {
    setcookie("ck_username", $_POST["username"], time()+86400*365);
    $username = $_POST["username"];
} else if (isset($_COOKIE["ck_username"])) {
    $username = $_COOKIE["ck_username"];
} else {
    $username = "";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e94f1b6b83.js" crossorigin="anonymous"></script>
</head>
<body class="bg-dark p-2 text-white">
    <h1 class="titulo">Formulario</h1>
    <form action="index.php" method="POST">
        <table>
            <tr>
                <td>
                    <label for="username">Nombre de Usuario</label>
                </td>
                <td>
                    <input type="text" name="username" id="username" placeholder="Nombre de Usuario" class="form-input" value="<?php echo $username; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-primary">Cargar Usuario</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>