<?php
	$conexion = mysqli_connect("localhost","root","","registros") or die ("Problemas con la conexion");
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
	<head>
		<title></title>
	<?php
        session_start();
        $usuario = $_SESSION['correo'];

        if (!isset($usuario)) {
            header('location: ../loginAdmin.html');
        }
    ?>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		</head>
	<body align="center">
		<div class="container">
		<header class="border-bottom lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="verRegistros.php">INICIO</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">Vista de Registros - Administrador</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <!-- <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
        </a> -->
        <a class="btn btn-sm btn-outline-secondary" href="cerrarSesion.php">cerrar sesion</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-3 border-bottom">
    <nav class="nav nav-underline justify-content-between">
      <a class="nav-item nav-link link-body-emphasis" href="#">Lista de Registros</a>
      <a class="nav-item nav-link link-body-emphasis" href="registroAdmin2.php">Registrar Nuevo Administrador</a>
    </nav>
  </div>

		</div>
			<table class="table table-striped" > 
				<thead>
					<tr>
						<th scope="col">Nombre</th>
						<th scope="col">Apellido Materno</th>
						<th scope="col">Apellido Paterno</th>
						<th scope="col">Email</th>
						<th scope="col">Ciudad</th>
						<th scope="col">Telefono</th>
						<th scope="col">Edad</th>
						<th scope="col">Genero</th>
						<th scope="col">Nacimiento</th>
						<th scope="col">Codigo Postal</th>
						<th scope="col">Camisa</th>
						<th scope="col">ID_REGISTRO</th>
					</tr>
				</thead>
				

				<?php
					$sql = "SELECT * FROM usuarios";
					$result = mysqli_query($conexion,$sql)or die("Problemas en el SELECT". mysqli_error($conexion));

					while($mostrar = mysqli_fetch_array($result)){
				?>

				<tr>
					<td><?php echo $mostrar['Nombre'];?></td>
					<td><?php echo $mostrar['Apellido Paterno'];?></td>
					<td><?php echo $mostrar['Apellido Materno'];?></td>
					<td><?php echo $mostrar['Email'];?></td>
					<td><?php echo $mostrar['Ciudad'];?></td>
					<td><?php echo $mostrar['Telefono'];?></td>
					<td><?php echo $mostrar['Edad'];?></td>
					<td><?php echo $mostrar['Genero'];?></td>
					<td><?php echo $mostrar['Nacimiento'];?></td>
					<td><?php echo $mostrar['Codigo Postal'];?></td>
					<td><?php echo $mostrar['Camisa'];?></td>
					<th scope="row"><?php echo $mostrar['ID_REGISTRO'];?></th>
				</tr>
				<?php
					}
					mysqli_close($conexion);
				?>
			</table>
	</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>