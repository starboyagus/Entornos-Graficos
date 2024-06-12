<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Forms.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Usuario</title>
</head>
<body class="root">
    <p> <a href='menu.html' class='button'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor'>
    <path fill-rule='evenodd' d='M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-4.28 9.22a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72h5.69a.75.75 0 0 0 0-1.5h-5.69l1.72-1.72a.75.75 0 0 0-1.06-1.06l-3 3Z' clip-rule='evenodd' />
  </svg> Volver al menu</a></p>

<?php
include("conexion.inc");

//captura de datos del FormAlta
$vCity = $_POST["city"];
$vCountry = $_POST["country"];
$vHab = $_POST["hab"];
$vSup = $_POST["sup"];
$vMeters = $_POST["meters"];

//arma la instruccion SQL 
$vSql = "SELECT COUNT(pais) and COUNT(ciudad) as cant FROM ciudades WHERE pais='$vCountry' AND ciudad='$vCity'";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));
$vCant = mysqli_fetch_assoc($vResultado);

// $vCantCiudades = mysqli_result($vResultado, 0);

if($vCant['cant']!=0){
    echo ("<p class='error'> La ciudad y el Pais ya existen </p> <br>");
    }

else {
    $vSql = "INSERT into ciudades (ciudad, pais, habitantes, superficie, tieneMetros)
    values ('$vCity', '$vCountry', '$vHab', '$vSup', '$vMeters')";

    mysqli_query($link, $vSql) or die (mysqli_error($link));

    echo("<p class='success'>La Ciudad fue registrada</p> <br>");

    //Liberar resultados

}

// Cerrar Conexion

mysqli_close($link);

?>

    
</body>
</html>