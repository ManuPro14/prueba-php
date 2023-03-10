<?php
//una de las formas en las que se puede hacer esto es con el sistema Memcached
$memcached = new Memcached();
$memcached->addServer('localhost', 11211);

$key = 'cache_key';
$data = $memcached->get($key);
if (!$data) {
    $data = get_data_from_database(); // obtiene datos de la base de datos
    $memcached->set($key, $data, 3600); // almacena los datos en caché durante una hora
}

// utiliza los datos obtenidos
echo $data;
?>