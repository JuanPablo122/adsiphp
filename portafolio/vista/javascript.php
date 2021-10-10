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
    <h2>Suma, promedio, número mayor, número menor con funciones flecha</h2>
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
    <h2>Suma y resta de fraccionarios con notación JSON</h2>
    <div class="js1">
        <pre>
//Tarea sumar y restar los fraccionarios
var fraccionario={
    n1:1,
    n2:2,
    d1:2,
    d2:3,
    suma:function(){      
        return 'La suma de los fraccionarios es: '
        +(this.n1*this.d2 + this.d1*this.n2)+'/'+(this.d1 * this.d2);
    }
}
document.write(fraccionario.suma());

var fraccionario={
    n1:1,
    n2:2,
    d1:2,
    d2:3,
    resta:function(){      
        return '<br>La resta de los fraccionarios es: '
        +(this.n1*this.d2 - this.d1*this.n2)+'/'+(this.d1 * this.d2);
    }
}
document.write(fraccionario.resta());

        </pre>
    </div>
    <div class="js3">
        <script src="../js/tareas2JS.js"></script>
    </div>
    <h2>Herencia y composición diagrama Delicia Express</h2>
    <div class="js1">
        <pre>
class Empleados {
    constructor(idEmpleados,NombreEps,idRoles){
        this._idEmpleados=idEmpleados;
        this._NombreEps=NombreEps;
        this._idRoles=idRoles;
    }
    set idEmpleados(idEmpleados){
        this._idEmpleados=idEmpleados;
    }
    get idEmpleados(){
        return this._idEmpleados;
    }
    set NombreEps(NombreEps){
        this._NombreEps=NombreEps;
    }
    get NombreEps(){
        return this._NombreEps;
    }
    set idRoles(idRoles){
        this._idRoles=idRoles;
    }
    get idRoles(){
        return this._idRoles;
    }
    
}

class Cocineros extends Empleados{
    constructor(idCocineros,EspecialidadCocineros,
        idEmpleados,NombreEps,idRoles){
        super(idEmpleados,NombreEps,idRoles);
        this._idCocineros=idCocineros;
        this._EspecialidadCocineros=EspecialidadCocineros;
    }
    set idCocineros(idCocineros){
        this._idCocineros=idCocineros;
    }
    get idCocineros(){
        return this._idCocineros;
    }
    set EspecialidadCocineros(EspecialidadCocineros){
        this._EspecialidadCocineros=EspecialidadCocineros;
    }
    get EspecialidadCocineros(){
        return this._EspecialidadCocineros;
    }
    infoCompleta2(){
        return this._idCocineros+' '+this._EspecialidadCocineros+' '+this._idEmpleados
        +' '+this._NombreEps+' '+this._idRoles;
    }
   
}
class Usuarios{
    constructor(idUsuarios,NombreUsuarios,
        ApellidoUsuarios,EmailUsuarios,ContrasenaUsuarios,grupo){
        this._idUsuarios=idUsuarios;
        this._NombreUsuarios=NombreUsuarios;
        this._ApellidoUsuarios=ApellidoUsuarios;
        this._EmailUsuarios=EmailUsuarios;
        this._ContrasenaUsuarios=ContrasenaUsuarios;
        this._grupo=grupo;
    }
    set idUsuarios(idUsuarios){
        this._idUsuarios=idUsuarios;
    }
    get idUsuarios(){
        return this._idUsuarios;
    }
    set NombreUsuarios(NombreUsuarios){
        this._NombreUsuarios=NombreUsuarios;
    }
    get NombreUsuarios(){
        return this._NombreUsuarios;
    }
    set ApellidoUsuarios(ApellidoUsuarios){
        this._ApellidoUsuarios=ApellidoUsuarios;
    }
    get ApellidoUsuarios(){
        return this._ApellidoUsuarios;
    }
    set EmailUsuarios(EmailUsuarios){
        this._EmailUsuarios=EmailUsuarios;
    }
    get EmailUsuarios(){
        return this._EmailUsuarios;
    }
    set ContrasenaUsuarios(ContrasenaUsuarios){
        this._ContrasenaUsuarios=ContrasenaUsuarios;
    }
    get ContrasenaUsuarios(){
        return this._ContrasenaUsuarios;
    }
    infoCompleta1(){
        return this._idUsuarios+' '+this._NombreUsuarios+' '+this._ApellidoUsuarios
        +' '+this._EmailUsuarios+' '+this._ContrasenaUsuarios;
    }
   
}
var obj1=new Usuarios(33,', Raul,',' Sanchez,',' rsanchez@gmial.com,',' 1234,<br>');
var obj2=new Cocineros(1,', Chef Grillardin o de parrilla,',2,', Sanitas,',4);
var misusuarios=[];
misusuarios.push(obj2);
usuario=new Usuarios(misusuarios);

document.write(obj1.infoCompleta1()+' '+obj2.infoCompleta2());
        </pre>
    </div>
    <div class="js4">
        <script src="../js/tareas3JS.js"></script>
    </div>
</main>           

</body>
</html>