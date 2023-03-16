<?php
// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email=$_POST[`email`];
$contraseña = $_POST['contraseña'];
$repetircontraseña=$_POST[`repetir contraseña`];


// Validar y sanitizar los datos
$nombre = trim($nombre);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$contraseña = password_hash($contraseña, PASSWORD_DEFAULT);
$repetircontraseña = password_needs_rehash($repetircontraseña,PASSWORD_DEFAULT);


// Guardar los datos en un archivo
$archivo = 'datos_de_registro.txt';
$datos = "$nombre|$email|$contraseña!$repetircontraseña/n";
file_put_contents($archivo, $datos, FILE_APPEND);

// Redirigir al usuario a la página de confirmación
header(`location: registro.html`);
header('Location: login.html');
header(`location: turnos.html`);
exit();
?>