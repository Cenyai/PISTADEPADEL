<?php

$servername = "localhost";  // Nombre del servidor
$username = "usuario";     // Nombre de usuario de la base de datos
$password = "contraseña";  // Contraseña de la base de datos
$dbname = "padel";   // Nombre de la base de datos

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexión
if (!$conn) {
    die("La conexión falló: " . mysqli_connect_error());
}
echo "Conexión exitosa";
?>



















