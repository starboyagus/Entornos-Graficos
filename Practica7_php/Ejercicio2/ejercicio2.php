<?php
if(!isset($_COOKIE['visitas']))
{
    $visitas = 1;
    setcookie("visitas",$visitas, time()+3600*24*365);
}
else{
    $visitas = $_COOKIE['visitas'] + 1;
    setcookie("visitas",$visitas, time()+ 3600*24*365);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    <div class="p-2">
        <?php
        if($visitas >=1)
        {
            echo "Esta es tu visita número " .$_COOKIE['visitas'];
            }
        else{
            echo 'Bienvenido, esta es la primera vez que visitas esta pagina';
        }
        ?>
    </div>
</body>
</html>