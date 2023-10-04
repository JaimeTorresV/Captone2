<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Validar y procesar los datos (en una implementación real, debes agregar más validaciones)
    
    // Conectar a la base de datos (esto debe configurarse según tu entorno)
    $servername = "localhost";
    $db_username = "tu_usuario_db";
    $db_password = "tu_contraseña_db";
    $dbname = "nombre_db";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }

    // Insertar los datos en la base de datos (debes agregar seguridad y encriptación)
    $sql = "INSERT INTO usuarios (username, password, email) VALUES ('$username', '$password', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso.";
    } else {
        echo "Error en el registro: " . $conn->error;
    }

    $conn->close();
}
?>
