<p> Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es
necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función </p>

<h3> mysqli_connect</h3>

<p> Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios: </P>

<h3> $hostname: nombre del servidor <br> $nombreUsuario: nombre de usuario de la base de datos <br>
$contraseña: la contraseña de acceso para el usuario de base de datos </h3>

<p> Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función </p>

<h3> mysqli_select_db </h3>

<p> Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función </p>

<h3>Nombre de la conexion, nombre de la base de datos </h3>

<p> La función mysqli_query () se utiliza para </p>

<h3> Nos permite ejecutar una consulta a la base de datos que hemos seleccionado <br>
Por ejemplo: SELECT * FROM bd </h3>

<p> La función mysqli_query () se utiliza para </p>

<h3> Nombe de la conexion, Consulta </h3>

<p> La cláusula or die() se utiliza para </p>

<h3> Capturar el error si no se pudo conectar a la bd </h3>

<p> y la función mysqli_error () se puede usar para </p>

<h3> Devuelve el ultimo mensaje de error para la llamada mas reciente a una funcion de MySQLi </h3>

<p> se hace un while y la condicion que los valores existentes en la fila se introduzcan en un array <br>
Luego se hace una tabla con sus respectivas filas y columnas, y cada data cell con el indice de la fila[0], fila[1], fila[2]

Luego al final se libera el resultado y se cierra la conexion con la db