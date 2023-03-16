<?php
// Conectarse a la base de datos
$servername = "localhost";
$username = "nombre_usuario";
$email = "email";
$password = "contraseña";
$repetirpassword = "repetircontraseña";

$conn = new mysqli($servername, $username,$email, $password, $repetirpassword);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$password = $_POST["password"];

// Insertar los datos en la tabla "usuarios"
$sql = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";
if ($conn->query($sql) === TRUE) {
  echo "Registro exitoso!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>





