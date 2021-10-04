//Atributos=propiedades

//primera forma de crear objetos en JS
/*var persona=new Object();
persona.nombre='Juan'
persona.apellido='Bautista';
persona.mostrar=function(){
    return nombre+' '+apellido;
}
console.log(persona.mostrar);*/
//2da forma de generar objetos en JS
//JSON= Java Script Object Notation -clave:valor
/*var alumno={
    nombre:'Pedro',
    apellido:'Diaz',
    nombreCompleto:function(){
        return this.nombre+' '+this.apellido;
    }
}
//console.log(typeof(alumno));
alumno.telefono='301222222';
//recorrer claves de objeto con for in
for(atributo in alumno){
    console.log(atributo);
}

//convertir valores de objeto a array
var arreglo=Object.values(alumno);
console.log(arreglo);

console.log(alumno);
delete alumno.apellido;
console.log(alumno);

//acceso por operador punto
console.log(alumno.nombreCompleto());
console.log(alumno.nombre);
console.log(alumno.apellido);

//Acceso por operador llave
console.log(alumno['nombreCompleto']);
console.log(alumno['nombre']);
console.log(alumno['apellido']);*/

//Tarea sumar y restar los fraccionarios
var fraccionario={
    n1:1,
    n2:2,
    d1:2,
    d2:3,
    suma:function(){      
        return 'La suma de los fraccionarios es: '+(this.n1*this.d2 + this.d1*this.n2)+'/'+(this.d1 * this.d2);
    }
}
console.log(fraccionario.suma());

var fraccionario={
    n1:1,
    n2:2,
    d1:2,
    d2:3,
    resta:function(){      
        return 'La resta de los fraccionarios es: '+(this.n1*this.d2 - this.d1*this.n2)+'/'+(this.d1 * this.d2);
    }
}
console.log(fraccionario.resta());

//3ra forma de trabajar objetos en JS
/*function Aprendiz(nombre,apellido) {
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
console.log(ob2.nombre);
console.log(ob.nombreCompleto());
console.log(ob2.nombreCompleto());*/

//4ta forma de crear objetos en JS, "clasica"
/*class Estudiante{
    constructor(nombre,apellido){
        this.nombre=nombre;
        this.apellido=apellido;
    }
}
var e1=new Estudiante('Ana','Angel');
var e2=new Estudiante('Jorge','Linero');
console.log(typeof(e1));
console.log(e1.nombre);*/








/*console.log(typeof(objeto));
var num=100;
console.log(typeof(num));
var t='palabra';
console.log(typeof(t));*/