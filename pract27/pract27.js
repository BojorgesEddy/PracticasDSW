var peso = prompt("Ingrese su peso");
var opcion = prompt("Opcion 1: peso en marte\nOpcion 2: peso en jupiter");
var peso_tierra = 9.807;
var peso_marte = 3.71;
var peso_jupiter = 24.79;
var resultado;


switch(opcion){
    case "1":
        resultado = (peso * peso_marte)/peso_tierra;
        alert("Su peso en marte es de: "+resultado);
        break;
    case "2":
        resultado = (peso * peso_jupiter)/peso_tierra;
        alert("Su pero en jupiter es de: "+resultado);
        break;
    default:
        alert("No existe esa opcion");
        break;
}

if(opcion == 1){
    resultado = (peso * peso_marte)/peso_tierra;
    alert("Su peso en marte es de: "+resultado);
}
else if(opcion == 2){
    resultado = (peso * peso_jupiter)/peso_tierra;
    alert("Su pero en jupiter es de: "+resultado);
}else{
    alert("No existe esa opcion");
}