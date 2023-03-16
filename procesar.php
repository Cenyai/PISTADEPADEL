<?php

// Obtener los datos enviados desde el formulario
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$diasemana = $_POST['diasemana'];

// Abrir el archivo HTML para escritura
$archivo = fopen('Jugadores.html', 'a');

// Escribir los datos en el archivo HTML
fwrite($archivo, "<p>Nombre: $nombre</p><p>Edad: $edad</p><p>DíaSemana: $Diasemana</p>");

// Cerrar el archivo
fclose($archivo);

// Redirigir al usuario a la página de inicio
header('Location: index.html');
?>























?>