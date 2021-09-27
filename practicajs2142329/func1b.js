function llenarVector(vector,tam) {
    for (let i = 0; i < tam; i++) {
        vector.push(Math.round(Math.random()*100));
        
    }
    return vector;
}
let vec= new Array();
let x=5;//tamaño del arreglo
console.log(llenarVector(vec,x));
console.log('La suma de los numeros pares es: '+ sumPares(vec));

function sumPares(vector) {
    let suma=0;
    for (let i = 0; i < vector.length; i++) {
        if (vector[i]%2 == 0) {
            suma += vec[i];
        }
    }  
    return suma;
}