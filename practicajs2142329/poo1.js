//Atributos=propiedades

//primera forma de crear objetos en JS
var persona=new Object();
persona.nombre='Juan'
persona.apellido='Bautista';
persona.mostrar=function(){
    return nombre+' '+apellido;
}

//2da forma de generar objetos en JS
//JSON= Java Script Object Notation -clave:valor
var alumno={
    nombre:'Pedro',
    apellido:'Diaz',
    nombreCompleto:function(){
        return this.nombre+' '+this.apellido;
    }
}
//acceso por operador punto
console.log(alumno.nombreCompleto());
console.log(alumno.nombre);
console.log(alumno.apellido);

//Acceso por operador llave
console.log(alumno['nombreCompleto']);
console.log(alumno['nombre']);
console.log(alumno['apellido']);


//3ra forma de trabajar objetos en JS
function Aprendiz(nombre,apellido) {
    this.nombre=nombre;
    this.apellido=apellido;  
    this.nombreCompleto=function(){
        return this.nombre+' '+ this.apellido;
    }  
}
var ob=new Aprendiz('Luis', 'Diaz');
var ob2=new Aprendiz('Paola','Suarez');
console.log(typeof(ob));
console.log(ob.nombre);
console.log(ob);

//4ta forma de crear objetos en JS, "clasica"
class Estudiante{
    constructor(nombre,apellido){
        this.nombre=nombre;
        this.apellido=apellido;
    }
}
var e1=new Estudiante('Ana','Angel');
var e2=new Estudiante('Jorge','Linero');
console.log(typeof(e1));
console.log(e1.nombre);

//tarea sumar los fraccionarios
/*var fraccionario={
    n1:1,
    n2:2,
    d1:2,
    d2:3,
    suma:function(){
    }
}*/






/*console.log(typeof(objeto));
var num=100;
console.log(typeof(num));
var t='palabra';
console.log(typeof(t));*/