<?php

// definir el namespace para las clases del proyecto
namespace MiProyecto;

// definir la clase Usuario dentro del namespace MiProyecto
class Usuario {
    public function saludar() {
        echo "Hola, soy un usuario de MiProyecto";
    }
}

// crear un objeto de la clase Usuario del namespace MiProyecto
$usuario = new \MiProyecto\Usuario();
$usuario->saludar(); // Salida: Hola, soy un usuario de MiProyecto

?>