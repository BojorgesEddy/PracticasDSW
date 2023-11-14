<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" name="registroContacto" method="post">
        <h1>Registros</h1>
        <input type="text" name="Nombre" placeholder="Nombre" required> <br><br>
        <input type="text" name="Telefono" placeholder="Telefono" required> <br><br>
        <input type="email" name="Correo" placeholder="Email" required> <br><br>
        <input type="text" name="Comentarios" placeholder="comentarios" required> <br><br>
        <input type="submit" name="registro">
    </form>
</body>
</html>

<?php
    $servidor = "127.0.0.1";
    $usuario = "root";
    $clave = "";
    $bd = "registros";

    $conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

    if (isset($_POST['registro'])) {
        $nombre = $_POST['Nombre'];
        $telefono = $_POST['Telefono'];
        $correo = $_POST['Correo'];
        $comentarios = $_POST['Comentarios'];

        $guardar = "INSERT INTO usuarios VALUES ('$nombre','$telefono','$correo','$comentarios','')";

        $ejecutor = mysqli_query($conexion,$guardar);
    }

    mysqli_close($conexion);
?>
