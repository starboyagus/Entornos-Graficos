<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Forms.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificacion</title>
</head>
<body class="root">
    <p> <a href="menu.html" class="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-4.28 9.22a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72h5.69a.75.75 0 0 0 0-1.5h-5.69l1.72-1.72a.75.75 0 0 0-1.06-1.06l-3 3Z" clip-rule="evenodd" />
    </svg> Volver al menu</a></p>

    <?php
    include("conexion.inc");
    //Captura daots del form anterior

    $vID = $_POST['id'];
    $vCity = $_POST['city'];
    $vCountry = $_POST['country'];
    $vHab = $_POST['hab'];
    $vSup = $_POST['sup'];
    $vTieneMetros = $_POST['tieneMetros'];

    //Arma la instruccion SQL
    $vSql = "UPDATE ciudades set ciudad='$vCity', pais='$vCountry', habitantes='$vHab', superficie='$vSup', tieneMetros='$vTieneMetros' where id='$vID'";

    mysqli_query($link, $vSql) or die (mysqli_error($link));

    echo("<p>La ciudad fue modifiada</p>");

    //Cerrar la conexion
    mysqli_close($link);
    ?>
    
</body>
</html>