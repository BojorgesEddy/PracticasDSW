function imprimir(){
    
   var num1 = parseInt(document.getElementById("mat1").value);
   var num3 = parseInt(document.getElementById("mat3").value);
   var num2 = parseInt(document.getElementById("mat2").value);
   var num4 = parseInt(document.getElementById("mat4").value);
   var num5 = parseInt(document.getElementById("mat5").value);
   var num6 = parseInt(document.getElementById("mat6").value);
   var num7 = parseInt(document.getElementById("mat7").value);
   var num8 = parseInt(document.getElementById("mat8").value);

   if(isNaN(num1)){
        alert("Exite un espacio vacio...");
        document.getElementById("mat1").focus();
   }else if (isNaN(num2)){
        alert("Exite un espacio vacio...");
        document.getElementById("mat2").focus();
   }else if (isNaN(num3)){
        alert("Exite un espacio vacio...");
        document.getElementById("mat3").focus();
   }else if (isNaN(num4)){
        alert("Exite un espacio vacio...");
        document.getElementById("mat4").focus();
   }else if (isNaN(num5)){
        alert("Exite un espacio vacio...");
        document.getElementById("mat5").focus();
   }else if (isNaN(num6)){
        alert("Exite un espacio vacio...");
        document.getElementById("mat6").focus();
   }else if (isNaN(num7)){
        alert("Exite un espacio vacio...");
        document.getElementById("mat7").focus();
   }else if (isNaN(num8)){
        alert("Exite un espacio vacio...");
        document.getElementById("mat8").focus();
   }else{
    var prom = ((num1+num2+num3+num4+num5+num6+num7+num8)/8);

    var concatena = "Programacion : "+num1+"\n";
        concatena += "Pagina Web : "+num2+"\n";
        concatena += "Sitios Web : "+num3+"\n";
        concatena += "Contaduria : "+num4+"\n";
        concatena += "Español : "+num5+"\n";
        concatena += "Ingles II : "+num6+"\n";
        concatena += "Implementacion : "+num7+"\n";
        concatena += "Python : "+num8+"\n";
        concatena += "Tu promedio es de: "+prom+"\n";

        if (prom > 85) {
            concatena += "Tu promedio fue mayor a 85, Excentantes Ordinario!!";
        } else {
            concatena += "Tu promedio fue de 85 o menor, Debes presentar Ordinario..";
        }
        alert(concatena);
   }
}