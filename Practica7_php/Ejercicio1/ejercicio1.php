<?php
if(isset($_POST["estilo"])){
    $estilo = $_POST["estilo"];
    setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));
}else{
    if (isset($_COOKIE["estilo"])){
        $estilo = $_COOKIE["estilo"];
        }
    }   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <html>
        <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <title>Cookies en PHP</title>
            <?php
            if (isset($estilo)){
            echo '<link rel="STYLESHEET" type="text/css" href="' . $estilo . '.css">';
            }
            ?>
        </head>
        <body>
            <form action="ejercicio1.php" method="post" class="p-2"> 
                Seleccione el estilo que quiere utilizar:
                <br>
                <select name="estilo">
                <option value="dark">Dark
                <option value="pink">Pink
                <option value="light">Light
                </select>
                <input type="submit" value="Actualizar el estilo">
            </form>
        </b>
</html>
