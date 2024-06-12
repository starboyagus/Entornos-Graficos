<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Consulta.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado con Paginacion</title>
</head>
<body class="root">

<p> <a href="menu.html" class="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-4.28 9.22a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72h5.69a.75.75 0 0 0 0-1.5h-5.69l1.72-1.72a.75.75 0 0 0-1.06-1.06l-3 3Z" clip-rule="evenodd" />
      </svg> Volver al menu</a></p>

<?php

include("conexion.inc");

$cant_por_pag = 2;
$pagina = isset ($_GET['pagina']) ? $_GET['pagina'] : null ;

if (!$pagina) {

    $inicio = 0;
    $pagina = 1;

}

else {
    $inicio = ($pagina - 1 ) * $cant_por_pag;
} // Total de paginas

$vSql = "SELECT * FROM ciudades";
$vResultado = mysqli_query($link, $vSql);
$total_ciudades = mysqli_num_rows($vResultado);

$total_paginas = ceil($total_ciudades/ $cant_por_pag);
echo "<p> Numero de registros encontrados: ". $total_ciudades . "</p>";
echo "<p> Se muestran paginas de ". $cant_por_pag. " ciudades cada una </p>";
echo "<p>Mostrando la pagina ". $pagina. " de ". $total_paginas. "</p>";

$vSql = "SELECT * FROM ciudades"." limit " . $inicio . "," . $cant_por_pag;
$vResultado = mysqli_query($link,$vSql);
$total_ciudades= mysqli_num_rows($vResultado);

?>

<table class="consulta">
        <tr>
            <th> ID </th>
            <th> Ciudad </th>
            <th> Pais </th>
            <th> Habitantes </th>
            <th> Superficie (km2) </th>
            <th> Tiene Metros </th>
        </tr>
    <?php
    while ($fila = mysqli_fetch_array($vResultado))
    {
        ?>
        <tr>
            <td><?php echo($fila['id']); ?> </td>
            <td><?php echo($fila['ciudad']); ?> </td>
            <td><?php echo($fila['pais']); ?> </td>
            <td><?php echo($fila['habitantes']); ?> </td>
            <td><?php echo($fila['superficie']); ?> </td>
            <td><?php echo($fila['tieneMetros']); ?> </td>
        </tr>
    <?php
    }

    // Liberar resultados

    mysqli_free_result($vResultado);

    // Cerrar conexion

    mysqli_close($link)
    ?>

</table>

<div class='paginas'>
    
<?php   

if ($total_ciudades > 1){
    for ($i=1; $i<=$total_paginas;$i++){
        if ($pagina == $i)

        //Si muestro el indice de la pagina actual, no coloco enlace

        echo $pagina . "";
        else

        //Si la  pagina no es la actual, coloco el enlace para ir a esa pagina

        echo "<a href='Listado_pag.php?pagina= " . $i ."'>" . $i . "</a>";}
        }?>   
    </div> 
</body>
</html>