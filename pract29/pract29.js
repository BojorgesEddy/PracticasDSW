/*
for (let i = 1; i < 8; i++) {
    
    if( i < 4){
        alert("Hola mundo");
    }else if(i == 4){
        alert("Hola mundo, Soy en 4to");
    }else{
        alert("Hola mundo");
    }
}
alert("Acabamos de terminar..");

*/
//----------------------------------------------------------------
let meses = ["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre"];

/*
//for in
for (const key in meses) {
    console.log(key);
}
*/

/*
//for each
meses.forEach(element => {
    console.log(element);
});
*/

/*
//for off
for (const iterator of meses) {
    console.log(iterator);
}
*/

//----------------------------------------------------------------

meses.forEach(element => {
    if(element != "julio"){
        console.log(element);
    }
});
console.log("diciembre");

