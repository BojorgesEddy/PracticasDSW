<?php

    $servidor = "127.0.0.1";
    $usuario = "root";
    $clave = "";
    $bd = "registros";

    $conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

    if (isset($_POST["registro"])) {
        $nombre = $_POST["nombre"];
        $apellidoPaterno = $_POST["paterno"];
        $apellidoMaterno = $_POST["materno"];
        $email = $_POST["email"];
        $direccion = $_POST["direccion"];
        $ciudad = $_POST["ciudad"];
        $telefono = $_POST["telefono"];
        $edad = $_POST["edad"];
        $genero = $_POST["genero"];
        $nacimiento = $_POST["nacimiento"];
        $codigoPostal = $_POST["codigoPostal"];
        $camisa = $_POST["tallaSelect"];

        $guardar = "INSERT INTO usuarios VALUES ('$nombre','$apellidoPaterno','$apellidoMaterno','$email','$direccion','$ciudad','$telefono','$edad','$genero','$nacimiento','$codigoPostal','$camisa','')";

        $ejecutar = mysqli_query($conexion,$guardar) or die(mysqli_close($conexion));

        mysqli_close($conexion);
    }
    header("Location: ../registro.html?exito=true");
    exit();
?>