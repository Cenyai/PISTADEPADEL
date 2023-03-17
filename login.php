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

// Obtener los datos ingresados por el usuario
$username = $_POST['username'];
$signal = $_POST['password'];

// Ejecutar una consulta para verificar si las credenciales son correctas
$sql = "SELECT * FROM users WHERE username='$username' AND signal ='$password'";
$result = $conn->query($sql);

// Verificar si se encontraron resultados
if ($result->num_rows > 0) {
    // Las credenciales son correctas, redirigir al usuario a la página de inicio
    header("Location: home.php");
} else {
    // Las credenciales son incorrectas, mostrar un mensaje de error
    echo "Invalid username or signal.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>