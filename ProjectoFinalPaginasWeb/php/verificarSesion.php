<?php
// Iniciar la sesión
session_start();

// Verificar si la variable de sesión 'loggedin' está configurada y es verdadera
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // El usuario está autenticado
    echo 'Sesión activa como: ' . $_SESSION['correo'];
} else {
    // Redirigir a la página de inicio de sesión si no hay sesión activa
    header("Location: ../loginAdmin.html");
    exit;
}
?>
