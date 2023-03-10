<?php
//hoy funciones para leer archivos como por ejemplo el file_get_contents que basicamente lee el archivo y lo devuelve encadenado

$file = 'archivo.txt';
$content = file_get_contents($file);
echo $content;

//el comando lee el archivo que se encuentra dentro de la variable y se muestra el contenido dentro de echo

//para le escritura se tiene la funcion file_put_contents

$file = 'archivo.txt';
$content = 'Este es el contenido que se escribirá en el archivo';
file_put_contents($file, $content);

//se tiene un archivo ($file) donde se escribe un texto ($content)


?>