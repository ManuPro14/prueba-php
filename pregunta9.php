<?php

// URL de la API y los parámetros de la solicitud
$url = 'https://api.example.com/data';
$params = array(
    'param1' => 'valor1',
    'param2' => 'valor2'
);

// construir la URL con los parámetros de la solicitud con la funcion http_build_query la cual encadena consultas de la URL
$url_with_params = $url . '?' . http_build_query($params);

// realizar la solicitud HTTP y obtener la respuesta a traves de file_get_contents para tener respuesta de la API
$response = file_get_contents($url_with_params);

// manejar la respuesta de la API
if ($response === false) {
    echo 'Error al realizar la solicitud HTTP';
} else {
    $data = json_decode($response, true);
    // procesar los datos de la API
}

//Finalmente, se decodifica la respuesta de la API utilizando la función json_decode que decodifica un archivoJSON y lo convierte en una variable PHP, en este caso en $data

?>