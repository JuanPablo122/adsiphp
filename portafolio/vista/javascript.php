<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilo_js.css">
    <title>JavaScript</title>
</head>
<body>
<header>
    <nav>
        <a href="inicio.php">Inicio Portafolio</a>
    </nav>       
    <section class="textos-header">
        <h1>Ejercicios JavaScript</h1>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;" >
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
    <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg>
    </div>
</header>
<main>
    <h2>Suma, promedio, numero mayor, numero menor con funciones flecha</h2>
    <div class="js1">
    <pre>
    //Generar el array

var vec=(array,tam)=>{
    for (let i = 0; i < tam; i++) {
        array.push(Math.round(Math.random()*100));
    }
    return array;
}
v=[];
x=5;
document.write('Flecha: '+vec(v,x));

//Suma del array
var sum=v=>{
    let suma=0;
    for (let i = 0; i< v.length; i++) {
        suma+=v[i];
    }  
    return suma; 
}
document.write('<br>La suma de los elementos del array es: '+ sum(v));

//Promedio del array
var prom=(v,x)=>{
    let promedio=0;
    for (let i = 0; i< v.length; i++) {
        promedio+=v[i]/x;
    }  
    return promedio; 
}
document.write('<br>El promedio de los elementos del array es: '+ prom(v,x));

//Mayor del array
var mayor=v=>{
    let may=0;
    for (let i = 0; i< v.length; i++) {
        if (v[i]>may) {		
            posicion=i;
            may=v[i];
        }
    }  
    return may; 
}
document.write('<br>El numero mayor de los elementos del array es: '
+ mayor(v)+' y su posicion es: '+posicion);

//Menor del array
var menor =v=>Math.min(...v);
document.write('<br>El numero menor es: '+menor(v));
    </pre>
    </div>
    <div class="js2">
    <script src="../js/tareasJS.js"></script>
    </div>
</main>           

</body>
</html>