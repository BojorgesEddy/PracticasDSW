<?php

    $servidor = "127.0.0.1";
    $usuario = "root";
    $clave = "";
    $bd = "registros";

    $conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

    if (isset($_POST["registro"])) {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $guardar = "INSERT INTO administrador VALUES ('','$nombre','$email','$password')";

        $ejecutar = mysqli_query($conexion,$guardar) or die(mysqli_close($conexion));

        mysqli_close($conexion);
    }
    header("Location: registroAdmin2.php?exito=true");
    exit();
?>