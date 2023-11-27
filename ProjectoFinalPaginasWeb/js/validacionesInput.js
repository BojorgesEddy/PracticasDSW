function validarFormulario() {
    // Obtener referencias a los campos del formulario
    var nombre = document.getElementById('firstName').value.trim();
    var apellidoPaterno = document.getElementById('lastName').value.trim();
    var apellidoMaterno = document.getElementById('secName').value.trim();
    var email = document.getElementById('email').value.trim();
    var direccion = document.getElementById('address').value.trim();
    var ciudad = document.getElementById('address2').value.trim();
    var telefono = document.getElementById('tel').value.trim();
    var edad = document.getElementById('age').value.trim();
    var genero = document.getElementById('genero').value.trim();
    var nacimiento = document.getElementById('birth').value.trim();
    var codigoPostal = document.getElementById('zip').value.trim();
  
    // Validar cada campo individualmente
    if (nombre === '' || apellidoPaterno === '' || apellidoMaterno === '' || email === '' || direccion === '' || ciudad === '' || telefono === '' || edad === '' || genero === 'N/A' || nacimiento === '' || codigoPostal === '') {
      alert('Por favor, complete todos los campos.');
      return false;
    }
  
    // Validar el formato del correo electrónico
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      alert('Ingrese un correo electrónico válido.');
      return false;
    }
  
    // Validar el formato de la fecha de nacimiento
    var fechaRegex = /^\d{2}\/\d{2}\/\d{4}$/;
    if (!fechaRegex.test(nacimiento)) {
      alert('Ingrese una fecha de nacimiento válida en formato DD/MM/AAAA.');
      return false;
    }
  
    // Si todo está bien, puedes enviar el formulario
    return true;
  }
  
  function validarFormularioAdmin() {
    var nombre = document.getElementById('nombre').value.trim();
    var email = document.getElementById('email').value.trim();
    var password = document.getElementById('password').value.trim();

    // Validar que el campo Nombre no esté vacío
    if (nombre === '') {
      alert('Por favor, ingrese un nombre.');
      return false;
    }

    // Validar el formato del correo electrónico
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      alert('Ingrese un correo electrónico válido.');
      return false;
    }

    // Validar la contraseña tenga al menos 5 caracteres
    if (password.length < 5) {
      alert('La contraseña debe tener al menos 5 caracteres.');
      return false;
    }

    return true; // Si todo está bien, se envía el formulario
}
  