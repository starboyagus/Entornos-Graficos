<?php

$link = mysqli_connect("localhost:3307","root") or die ("Problemas de conexion a la base de datos");

mysqli_select_db($link, "prueba");

?>
