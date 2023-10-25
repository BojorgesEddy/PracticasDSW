// Declaración de un arreglo que contiene los nombres de las imágenes de las Maravillas del Mundo.
let maravillas = ["albedo.svg", "cocytus.svg", "demiurge.svg", "fluder-paradyne.svg", "gazef-stronoff.svg","goblin.svg","momonga.svg","satoru.svg","shalltear.svg","Zesshi.svg"];

// Declaración de un arreglo que contiene las respuestas correctas para cada Maravilla.
let correcta = [1,0,2,1,2,0,1,0,0,0];

// Declaración de un arreglo bidimensional que almacena las opciones para cada pregunta.
let opciones = [];

// Agregar las opciones a la matriz "opciones".
opciones.push(["Satoru", "Albedo", "Gazef Stronoff","Cocytus"]);
opciones.push(["Cocytus", "Demiurge", "Gazef Stronoff","Cocytus"]);
opciones.push(["Albedo", "Goblin Slayer", "Demiurge","Cocytus"]);
opciones.push(["Demiurge", "Fluder Paradyne", "Gazef Stronoff","Cocytus"]);
opciones.push(["Albedo", "Demiurge", "Gazef Stronoff","Cocytus"]);
opciones.push(["Goblin Slayer", "Demiurge", "Gazef Stronoff","Cocytus"]);
opciones.push(["Albedo", "Momonga", "Gazef Stronoff","Cocytus"]);
opciones.push(["Satoru Gojo", "Fluder Paradyne", "Gazef Stronoff","Cocytus"]);
opciones.push(["Shalltear", "Demiurge", "Gazef Stronoff","Cocytus"]);
opciones.push(["Zesshi", "Demiurge", "Gazef Stronoff","Cocytus"]);

// Inicialización de variables para rastrear el estado del juego.
let posActual = 0;
let cantidadAcertadas = 0;

// Función para comenzar el juego.
function comenzarJuego(){
    posActual = 0;
    cantidadAcertadas = 0;
    // Ocultar la pantalla inicial y mostrar la pantalla de juego. 
    document.getElementById("pantalla-inicial").style.display = "none";
    document.getElementById("pantalla-juego").style.display = "block";
    cargarMaravilla();
}

// Función para cargar la siguiente pregunta.
function cargarMaravilla(){
    if(maravillas.length <= posActual){
        terminarJuego();
    }
    else{
        limpiarOpciones();

        // Mostrar la imagen de la Maravilla y las opciones correspondientes en la interfaz.
        document.getElementById("imgMaravilla").src = "img/" + maravillas[posActual];
        document.getElementById("n0").innerHTML = opciones[posActual][0];
        document.getElementById("n1").innerHTML = opciones[posActual][1];
        document.getElementById("n2").innerHTML = opciones[posActual][2];
        document.getElementById("n3").innerHTML = opciones[posActual][3];
    }
}

// Función para limpiar las clases de estilo de las opciones.
function limpiarOpciones(){
    document.getElementById("n0").className = "nombre";
    document.getElementById("n1").className = "nombre";
    document.getElementById("n2").className = "nombre";
    document.getElementById("n3").className = "nombre";
    document.getElementById("l0").className = "letra";
    document.getElementById("l1").className = "letra";
    document.getElementById("l2").className = "letra";
    document.getElementById("l3").className = "letra";
}

// Función para comprobar la respuesta seleccionada por el jugador.
function comprobarRespuesta(opElegida){
    if(opElegida == correcta[posActual]){//acertó
        // Cambiar las clases de estilo para mostrar que la respuesta es correcta y aumentar el contador de respuestas correctas.
        document.getElementById("n" + opElegida).className = "nombre nombreAcertada";
        document.getElementById("l" + opElegida).className = "letra letraAcertada";
        cantidadAcertadas++;
    }else{
        // Cambiar las clases de estilo para mostrar que la respuesta es incorrecta y resaltar la respuesta correcta.
        document.getElementById("n" + opElegida).className = "nombre nombreNoAcertada";
        document.getElementById("l" + opElegida).className = "letra letraNoAcertada";
        document.getElementById("n" + correcta[posActual]).className = "nombre nombreAcertada";
        document.getElementById("l" + correcta[posActual]).className = "letra letraAcertada";
    }
    posActual++;
    // Cargar la siguiente pregunta después de un retraso de 1 segundo (1000 milisegundos).
    setTimeout(cargarMaravilla, 1000);
}

// Función para finalizar el juego.
function terminarJuego(){
    // Ocultar la pantalla de juego y mostrar la pantalla final, mostrando la cantidad de respuestas correctas e incorrectas.
    document.getElementById("pantalla-juego").style.display = "none";
    document.getElementById("pantalla-final").style.display = "block";
    document.getElementById("numCorrectas").innerHTML = cantidadAcertadas;
    document.getElementById("numIncorrectas").innerHTML = maravillas.length - cantidadAcertadas;
}

// Función para volver al inicio y reiniciar el juego desde el principio.
function volverAlInicio(){
    document.getElementById("pantalla-final").style.display = "none";
    document.getElementById("pantalla-inicial").style.display = "block";
    document.getElementById("pantalla-juego").style.display = "none";
}

/*

getElementById() es un método utilizado en JavaScript para 
seleccionar un elemento HTML por su atributo "id". Este método 
devuelve una referencia al elemento con el ID especificado. 
Puedes acceder y modificar sus propiedades, como innerHTML, 
style, etc.

getElementsByClassName() es un método para seleccionar 
elementos HTML por su atributo "class". Este método 
devuelve una colección de elementos que tienen la 
clase especificada. Puedes acceder a ellos mediante 
índices o iterar a través de ellos.

La propiedad innerHTML te permite acceder o modificar 
el contenido HTML de un elemento. Puedes establecer 
el contenido HTML de un elemento o acceder a él. 
Ten en cuenta que al modificar innerHTML, 
debes tener cuidado para evitar ataques de 
inyección de código si el contenido es 
proporcionado por usuarios.

La propiedad style.display se utiliza para controlar 
la visibilidad y visualización de un elemento en la página. 
Puedes establecer style.display en diferentes valores, 
como "none" para ocultar un elemento o "block" para 
mostrarlo.

*/ 