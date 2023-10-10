var num1 = prompt("Ingrese un numero.... ");
var num2 = prompt("Ingrese otro numero.... ");

if(num1 <= num2){
    alert(num1+" no es mayor que "+num2);
}
if(num2 <= 0){
    alert("Numero "+num2+" es positivo");
}
if(++num1 < num2){
    alert("Incrementar uno en "+num1+" no lo hace mayor que "+num2);
}
