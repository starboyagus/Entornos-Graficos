<?php

$headers = "MIME-Version: 1.0\r\n";
$headers .= 'From: Entradas River <riverplate@riverplate.com>' . "\r\n";
$headers .= "CC: jorgebrito@gmail.com\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$to = "agusdownbad@icloud.com";
$subject =  "Entradas RIVER - TACHIRA En el Mas Monumental";
$body = "<html> <head> El burrito Ortega te invita a ver River - Tachira este jueves! </head>
<body> <p> No te pierdas al inolvidable equipo de Demichelis y sus gran jugadores disputar el campeonato de 
libertadores contra el gran y poderoso Deportivo Tachira </p> 
<b> (Entradas desde 2.000.000$) </b> 
</body>
";



mail($to, $subject, $body, $headers);
echo "El mail se ha enviado correctamente"
?>