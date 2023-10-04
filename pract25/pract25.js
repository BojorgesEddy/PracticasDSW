var valores = [true, 10, false,"codigo","herramientes",7];
var resultado;
if(valores[3] > valores[4]){
    resultado = valores[3]
}else{
    resultado = valores[4];
}
alert(resultado);

var mayor = valores[3] > valores[4];
var menor = valores[3] < valores[4];
alert(mayor +" , "+ menor);


var cierto = valores[0];
var falso = valores[2];

alert((cierto != falso) +" , "+ (cierto == falso) +" , "
        + (cierto > falso) +" , "+ (cierto < falso) +" ,"
        + (cierto >= falso) + " , "+ (cierto <= falso));

var num1 = valores[1];
var num2 = valores[5];

alert("Suma: "+(num1+num2)+", Resta: "+(num1-num2)+", Multiplicacion: "
        +(num1*num2)+", Divicion: "+(num1/num2));