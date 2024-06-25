<?php
session_start();

if (isset($_POST["category"])) {
    setcookie("ck_category", $_POST["category"], time()+86400*365);
    $category = $_POST["category"];
} else if (isset($_COOKIE["ck_category"])) {
    $category = $_COOKIE["ck_category"];
} else {
    $category = "";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e94f1b6b83.js" crossorigin="anonymous"></script>
</head>
<body class="bg-dark p-2 text-white">
    <h1 class="titulo">Periódico</h1>
    <form action="index.php" method="POST">
        <fieldset class="form-fieldset">
            <legend>Buscar noticias sobre:</legend>
        <input class="form-check-input" type="radio" name="category" id="radio-politics" value="politics" <?php if($category == "politics") echo "checked"; ?>>
        <label class="form-check-label" for="radio-politics">Política</label>
        <br>
        <input class="form-check-input" type="radio" name="category" id="radio-economy" value="economy" <?php if($category == "economy") echo "checked"; ?>>
        <label class="form-check-label" for="radio-economy">Economía</label>
        <br>
        <input class="form-check-input" type="radio" name="category" id="radio-sports" value="sports" <?php if($category == "sports") echo "checked"; ?>>
        <label class="form-check-label" for="radio-sports">Deportes</label>
        </fieldset>
        <button type="submit" class="boton px-5 mt-2">Filtrar</button>
    </form>
    <a class="link" href="remove_filter.php">Remover Filtro</a>
    <br>
    <br>
    <?php if($category == "politics" or !$category) { ?>
    <div class="new-container">
        <b>Noticia política</b>
        <p class="new-text"><small>Gobierno, inician los preparativos para el 9 de Julio: cambios en los "mandamientos" del Pacto de Mayo y dudas por la agenda</small></p>
    </div>
    <?php } if($category == "economy" or !$category) { ?>
    <div class="new-container">
        <b>Noticia económica</b>
        <p class="new-text"><small>El Banco Central compra poco y el mercado cree que se acerca el fin del actual esquema cambiario</small></p>
    </div>
    <?php } if($category == "sports" or !$category) { ?>
    <div class="new-container">
        <b>Noticia deportiva</b>
        <p class="new-text"><small>Una Inglaterra inconexa empató con Eslovenia pero igual se quedó con el Grupo C de la Eurocopa</small></p>
    </div>
    <?php } ?>
    <br>
</body>
</html>