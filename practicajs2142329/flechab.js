//Funcion flecha sin parametros
//version clasica
function sinParametros() {
    return 'Hola mundo';
    
}
console.log(sinParametros());
//version flecha
var sinpParam=()=>'Hola mundo';
console.log('Flecha: '+sinpParam());

//Funcion flecha con parametros
//version clasica
function cuadrado(num) {
    return num*num;
    
}
console.log(cuadrado(10));
//version flecha
var r=num=>num*num;
console.log('Flecha: '+r(10));

//funcion flecha con varios parametros
//version clasica
function sumar(n,m) {
    return n+m;
    
}
console.log(sumar(2,5));
//version flecha
var sumar=(n,m)=>n+m;
console.log('flecha: '+sumar(20,30));

//Suma de numeros pares e impares version flecha
var vec=(array,tam)=>{
    for (let i = 0; i < tam; i++) {
        array.push(Math.round(Math.random()*100));
        
    }
    return array;
}
v=[];
x=5;
console.log('flecha: '+vec(v,x));
console.log('flecha:... '+vec(v,x)[0]);
console.log('La suma de los numeros pares es: '+ sp());

var sp=v=>{
    let suma=0;
    for (let i = 0; i < v.length; i++) {
        if (v[i]%2 == 0) {
            suma += vec[i];
        }
    }  
    return suma;
}


