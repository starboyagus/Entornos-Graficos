<!DOCTYPE html>
<html lang="en">
<head>    
    <link rel="stylesheet" href="Forms.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja</title>
</head>
<body class="root">
    <p> <a href="menu.html" class="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-4.28 9.22a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72h5.69a.75.75 0 0 0 0-1.5h-5.69l1.72-1.72a.75.75 0 0 0-1.06-1.06l-3 3Z" clip-rule="evenodd" />
    </svg> Volver al menu</a></p>

    <?php
    include("conexion.inc");
    $vID = $_POST['id'];

    $vSql = "SELECT * FROM ciudades WHERE id='$vID'";
    $vResultado = mysqli_query($link, $vSql);

    if(mysqli_num_rows($vResultado) == 0)
    {
        echo("<p>Ciudad Inexistente </p>");
        echo("<p>Recuerde que puede consultar la lista en cualquier momento </p>");
        echo("<p> <a href='consulta.php' class='button'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor'>
        <path fill-rule='evenodd' d='M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z' clip-rule='evenodd' />
        <path fill-rule='evenodd' d='M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z' clip-rule='evenodd' />
      </svg>
       Consulta </a></p>");
    }

    else{
        //Arma la instruion sql

        $vSql = "DELETE FROM ciudades WHERE id='$vID'";
        mysqli_query($link, $vSql);
        
        echo("<p>La ciudad fue borrada correctamente </p>");

    }

    // Liberar resultados
    mysqli_free_result($vResultado);

    // Cerrar conexion

    mysqli_close($link);
    ?>

    
</body>
</html>