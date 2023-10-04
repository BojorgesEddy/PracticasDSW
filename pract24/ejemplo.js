/*
var numero1 = 2;
var numero2 = 3;

var resultado = numero1 + numero2;

alert(resultado);
*/

/*
var mensaje = "Bienvenidos a nuestro sitio web, ";
var texto_1 = "Texto comillas dobles, ";
var texto_2 = 'Texto con comillas simplres...';

alert(mensaje + texto_1 + texto_2);
*/

/*
var clienteRegistrado = false;
var ivaIncluido = true;

alert(clienteRegistrado);
*/

/*
var array = ['tijuana', 'Rosarito', 'Ensenada', 'Mexicali'];
alert(array[3]);
*/

/*
var numero1 = prompt("Ingrese el primer numero");
var numero2 = prompt("Ingrese el segundo numero");
var resultado = (parseInt(numero1)  + parseInt(numero2));

alert(resultado);
*/


var eleccion = prompt("Ingrese qué quiere hacer: suma, resta, mult o div");
var numero1 = prompt("Ingrese el primer número");
var numero2 = prompt("Ingrese el segundo número");
var resultado;

if (eleccion === "suma") {
    resultado = parseInt(numero1) + parseInt(numero2);
} else if (eleccion === "resta") {
    resultado = parseInt(numero1) - parseInt(numero2);
} else if (eleccion === "mult") {
    resultado = parseInt(numero1) * parseInt(numero2);
} else if (eleccion === 'div') {
    resultado = parseInt(numero1) / parseInt(numero2);
} else {
    alert("Operación no válida");
}

alert("El resultado es: " + resultado);
