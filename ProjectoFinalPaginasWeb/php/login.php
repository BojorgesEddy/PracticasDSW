<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "registros";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener valores del formulario
    $correo = $_POST['correo'];
    $contrasena = $_POST['password'];

    // Consulta SQL para verificar la existencia del usuario
    $sql = "SELECT * FROM administrador WHERE correo = '$correo' AND contraseña = '$contrasena'";
    $result = $conn->query($sql);

    // Verificar si se encontró un registro
    if ($result->num_rows > 0) {
        // Iniciar sesión y redirigir a inicio.html
        session_start();
        $_SESSION['correo'] = $correo;
        $conn->close();
        header("Location: verRegistros.php");
        exit;
    } else {
        $conn->close();
        header("Location: ../loginAdmin.html");
    }

    $conn->close();
}
?>
