<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ejercicio2.css">
    <title>Formulario</title>
</head>
<body>
    <?php
    function enviarMAIL($name, $mail, $text){
        $to="agusdownbad@icloud.com";
        $subject="Comentario";
        $body="Nombre: ".$name."\n"."Mail: ".$mail."\n"."Texto".$text;
        $from= "From: ".$mail;

        mail($to, $subject, $body, $from);
        echo 'Su mail fue enviado correctamente';
        return true;
    }

    if(!isset($_POST['submit'])){
        ?>
        <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method="post">
        <fieldset>
            <p><label>Nombre: <input type="text" name="nombre"></label></p>
            <p><label>mail: <input type="text" name="mail" ></label></p>
            <p><label>Comentario</label></p>
            <p><label><textarea name="texto" cols="30" rows="10"></textarea></label></p>      
            <input type='submit' name='submit'value='Enviar'>
        </fieldset> 
        </form>
    <?php
    }
    else{
        $nombre=$_POST['nombre'];
        $mail=$_POST['mail'];
        $texto=$_POST['texto'];

        enviarMAIL($nombre, $mail, $texto);
    }
    ?>
    

</body>
</html>


