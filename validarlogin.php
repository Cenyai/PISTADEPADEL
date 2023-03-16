<?php
// Obtener los datos del formulario
$nombre = $_POST['nombre'];

$contraseña = $_POST['contraseña'];



// Validar y sanitizar los datos
$nombre = trim($nombre);
$contraseña = password_hash($contraseña, PASSWORD_DEFAULT);



// Guardar los datos en un archivo
$archivo = 'datos_de_registro.txt';
$datos ="|$nombre|$contraseña /n";
file_put_contents($archivo, $datos, FILE_APPEND);

// Redirigir al usuario a la página de confirmación

header(`location: turnos.html`);
exit();
?>





