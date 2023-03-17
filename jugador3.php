<?php
// Conectarse a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "padel";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener los datos enviados desde el formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST[`telefono`];
$pista = $_POST[`pista `];

// Ejecutar una consulta para insertar los datos en la tabla correspondiente
$sql = "INSERT INTO jugador3 (nombre, email, telefono, pista) VALUES ('$nombre','$email', `$telefono`, `$pista`)";

if ($conn->query($sql) === TRUE) {
    echo "Los datos se han enviado correctamente.";
} else {
    echo "Error al enviar los datos: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>