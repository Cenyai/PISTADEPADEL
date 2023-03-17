<!DOCTYPE html>
<html>
<head>
    <title>Conexión de varios archivos HTML en un archivo PHP</title>
</head>
<body>
    <?php
        // Incluye el archivo HTML1
        include 'Portada.html';

        // Incluye el archivo HTML2
        include 'Registro.html';

        // Incluye el archivo HTML3
        include 'login.html';

        // Incluye el archivo HTML4
        include `turnos.html`;

        // Incluye el archivo HTML5
        include `jugadores.html`;
    ?>
</body>
</html>