<?php

//para inciar la sesión se escribe el siguiente comando

session_start();
//session_start() nos permite iniciar la sesion entre el usuario y el servidor para que los datos sean guardados en el array

//para guardar por ejemplo el nombre de un usuario es necesario introducirlo dentro del array

$_SESSION["usuario"] = "Manuel";

//para cerrar la sesion se debe usar el comando 'unset' con el array para un valor en especifico

unset($_SESSION["usuario"]);

//pero si se quiere cerrar la sesion entera 

session_unset();

?>