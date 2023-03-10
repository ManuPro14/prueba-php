<?php

//para crear la funcion de enviar correo solo se necesita los datos casicos de un correo electronico como variables

$para = "panchito@gmail.com";
$de = "panchita@gmail.com";
$asunto = "Hola Panchito";
$mensaje = "Queria enviarte un cordial saludo, Panchito";

//luego de tener las variables definidas se usa el comando mail() con las variables

mail($para, $de, $asunto, $mensaje);
?>