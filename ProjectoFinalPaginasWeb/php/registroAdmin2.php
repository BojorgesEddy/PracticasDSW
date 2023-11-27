<html lang="en" data-bs-theme="dark"><head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title></title>
    <?php
        session_start();
        $usuario = $_SESSION['correo'];

        if (!isset($usuario)) {
            header('location: ../loginAdmin.html');
        }
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">

    
    <!-- Custom styles for this template -->
    <link href="css/registro.css" rel="stylesheet">
  </head>
  <body class="bg-body-tertiary">
   
<div class="container">
  <main>

    
<div class="container">
  <header class="border-bottom lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="verRegistros.php">INICIO</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-body-emphasis text-decoration-none" href="verRegistros.php">Turismo</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <!-- <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
        </a> -->
        <a class="btn btn-sm btn-outline-secondary" href="cerrarSesion.php">cerrar sesion</a>
      </div>
    </div>
  </header>

<script src="js/validacionesInput.js"></script>
    <div class="py-5 text-center">
      <!-- <img class="d-block mx-auto mb-4" src="http://www.w3.org/2000/svg" alt="" width="72" height="57"> -->
      
      <h2>Registro de Administrador</h2>
      <p class="lead">Ingrese nuevo administrador</p>
    </div>

    <div class="row g-5" style="padding-left: 300px;">
      
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Cuenta</h4>
        <form class="needs-validation" action="php/registroAdmin.php" method="post" onsubmit="return validarFormularioAdmin()">
          <div class="row g-3">
            
            <div class="col-12">
              <label for="address" class="form-label">Nombre</label>
              <input name="nombre" type="text" class="form-control" id="nombre" placeholder="" required="">
              <div class="invalid-feedback">
                Ingresar su direccion.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Correo Electronico <span class="text-body-secondary"></span></label>
              <input name="email" type="email" class="form-control" id="email" placeholder="ejemplo@ejemplo.com" required="">
              <div class="invalid-feedback">
                Ingrese un correo valido.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Contraseña</label>
              <input name="password" type="password" class="form-control" id="password" placeholder="" required="">
              <div class="invalid-feedback">
                Ingresar una contraseña valida.
              </div>
            </div>


          <hr class="my-4">

          <button name="registro" class="w-100 btn btn-primary btn-lg" type="submit">Registrar</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-body-secondary text-center text-small">
    <p class="mb-1"></p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="inicio.html">VOLVER</a></li>
    </ul>
  </footer>
</div>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="checkout.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
      // Verificar la sesión del usuario al cargar la página
      window.onload = function() {
        verificarSesion();
      };
    
      // Función para verificar la sesión del usuario
      function verificarSesion() {
        // Realiza una petición al servidor para verificar la sesión (usando AJAX o Fetch API)
        // Aquí puedes hacer una petición a tu servidor para verificar la sesión del usuario
        // Por ejemplo, una llamada a un archivo PHP que verifique si la sesión está activa
    
        // Supongamos que tienes una página PHP llamada verificar_sesion.php
        fetch('verificarSesion.php')
        .then(response => {
          if (response.ok) {
          // El usuario está autenticado, puedes realizar acciones o redirigir
          console.log('Usuario autenticado');
          } else {
          // El usuario no está autenticado, puedes redirigir a la página de inicio de sesión
          console.log('Usuario no autenticado');
          window.location.href = 'loginAdmin.html'; // Redirigir a la página de inicio de sesión
          }
        })
        .catch(error => {
          console.error('Error al verificar la sesión:', error);
        });
      }
    </script>

    <script>
      // Función para obtener parámetros de la URL
      function obtenerParametro(name) {
          const urlParams = new URLSearchParams(window.location.search);
          return urlParams.get(name);
      }

      // Verificar si hay un parámetro "exito" en la URL
      const exito = obtenerParametro('exito');

      // Mostrar mensaje de confirmación si existe el parámetro "exito"
      if (exito === 'true') {
          alert('Los datos se guardaron correctamente.');
      }
  </script>
</body></html>