<?php
// Recibe los datos del jugador
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$pista = $_POST[`pista`];

// Conecta a la base de datos
$conn = mysqli_connect("localhost", "usuario", "contraseña", "padel");

// Verifica si la conexión es exitosa
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Inserta los datos del jugador en la base de datos
$sql = "INSERT INTO jugadores (nombre, apellido, teléfono, pista) VALUES ('$nombre', '$apellido', '$telefono', `$pista`)";

if (mysqli_query($conn, $sql)) {
    echo "Datos del jugador guardados correctamente";
} else {
    echo "Error al guardar los datos del jugador: " . mysqli_error($conn);
}

// Cierra la conexión a la base de datos
mysqli_close($conn);

// Recibe los datos del jugador
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$pista = $_POST[`pista`];

// Conecta a la base de datos
$conn = mysqli_connect("localhost", "usuario", "contraseña", "padel");

// Verifica si la conexión es exitosa
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Inserta los datos del jugador en la base de datos
$sql = "INSERT INTO jugadores (nombre, apellido, teléfono, pista) VALUES ('$nombre', '$apellido', '$telefono', `$pista`)";

if (mysqli_query($conn, $sql)) {
    echo "Datos del jugador guardados correctamente";
} else {
    echo "Error al guardar los datos del jugador: " . mysqli_error($conn);
}

// Cierra la conexión a la base de datos
mysqli_close($conn);

// Recibe los datos del jugador
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$pista = $_POST[`pista`];

// Conecta a la base de datos
$conn = mysqli_connect("localhost", "usuario", "contraseña", "padel");

// Verifica si la conexión es exitosa
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Inserta los datos del jugador en la base de datos
$sql = "INSERT INTO jugadores (nombre, apellido, teléfono, pista) VALUES ('$nombre', '$apellido', '$telefono', `$pista`)";

if (mysqli_query($conn, $sql)) {
    echo "Datos del jugador guardados correctamente";
} else {
    echo "Error al guardar los datos del jugador: " . mysqli_error($conn);
}

// Cierra la conexión a la base de datos
mysqli_close($conn);

// Recibe los datos del jugador
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$pista = $_POST[`pista`];

// Conecta a la base de datos
$conn = mysqli_connect("localhost", "usuario", "contraseña", "padel");

// Verifica si la conexión es exitosa
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Inserta los datos del jugador en la base de datos
$sql = "INSERT INTO jugadores (nombre, apellido, teléfono, pista) VALUES ('$nombre', '$apellido', '$telefono', `$pista`)";

if (mysqli_query($conn, $sql)) {
    echo "Datos del jugador guardados correctamente";
} else {
    echo "Error al guardar los datos del jugador: " . mysqli_error($conn);
}

// Cierra la conexión a la base de datos
mysqli_close($conn);
?>