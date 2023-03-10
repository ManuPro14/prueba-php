<?php
$servername = "localhost";
$database = "databasename";
$username = "username";
$password = "password";

//creamos la conexión con el comando de MySQL mysqli_connect() e introducimos los valores mencionados arriba

$conn = mysqli_connect($servername, $database, $username, $password);

//ahora se puede crear una condicional para verificar la conexión mediante un if

if(!$conn){
    die("Conexión fallida: " . mysqli_connect_error());
}

//luego de crear la condicional de datos verificados ponemos la salida de un proceso finalizado como correcto

echo "Conexión exitosa";

//y cerramos el ciclo de conexión

mysqli_close($conn);
?>